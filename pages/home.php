<div class="accueil2">
    <div class="row">
        <div class="col-md-6 txt">
            <h1>SALON <br> DE <br>COIFFURE</h1>
            <p class="texte">Bienvenue dans l'univers de la beauté capillaire à Saint-Mery, en Île-de-France, où chaque
                mèche raconte une histoire, chaque coupe sculpte la confiance en soi, et chaque couleur révèle votre
                éclat intérieur.</p>
            <a href="">En savoir plus</a>
        </div>
        <div class="col-md-6 image">
            <img src="assets/img/bgsic.png" alt="">
        </div>
    </div>
</div>
<div class="titre_txt_link">
    <h1>NOS SERVICES</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sint maiores ratione delectus ipsam?
        Aspernatur, libero possimus! Blanditiis, quaerat voluptatum?</p>
    <a href="<?=$routes['services']?>">découvrez nos services</a>
</div>

<?php include "modules/left_txt_right_slider.php"; ?>

<div class="realisation1">
    <div class="parent">
        <div class="div1"><img src="assets/img/coiffure.jpg" alt=""></div>
        <div class="div2"><img src="assets/img/coiffure6.jpg" alt=""></div>
        <div class="div3"><img src="assets/img/coiffure1.jpg" alt=""></div>
        <div class="div4"><img src="assets/img/coiffure3.jpg" alt=""></div>
        <div class="div5"><img src="assets/img/coiffure4.jpg" alt=""></div>
        <div class="div6"><img src="assets/img/coiffure2.jpg" alt=""></div>
        <div class="div7"><img src="assets/img/coiffure5.jpg" alt=""></div>
    </div>
</div>

<div class="bg_img_txt">
    <h3>Avec et sans rendez-vous</h3>
    <span></span>
    <h3>par téléphone au</h3>
    <h4>06 98 38 50 77</h4>
</div>


<?php 

$api_key = 'AIzaSyBt-aO-0L6Quc43q2Su-pK8DzwIo4rpbTE';
$place_id = 'ChIJqfHWR1ZX70cRNAFh22M-tCk';

$url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$place_id&key=$api_key&language=fr";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);

if ($response === false) {
    echo 'Erreur cURL : ' . curl_error($curl);
} else {
    $data = json_decode($response, true);
    if ($data['status'] == 'OK') {
        $reviews = $data['result']['reviews'];
        // echo'<pre>'; var_dump($reviews); echo'</pre>';
    }
}

curl_close($curl);


?>

<div class="google_avis1" id="google_avis1">
    <h1>Nos avis Google</h1>
    <div id="slider-container">
        <div id="slider">
            <?php foreach ($reviews as $review) : ?>
            <div class="slide">
                <img src="<?php echo $review['profile_photo_url']; ?>" alt="">
                <p class="nom"><?php echo $review['author_name']; ?></p>
                <div class="star">
                    <?php
                        $rating = $review['rating'];
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                echo '<i class="fa-solid fa-star"></i>';
                            } else {
                                echo '<i class="fa-solid fa-star"></i>';
                            }
                        }
                        ?>
                </div>
                <p class="date"><?php echo $review['relative_time_description']; ?></p>
                <p class="commentaire"><?php echo $review['text']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>