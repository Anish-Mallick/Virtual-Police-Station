<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>

    body{background:#f9f9f9;}
#wrapper{padding:90px 15px;}
.navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
.card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
.header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
@media(min-width:992px) {
#wrapper{margin-left: 200px;padding: 90px 15px 15px;}
.navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:0;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
}
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
	 text-align:center;
	 margin-bottom:28px;
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
	font-size:24px;
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
	line-height:22px;
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}


.our-webcoderskull{
  background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;

}
.our-webcoderskull .cnt-block{
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
	width:auto;
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{
   color:#025a8e;
}
/*************** Team Section ************/
.padding80 {Padding:80px;}
.sec-title h2 {font-size:36px;font-weight:600;}
.sec-title h3 {font-size:18px; margin-bottom:30px;}
.sec-title h3:after {
    content: '';
    position: absolute;
    width: 70%;
    height: 2px;
    background: #ea6c56 ;
    left: 20%;
    bottom: 60px;
}
.team-box {border: 1px solid #e5e5e5; padding:10px;}
.team-box:hover {border: 1px solid #ea6c56 ;}
.team-img img {border: 1px solid #e0e0e0;}
.team-title h3 {font-size:24px;font-weight:700;color:#ea6c56 ;}
.team-title h4 {font-size:16px; font-weight:600;}
.team-title p {line-height:22px;}

    </style>
</head>
<body>
  
<section>
        <div class="heading" style="background-color:#233e8b;height:120px; text-align: center;">
            <h1 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white;">
				AVADI POLICE HEADQUARTER
          </h1>
		  <h3 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white; ">Chennai-600062, Tamil Nadu</h3>
          </div>
    </section>
    
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav">
          <li class="nav-item">
            <a class="nav-link" href="index_page.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ctype.php">Crime types</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="show_lost_people.php">LostPeopleList</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="lnews.php">LatestNews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_most_wanted1.php">MostWantedPeopleList</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="public_reg.php">Sign up
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="public_user_login.php">Login</a>
          </li>
        </ul>
        </ul>
      </div>
    </nav>



<div class="team-section padding80">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="sec-title">
                    <h2>Most Wanted People List</h2>
                    <h3> Here You will Find the Most wanted criminal Who are on the loost in the area:</h3>
                </div>
                <div class="divider-line text-center"></div>
            </div>
        </div>
        <div class="row text-center">


            <div class="col-md-4">
                <div class="team-box">
<?php
include 'mysql.php';
$sql = "select * from mw";
$query = mysqli_query($con,$sql);
$count = mysqli_num_rows($query);
if($count==0){

  echo "<h3 class = 'text-center' >  No Data Available </h3>";
}
else{

while($result = mysqli_fetch_array($query)){

  $name = $result['name'];
  $description = $result['description'];

 ?>

                <div class="team-img">
                  <?php

                  echo '
                                                 <td>
                                                      <img src="data:image/jpeg;base64,'.base64_encode($result['pic'] ).'" height="200" width="200" class="img-thumnail" />
                                                 </td>
                                             ';


                                             ?>
                </div>
                <div class="team-title">
                    <h3><?php echo $name; ?></h3>
                    <p> <?php  echo $description; ?> </p>


                    <?php

}
}
                     ?>
            </div>
            </div>


            </div>



        </div>
    </div>
</div>

</body>
</html>
