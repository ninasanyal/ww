<!doctype html>
<html lang="en">
  <head>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap"
      rel="stylesheet"
    />
    <style type="text/css">

      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

:root {
  --primary-color: #f1faff;
  --text-dark: #030712;
  --text-light: #6b7280;
  --extra-light: #fbfbfb;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__title {
  padding-bottom: 0.5rem;
  margin-bottom: 4rem;
  text-align: center;
  font-size: 2rem;
  font-weight: 600;
  color: var(--text-dark);
  position: relative;
}

.section__title::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  height: 3px;
  width: 75px;
  background-color: var(--text-dark);
}

.btn {
  padding: 0.75rem 2rem;
  font-size: 0.8rem;
  outline: none;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

a {
  text-decoration: none;
  color: lightcoral;
}

img {
  width: 100%;
  display: block;
}

body {
  font-family: "Montserrat", sans-serif;
}

.header__bar img {
width: 100%;
height: 380px;
}

.nav__container {
  padding: 2rem 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.nav__logo {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--text-dark);
}

.nav__links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.link a {
  padding: 0 0.5rem;
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--text-light);
  transition: 0.3s;
}

.link a:hover {
  color: var(--text-dark);
}

.nav__icons {
  display: flex;
  gap: 1rem;
}

.nav__icons span {
  font-size: 1.25rem;
  cursor: pointer;
}

header {
  margin-top: 10rem;
  background-color: var(--primary-color);
}

.header__container {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
}


.header__content p {
  font-size: 20px;
  font-weight:bold;
  color: orangered;
  margin-bottom: 0.5rem;
}

.header__content h2{
  font-size: 60px;
  font-weight: 600;
  color: gold;
  margin-bottom: 2rem;

}



.header__content .btn {
  background-color: var(--text-dark);
  color: var(--white);
}

.collection__container {
  position: relative;
}

.collection__container img {
  max-width: 400px;
  margin: auto;
}

.collection__content {
  position: absolute;
  top: 50%;
  left: 2rem;
  transform: translateY(-50%);
}

.collection__content .section__title {
  margin-bottom: 2rem;
}


.collection__content p {
  font-size: 0.9rem;
  color: var(--text-DARK);
  margin-bottom: 0.5rem;
}

.collection__content h4 {
  font-size: 1.2rem;
  font-weight: 800;
  color:RED ;
  margin-bottom: 1rem;
}

.collection__content .btn {
  border: 1px solid var(--text-dark);
  color: var(--text-dark);
  background-color: var(--white);
}

.collection__content .btn:hover {
  background-color: var(--text-dark);
  color: var(--white);
}

.sale__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

.sale__card {
  position: relative;
  overflow: hidden;
}

.sale__content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  color: var(--white);
  text-align: center;
}

.sale__title {
  font-size: 2rem;
  font-weight: 600;
}

.sale__title span {
  font-size: 2.5rem;
}

.sale__subtitle {
  font-size: 1rem;
}

.sale__btn {
  margin-top: 2rem;
  color: var(--white);
  background-color: var(--text-dark);
}

.sale__card::before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  top: -100%;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  transition: 0.5s;
}

.sale__card:hover::before {
  top: 0;
}

.sale__card:hover .sale__btn {
  color: var(--text-dark);
  background-color: var(--white);
}

.musthave__nav {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
  margin-bottom: 2rem;
}

.musthave__nav a {
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-light);
  transition: 0.3s;
}

.musthave__nav a:hover {
  color: var(--text-dark);
}

.musthave__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}

.musthave__card {
  display: grid;
  gap: 0.5rem;
  color: var(--text-dark);
}

.musthave__card h4 {
  font-size: 1rem;
  font-weight: 600;
}

.musthave__card p {
  font-size: 0.9rem;
  font-weight: 500;
  margin-bottom: 1rem;
}

.musthave__card p del {
  font-weight: 400;
  color: var(--text-light);
}

.musthave__card img{
  height: 400px;
}

.footer_section {
    width: 100%;
    float: left;
    background-color: black;
    height: auto;
    background-size: 100%;
    padding-bottom: 60px;
}



.footer_logo_1 img {
    height: 50px;
    width: 50px;
top: 40%;
}

.footer_logo_1 {
    width: 100%;
    top: 10%;
    float: left;
    text-align: center;
}

.address_bt {
    width: 100%;
    float: left;
}

.address_bt ul {
    margin: 0px;
    padding: 0px;
}

.address_bt li {
    font-size: 16px;
    color: lightcoral;
    padding: 10px 0px 0px 0px;
}

.address_bt li a {
    color: white;
    font-weight: 800;
    text-decoration: none;
}

.address_bt li a:hover {
    color:lightcoral;
}

.padding_left10 {
    padding-left: 10px;
}

.address_text {
    font-size: 24px;
    color:lightpink;
    text-transform: uppercase;
}

