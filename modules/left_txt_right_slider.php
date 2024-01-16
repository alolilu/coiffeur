<div class="left_txt_right_slider">
    <div class="row">
        <div class="col-md-3">
            <h1>Notre salon</h1>
            <p>Découvrez toutes les photos de notre salon</p>
            <img id="logoimg" src="assets/img/logo.png" alt="">
        </div>
        <div class="col-md-9">
           <img src="assets/img/loco1.png" alt="">
           <img src="assets/img/loco2.jpg" alt="">
           <img src="assets/img/loco3.png" alt="">
           <img src="assets/img/loco4.jpg" alt="">
        </div>
    </div>
</div>


<style>
    .left_txt_right_slider {
    padding: 120px 30px;
    background-color: rgb(245, 158, 125);
}

    .left_txt_right_slider .row{
        margin-left: auto;
        margin-right: auto;
    }

    .left_txt_right_slider .row .col-md-3{
        display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }

    .left_txt_right_slider .row .col-md-3 h1{
        color: black;
    font-size: 60px;
    font-family: 'Abril Fatface', cursive;
    letter-spacing: 3px;
    text-align: center;
    width: 100%;
    font-weight: 300;
    }

    .left_txt_right_slider .row .col-md-3 p{
        color: black;
    font-size: 20px;
    text-align: center;
    margin: 20px 0px;
    width: 100%;
    }

    .left_txt_right_slider .row .col-md-3 img{
        width: 13vw;
        text-align: center;
    }

    .left_txt_right_slider .row .col-md-9{
        display: flex;
        overflow: hidden;
    align-items: center;
    justify-content: center;
    }

    .left_txt_right_slider .row .col-md-9 img{
        height: 22vh;
    max-width: 15vw;
    object-fit: cover;
    margin: 0px 20px;
        transition: 0.2s;
    }

    .left_txt_right_slider .row .col-md-9 img:hover{
        transform: scale(1.15);
        cursor: pointer;
        transition: 0.2s;
    }

    @media screen and (max-width: 992px) {
      
}

@media screen and (max-width: 768px) {
    .left_txt_right_slider .row .col-md-3 h1 {
    font-size: 40px;
    font-weight: 900;
}
.left_txt_right_slider .row .col-md-3 p {
    font-size: 14px;
    margin: 8px 0px;
}
.left_txt_right_slider .row .col-md-9 img {
    height: 22vh;
    width: 48vh;
    min-width: 36vh;
    margin: 10px 20px;
}
.left_txt_right_slider .row .col-md-9 {
    flex-wrap: wrap;
}

.left_txt_right_slider .row .col-md-3 img {
    width: 22vh;
}
.left_txt_right_slider .row .col-md-9 img:hover{
        transform: scale(1);
    }
    .left_txt_right_slider {
    padding: 30px 30px;
    background-color: rgb(245, 158, 125);
}
}

</style>