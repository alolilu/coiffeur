<div class="acceuil3">
    <p class="nameBoite">Entreprise</p>
    <p class="trai"></p>
    <h1>Contact</h1>
</div>

<div class="map_contact">
    <div class="row">
        <div class="col-md-6 map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.6684502439753!2d2.8234229764432537!3d48.57789862040481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ef575647d6f1a9%3A0x29b43e63db610134!2sMatelya%20beauty!5e0!3m2!1sfr!2sfr!4v1695636562369!5m2!1sfr!2sfr"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 form">
            <form class="formulaire" action="" method="post">
                <h1>Formulaire de contact</h1>
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Entrer votre nom">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Entrer une adresse e-mail valide">
                <label for="message">Message</label>
                <textarea name="message" placeholder="Ecrivez votre message" id="" cols="30" rows="10"></textarea>
                <button type="submit" name="submit">Envoyez votre demande</button>
            </form>
        </div>
    </div>
</div>

<?php

require_once __DIR__.'../../mail/vendor/autoload.php';
require_once __DIR__.'../../mail/functions.php';
require_once __DIR__.'../../mail/config.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);
$email = 'alexis.fredriksen5@gmail.com';
$mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
$mail->isSMTP();
$mail->Host = CONTACTFORM_SMTP_HOSTNAME;
$mail->SMTPAuth = true;
$mail->Username = CONTACTFORM_SMTP_USERNAME;
$mail->Password = CONTACTFORM_SMTP_PASSWORD;
$mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
$mail->Port = CONTACTFORM_SMTP_PORT;
$mail->setFrom('alexis.fredriksen5@gmail.com', 'Contact');
$mail->addAddress($email);
$mail->addReplyTo('alexis.fredriksen5@gmail.com');
$mail->isHTML(true); 

if(isset($_POST['submit'])){
    $Subject = "Contact";
    $message = $_POST['message'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mail->Subject = $Subject;
    $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
    <style>
    .email {
        height: auto;
        width: 100%;
        background-color: rgb(247, 247, 247);
        text-align: center;
    }

    .contenue_email {
        width: 40%;
        background-color: white;
        padding-top: 50px;
        padding-bottom: 100px;
        margin: 0 auto;
    }

    .contenue_email h3 {
        color: black;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 3vh;
    }

    .row {
        margin: 3vh 0;
        border-bottom: 1px solid #c9c7c7;
        padding: 25px;
        text-align: left;
    }

    .labelTexte {
        color: #141414;
        font-size: 1.8vh;
        font-weight: 500;
    }

    .resultTexte {
        color: gray;
        font-size: 1.8vh;
        font-weight: 500;
    }
</style>

    </head>
    <body>
    <div class="email">
    <div class="contenue_email">
        <h3>La table enchantée</h3>
        <div class="row">
            <div class="col-md-6 labelTexte">
                <p>Nom du client :</p>
            </div>
            <div class="col-md-6 resultTexte">
                <p>'.$nom.'</p>
            </div>
        </div>
        <div class="row labelTexte">
            <div class="col-md-6">
                <p>Adresse e-mail du client :</p>
            </div>
            <div class="col-md-6 resultTexte">
                <p>'.$email.'</p>
            </div>
        </div>
        <div class="row labelTexte">
            <div class="col-md-6">
                <p>Message du client</p>
            </div>
            <div class="col-md-6 resultTexte">
                <p>'.$message.'</p>
            </div>
        </div>
    </div>
</div>

    </body>
    </html>
    ';

    $delayTime = 3;

    if($mail->send()) {
        echo '<script type="text/javascript">alert("Votre message a été envoyé !");</script>';
    }else{
        echo "<script type='text/javascript'>alert('Érreur lors de l'envoie du message !');</script>";
    }
}    

?>