.dummy_text {
    width: 100%;
    float: left;
    font-size: 14px;
    color: WHITE;
    margin: 0px;
    text-align: center;
    padding-top: 20px;
    font-weight: 800;
}

.ipsum_text {
    width: 65%;
    float: left;
    font-size: 14px;
    color: white;
    margin: 0px;
    font-weight: 800;
    padding-top: 10px;
}

.contact_section {
    width: 100%;
    float: left;
}

.contact_taital {
    width: 100%;
    float: left;
    color: #1a1c1b;
    font-weight: bold;
    font-size: 40px;
    text-transform: uppercase;
}

.contact_text {
    width: 100%;
    float: left;
    color: #252525;
    margin: 0px;
    font-size: 16px;
}

.contact_main {
    width: 100%;
    display: flex;
    margin-top: 45px;
}

.contact_bt {
    width: 200px;
}

.contact_bt a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    padding: 10px 30px;
    background-color: #252525;
    text-transform: uppercase;
    margin-right: 15px;
    border-radius: 5px;
    text-align: center;
}

.contact_bt a:hover {
    background-color: #252525;
    color: #ffffff;
}

.newletter_bt {
    width: 200px;
    margin-left: 20px;
}

.newletter_bt a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #252525;
    padding: 10px 30px;
    background-color: #fef4ec;
    text-transform: uppercase;
    margin-right: 15px;
    border-radius: 5px;
    text-align: center;
}

.newletter_bt a:hover {
    background-color: #252525;
    color: #ffffff;
}

.map_main {
    width: 100%;
    float: left;
    margin-top: 90px;
}

.contact_section_2 {
    width: 100%;
    float: left;
}



.main {
    width: 54%;
    float: right;
}

.social_icon {
    width: 100%;
    margin: 0 auto;
    text-align: center;
    padding-top: 40px;
    border-bottom: 1px solid PINK;
    padding-bottom: 30px;
}

.social_icon  {
    margin: 0px;
    padding: 0px;
    display: inline-block;
    text-align: center;
}

.social_icon  {
    float: left;
    font-size: 30px;
    color: lightcoral;
    padding: 10px;
    text-align: center;
}

.social_icon  a {
    color: lightcoral;
}

.social_icon  a:hover {
    color: WHITE;
}


.copyright_section {
    width: 100%;
    float: left;
    background-color: #252525;
    height: auto;
}

.copyright_text {
    width: 100%;
    color: #ffffff;
    text-align: center;
    font-size: 16px;
    margin: 20px 0px;
}

.copyright_text a {
    color: white;
}

.copyright_text a:hover {
    color: lightcoral;
}

.margin_top90 {
    margin-top: 90px;
}

.gap{
  height: 50px;
}

.product_section {
    width: 100%;
    float: left;
    padding-bottom: 90px;
}

.product_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    text-transform: uppercase;
    text-align: center;
    color: yellow;
    font-weight: 800;
    text-shadow: 4px 2px 2px orange;
}

.product_text {
    width: 100%;
    float: left;
    font-size: 16px;
    text-align: center;
    color: orange;
    margin: 0px;
    font-weight: 800;
}

.product_section_2 {
    width: 100%;
    float: left;
    padding-top: 30px;
}

.product_box {
    width: 100%;
    background-color: #ffffff;
    height: 550px;
    border: 1px solid #7d7d7c;
    padding: 20px 0px 0px 0px;
    margin-top: 30px;
}

.product_box img{
    height: 350px;
    width: 270px;
}

.bursh_text {
    width: 100%;
    font-size: 20px;
    text-align: center;
    color: #1a1c1b;
    font-weight: 600;
}

.lorem_text {
    width: 100%;
    font-size: 14px;
    text-align: center;
    color: #50504f;
    margin: 0px;
}

.image_1 {
    width: 100%;
    text-align: center;
    margin: 20px 0px;
    padding: 0px 20px;
    height: 200px;
}

.reviews {
    width: 100%;
    display: flex;
    background-color: black;
    height:50px;
    padding: 20px 10px 13px 10px;
}

.reviews h2{
    font-size: 13px;
        color: white;
        font-weight: bold;
}

.btn_main {
    width: 100%;
    display: flex;
    background-color: #000;
    height:75px;
    padding: 20px 10px 13px 10px;
}

.buy_bt {
    float: left;
    width: 100%;
}

.buy_bt ul {
    margin: 0px;
    padding: 0px;
}

.buy_bt li a {
    float: left;
    font-size: 10px;
    color: black;
    font-weight: 800;
    padding: 5px 10px;
    background-color: lightyellow;
    text-transform: uppercase;
    margin-right: 15px;
    border-radius: 40px;
    text-decoration: none;

}

.buy_bt li a:hover {
    background-color: lightcoral;
    color: white;
    font-size: 800;
}



.price_text {
    font-size: 16px;
    font-weight: 800;
    color: #fefefd;
    width: 60%;
    padding-top: 5px;
    text-align: right;
}



   .reviews
      .stars{
        display: inline-block;
        list-style: none;
        padding: 0;
        }

