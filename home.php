<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WARDROBE WONDERS</title>
   <link rel="icon" href="images/111.jpg">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
   

.banner{
    padding: 3rem 7%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 5px;
    background-image: url(https://64.media.tumblr.com/677abb2423a8fe214e7cb1ea64f2a135/tumblr_inline_qdzq81hbbg1w3wz28_500.jpg);
}

.inner-banner{
    flex: 1 1 45rem;
}

.inner-banner h1{
    font-size: 40px;
    font-weight: bold;
    padding: .5rem 0;
    color: deeppink;
}
.inner-banner p{
    font-size: 1.7rem;
    font-weight: bold;
    padding: 2rem;
}
.banner a{
    padding: 10px 20px;
    background: black;
    color:white;
    text-decoration: none;
    font-size: 1.7rem;
    text-align: center;
    margin-top: .5rem;
    border-radius: 15px;
    font-weight: 800;
}

.banner a:hover{
    padding: 10px 20px;
    background: white;
    color: lightcoral;
    font-weight: 800;
}


.gap {
   height: 200px;
   width: 100%;
}




.black{
    padding: 3rem 7%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 5px;
    background-image: url(https://th.bing.com/th/id/OIP.YVqZZZ7aC6sX4fNsqC3FswHaE8?pid=ImgDet&rs=1);
}

.inner-black{
    flex: 1 1 45px;
}

.inner-black h1{
    font-size: 40px;
    font-weight: bold;
    padding: .5rem 0;
    color: white;
    text-align: left;
}
.inner-black p{
    font-size: 1.7rem;
    font-weight: bold;
    padding: 2rem;
    color: darkgray;
}
.black a{
    padding: 10px 20px;
    background: white;
    color:black;
    text-decoration: none;
    font-size: 1.7rem;
    text-align: center;
    margin-top: .5rem;
    border-radius: 15px;
    font-weight: 800;
}

.black a:hover{
    padding: 10px 20px;
    background: grey;
    color: white;
    font-weight: 800;
}



</style>
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="home-bg" >


   <section class="home">

      <div class="content">
         <span>WELCOME</span>
         <h3>WE WILL PROVIDE YOU THE BEST DESIGNES FROM US</h3>
         <p>We make trends, you make memories. Life is too short to wear the same things everyone else is wearing. Dress for who you are, not what they want you to be. We are stylish and sophisticated, just like you!</p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">SPECIAL CATEGORIES</h1>

   <div class="box-container">

      <div class="box">
         <h3>YOUTH</h3>
         <img src="images/p1.jpg" alt="" width="100">
         <p>Youth is the future of a country.don't waste it</p>
         <a href="youth.php" class="btn">SHOP</a>
      </div>

      <div class="box">
         <h3>WOMEN</h3>
         
         <p>Little girls with dreams become women with vision.</p>
         <img src="images/p2.jpg" alt="" width="100">
         <a href="women.php" class="btn">SHOP</a>
      </div>
      <div class="box">

         <h3>SAREE</h3>
         <img src="images/sareep.png" alt="" width="100">
         <p>BEST SECTION OF TRADITIONAL SECTION</p>
         <a href="category.php?category=SAREE" class="btn">SHOP</a>
      </div>

      <div class="box">
         <h3>LAHENGA</h3>
         <p>NAMASTE INDIA GET THE SIDE OF BHARAT</p>
        <img src="images/lahengap.png" alt="" width="100">   
         <a href="category.php?category=LAHENGA" class="btn">SHOP</a>
      </div>

   </div>

</section>


<div class="gap">

</div>


<div class="banner">
    <div class="inner-banner">
 <video autoplay muted loop src="VID/gold.mp4" width="800"   >
    </div>
    <div class="inner-banner">
        <h1>Be the queen of your own kingdom</h1>
        <p>We are here to style you.Check out the accesories we have specially for you.
        get yourself done with beauty and Sometimes people are beautiful. Not in looks. Not in what they say. Just in what …
        “For attractive lips, speak words of kindness. For lovely eyes, seek out the good …
        “That's always seemed so ridiculous to me, that people want to be around …
        “Think of all the beauty still left around you and be happy</p>
    <a href="GOLD.PHP" class="submit">Shop now</a>
    </div>
</div>









<section class="home-category">

   <h1 class="title">ACCESORIES</h1>

   <div class="box-container">

      <div class="box">
         <h3>PERFUME</h3>
         <p>SMELL THE WORLD</p>
        <img src="images/C1.png" alt="" width="100">   
         <a href="category.php?category=PERFUME" class="btn">SHOP</a>
      </div>

      <div class="box">
         <h3>MAKEUP</h3>
         <p>YOUR SKIN OUR CARE</p>
                 <img src="images/C2.png" alt="" width="100"> 
         <a href="category.php?category=MAKEUP" class="btn">SHOP</a>
      </div>
      <div class="box">

         <h3>JWELLARY</h3>
         <p>NECK THE LOVE </p>     
                 <img src="images/C3.png" alt="" width="100">  
         <a href="category.php?category=JWELLARY" class="btn">SHOP</a>
      </div>


      <div class="box">
         <h3>SHOES</h3>
         <p>TICK TOCK</p>
                <img src="images/p3.jpg" alt="" width="100"> 
         <a href="category.php?category=SHOES" class="btn">SHOP</a>
      </div>


   </div>

</section>


<div class="gap">

</div>


<div class="black">
   
    <div class="inner-black">
        <h1>Silver and Party Sound</h1>
        <p>When she was ten her father left her
        at a Denny’s—You’ll get back.
        She walked the other way for miles
        before a car pulled over, a man shouted
        You are lost, opened his door to her.
        Beyond him was darkness.
        No lights, no signs, no people
        telling her what to do: 
        she kept walking. Upright, strident,
        terrified by her act.
        Terrified she was bad
        for saving herself.</p>
        <a href="silver.php" class="submit">Shop now</a>
    </div>
     <div class="inner-black">
 <video autoplay muted loop src="VID/silver.mp4" width="800"  >
    </div>
</div>




<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price"><span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>