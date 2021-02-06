
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Photo Slider</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>

img{

    width:100%;
    height:657px;

}
.container-lg{
    size: 10%;

}
.carousel-caption{
    background: orange; /* Цвет фона */
    color: white;
    opacity:80%;
    font-size: 20px;
}

.carousel-item{

text-align: center;
min-height: 590px; / Prevent carousel from being distorted if for some reason image doesn't load /
}
<?php
require('conf.php');

$kask=$yhendus->prepare("SELECT PersonID, pagetext, pagelink,pagetittle FROM pages");
 $kask->bind_result($PersonID,$pagetext,$pagelink,$pagetittle);
    $kask->execute();




?>
</style>
</head>
<body>
<!--div class="container-lg my-3"-->
<div id="myCarousel" class="carousel slide" data-interval="1000" data-ride="carousel">

<!-- Wrapper for carousel items -->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="http://tondiraba.edu.ee/images/logo.png" alt="First Slide">

</div>
<?php while($kask->fetch()){
echo " <div class='carousel-item'>
<img src='$pagelink' alt='Second Slide'>
<div class='carousel-caption d-none d-md-block'>
<h1>$pagetittle</h1>
<p>$pagetext</p>
</div>
</div>";
}?>

</div>
<!-- Carousel controls -->

</div>
<!--/div-->
</body>
</html>