.reviews .stars li{
        display: inline-block;
          }

          .fa{
            color: #f7c01b;
          }


.video{
    width: 100%;
    top: -7%;
    position: fixed;

}

.space a{
    color: lightcoral;
    font-size: 18PX;
    margin-left: 60PX;
    margin-top: 20px;
    font-weight: 800;
    text-decoration: none;
    position: absolute;
}


.space   H3{
    color: lightcoral;
    font-size: 18PX;
    margin-LEFT: 1300PX;
    margin-top: ;
    font-weight: 800;
    text-decoration: none;
    position: absolute;
}

.allpage{
    position: absolute;
    background-image: url(https://i.pinimg.com/564x/47/48/c3/4748c313b415aee91214b4f1dcb2775d.jpg);
    width: 100%;
}

.space{
    height: 800px;
    width: 100%;
}

 .space h1{
    text-align: center;
    font-size: 60px;
    margin-left: 35%;
    margin-top: 20%;
    position: absolute;
    color: yellow;
    font-family: serif;
    font-weight: 800;
    text-shadow: 4px 4px 4px orange ;
}

 .space h2{
    text-align: center;
    font-size: 40px;
    margin-left: 40%;
    margin-top: 25%;
    position: absolute;
    color: lightcoral;
    font-family: serif;
    font-weight: 800;
    text-shadow: 4px 4px 4px white ;
}

  </style>
  </head>
  <body>
    <div class="video">
 <video autoplay muted loop src="VID/gold.mp4" width="1500">
</div>

<div class="space"> <a href="ww.php" >WARDROBE WONDERS</a>
<h1>FEEL SPECIAL</h1>
<h2>ROYAL SECTION</h2>
<a href="home.php" ><H3>BACK</H3></a></div>

<div class="allpage">

    <div class="header__bar"><img src="images/GOTO.png"> </div>
 <header>
      <div class="section__container header__container">

        <div class="header__content">

          <p>Royal Section</p>
          <h2>Discover & Shop<br />GOLDEN BALL</h2>
        </div>
      </div>
    </header>


     <div class="gap"> 
            </div>


    <section class="section__container sale__container">
      <h2 class="section__title">PREMIUM OUTFITS</h2>
      <div class="sale__grid">
        <div class="sale__card">
          <img src="images/T1.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">ROSE</p>
            <h4 class="sale__title">sale <span>40%</span> off</h4>
            <p class="sale__subtitle">- 4999-</p>
            <a href="view_page.php?pid=25">
            <button class="btn sale__btn">SHOP NOW</button>
        </a>
          </div>
        </div>
        <div class="sale__card">
          <img src="images/T2.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">LOTUS</p>
            <h4 class="sale__title">sale <span>25%</span> off</h4>
            <p class="sale__subtitle">- 5999 -</p>
  <a href="view_page.php?pid=26">            
    <button class="btn sale__btn">SHOP NOW</button>
        </a>          </div>
        </div>
       <div class="sale__card">
          <img src="images/T3.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">DAISY</p>
            <h4 class="sale__title">sale <span>20%</span> off</h4>
            <p class="sale__subtitle">- 6499 -</p>
  <a href="view_page.php?pid=28">
            <button class="btn sale__btn">SHOP NOW</button>
        </a>          </div> 
        </div>
      </div>
    </section>


     <div class="gap"> 
            </div>


      <div class="salepic"> 
              <img src="images/TT.png">
            </div>



    <section class="section__container sale__container">
      <div class="sale__grid">
        <div class="sale__card">
          <img src="images/T4.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">Peach</p>
            <h4 class="sale__title">sale <span>40%</span> off</h4>
            <p class="sale__subtitle">- 2999 -</p>
  <a href="view_page.php?pid=29">
            <button class="btn sale__btn">SHOP NOW</button>
        </a>
          </div>
        </div>
        <div class="sale__card">
          <img src="images/T5.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">Blacky</p>
            <h4 class="sale__title">sale <span>25%</span> off</h4>
            <p class="sale__subtitle">- 3999 -</p>
  <a href="view_page.php?pid=30">            
    <button class="btn sale__btn">SHOP NOW</button>
        </a>          </div>
        </div>
       <div class="sale__card">
          <img src="images/T6.jpg" alt="sale" />
          <div class="sale__content">
            <p class="sale__subtitle">Berry</p>
            <h4 class="sale__title">sale <span>20%</span> off</h4>
            <p class="sale__subtitle">- 5999 -</p>
  <a href="view_page.php?pid=31">
            <button class="btn sale__btn">SHOP NOW</button>
        </a>          </div> 
        </div>
      </div>
    </section>


 



    <nav class="section__container nav__container">
      <a href="home.php" class="nav__logo">BACK</a>
    </nav>
   </section>
    

     <div class="gap"> 
            </div>

  <!---->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>