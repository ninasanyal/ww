<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">

    * {
  margin: 0;
  padding: 0;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
}

.banner-img {
  margin: 80px 115px;
  width: 60%;
}

.banner-img img {
  width: 100%;
  margin-bottom: -80px;
}
.banner {
  position: relative;
}

.banner .banner-title {
  position: absolute;
  left: 80%;
  top: 30%;
}
 .banner .banner-title h1  {
  font-size: 50px;
  background: black;
  color: white;
  line-height: 70px;
  padding: 0 10px 0 10px;
  text-transform: uppercase;
}

.fashion-trends {
  padding: 100px 0;
}

.fashion-box {
  margin: 80px 0;
}
.page .title-styletext-center h1 {
  padding: 40px 0;
  text-align: center;
  text-decoration: none;
}

.title-styletext-center {
  margin: 0 auto 80px;
  height: 120px;
  width: 80%;
  min-width: 700px;
  background: lightpink;
  position: relative;

}



.trending-img {
  position: relative;
  margin-bottom: 15px;
}

.trending-img img {
  height: 750px;
  width: 100%;
}

.trending-img a{
  text-decoration: none;
  background-color: lightcoral;
  color: black;
  left: 50%;
}



.overlay1 {
  height: 500PX;
  width:100%;
  background: lightcoral;
  position: absolute;
  top: 0;
  opacity: 0;
  transition: 0.5s;
}

.overlay2{
  height: 500PX;
  width:100%;
  background: yellow;
  position: absolute;
  top: 0;
  opacity: 0;
  transition: 0.5s;
}

.overlay3 {
  height: 500PX;
  width:100%;
  background: lightgreen;
  position: absolute;
  top: 0;
  opacity: 0;
  transition: 0.5s;
}

.trending-img:hover .overlay1 {
  opacity: 0.5;
  height: 100%;
}

.trending-img:hover .overlay2 {
  opacity: 0.5;
  height: 100%;
}

.trending-img:hover .overlay3 {
  opacity: 0.5;
  height: 100%;
}

.offer {
  background-image: url(https://th.bing.com/th/id/OIP.UA5jZDW6wLZQ6PrlQOkzpwHaEo?pid=ImgDet&rs=1);
  background-size: cover;
  background-position: center;
}

.row {
  margin: initial !important;
}

.subscribe {
  width: 500px;
  max-width: 500px;
  margin-top: 80px;
  margin-bottom: 20px;
  padding: 60px;
  background: #ffffff8c;
}


.offer a{
  width: 500px;
  display: block;
  color: lightpink;
  background: mediumvioletred;
  text-decoration: none !important;
  padding: 5px;
  text-align: center;
}

.offer img {
  width:50%;
  margin-bottom: -100px;
  margin-top: 100px;
}

.footer-icons {
  text-align: right;
}

.footer-icons .fab {
  margin: 0 10px auto;
  font-size: 20px;
  cursor: pointer;
}


  .banner-title {
    top: 150px;
    left: 50%;
    transform: translateX(-50%);
  }

  .banner-title h1 {
    font-size: 16px;
    padding: 5px;
    line-height: 20px;
    top: 20%;
  }

  .title-style h1 {
    font-size: 25px;
  }

  .fashion-box {
    margin: -20px 0;
  }

  .title-style {
    margin: 0 auto 80px;
    height: 120px;
    width: 50%;
    min-width: 250px;
    background: #fff;
    position: relative;
    box-shadow: 0 4px 5px 0 rgba(0, 0, 50, 0.5);
  }



  .offer img {
    margin-top: 40px ;
    margin-bottom: 0 ;
  }


.page {
width: 100%;

}

  </style>
</head>
<body>
<div class="page">
  <div class="banner">
    <div class="banner-img">
      <img src="images/yp.png" alt="" />
    </div>
    <div class="banner-title">
      <h1>Youth is the future of a country.</h1>
    </div>
  </div>
</section>



<section class="fashion-trends">
  <div class="container">
    <div class="fashion-box">
      <div class="title-styletext-center">
        <h1>There is only one chance for you to be young</h1>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="trending-img">
          <img src="images/t1.png" alt="" />
          
          <a href="category.php?category=PINK"><div class="overlay1"></div></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="trending-img">
          <img src="images/t2.png" alt="" />
          
          <a href="category.php?category=YELLOW"><div class="overlay2"></div></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="trending-img">
          
          <img src="images/t3.png" alt="" />
        
          <a href="category.php?category=GREEN"><div class="overlay3"></div></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="offer">
  <div class="row">
    <div class="col-md-6 text-center">
      <img src="Images/rcp1.jpg" alt="" /><img src="Images/rcp2.jpg" alt="" />
    </div>
    <div class="col-md-6">
      <div class="subscribe">
        <h4>FIND Exclusive</h4>
                <a href="home.php" target="_blank" rel="noopener noreferrer">CHECK OUT THE THE CATAGORIES</a>
      </div>
    </div>
  </div>
</section>





<section class="footer">
  <div class="container">
      
      

    <hr>
    <div class="row">
      <div class="col-md-8">
        <p class="copyright">&copy; Copyright</p>
      </div>
      
</section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>