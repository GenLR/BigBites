<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigBites</title>
    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 10%;
    background-color: #ff6f00;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.logo {
    display: flex;
}

.logo img {
    margin-right: 10px;
}

.logo h1 {
    font-size: 40px;
    letter-spacing: 1px;
}

.logo .big {
    color: #ffd700;
    margin-right: 2px;
}

.logo .bites {  
    color: white;
}

.navbar a {
    font-size: 18px;
    color: white;
    text-decoration: none;
    margin-left: 20px;
    transition: 0.3s;
}
.navbar a:hover{
    text-decoration: 2px solid underline   #ffd700;;
}
.navbar .active{
    text-decoration: 2px solid underline   #ffd700;
}


.navbar button {
    background: transparent;
    border: 2px solid white;
    color: white;
    border-radius: 20px;
    padding: 5px 15px;
    cursor: pointer;
    transition: 0.3s;
}

.navbar button:hover {
    background: white;
    color: #ff6f00;
}

.home {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 10%;
    background: #ff4500;
    height: 100vh;
    color: white;
}
.picture {
    position: relative;
    text-align: center; 
    padding: 20px;
}

.picture img {
    width: 100%; 
    max-width: 600px; 
    filter: drop-shadow(0 15px 20px rgba(0, 0, 0, 0.2)); 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
    scale: 1.5;
}

.tagline h1 {
    font-size: 40px;
}

.tagline .highlight {
    color: #ffd700;
}

.search-box {
    margin-top: 20px;
    position: relative; 
}

.search-box input {
    padding: 10px 30px 10px 20px; 
    width: 100%; 
    border: none;
    border-radius: 20px;
    font-size: 16px;
    box-sizing: border-box; 
   
}

.search-box .icon {
    position: absolute; 
    right: 10px; 
    top: 50%; 
    transform: translateY(-50%); 
    font-size: 24px;
    color: #ff6f00;
    cursor: pointer;
}


.location-container {
    text-align: center;
    margin: 50px auto;
    padding: 20px;
}

.location-container h2 {
    font-size: 32px;
    color: #ff6f00;
    margin-bottom: 20px;
}

.locations {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.location {
    background: #fff;
    border-radius: 10px;
    margin: 10px;
    width: 300px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: left;
    padding: 15px;
}
.location img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out; 
    border-radius: 10px; 
}
.location img:hover {
    transform: scale(1.05); 
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); 
    border-radius: 10px; 
}

.location h3 {
    font-size: 20px;
    color: #ff4500;
    margin-bottom: 10px;
}

.location p {
    color: #555;
    font-size: 14px;
    margin-bottom: 15px;
}

.location .btn {
    background: #ff4500;
    color: white;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
    display: inline-block;
    font-size: 14px;
    transition: 0.5s;
}

.location .btn:hover {
    background: white;
    color: #ff4500;
    border: 1px solid #ff4500;
}


body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #ff4500;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #fff;
	background-color: #ff4500;
}


@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="image/logo.png" alt="" width = '60px'>
            <h1><span class="big">BIG</span><span class="bites">BITES</span></h1>
        </div>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#">Restaurants</a>
            <a href="#">Contact Us</a>
            <a href=""><button class="logbtn">Login</button></a>
            <a href="#"><button class="regisbtn">Register</button></a>
        </nav>
    </header>
    
    <section class="home" id="home">
        <div class="tagline">
            <h1>Find Your Favorite <span class="highlight">Meals</span><br> and Get Them Delivered Fast!</h1>
            <p>Delicious meals just a click away.</p>
            <div class="box">
                <div class="search-box">
                    <input type="text" placeholder="Enter your location...">
                    <label for="" class="icon">
                        <i class='bx bx-search'></i>
                    </label>
                </div>
            </div>            
        </div>
        <div class="picture">
            <img src="images/pic1.png" alt="Food Delivery">
        </div>
    </section>

    <section class="location-container" id="locations">
        <h2>Explore Municipalities in Cebu</h2>
        <div class="locations">
            <div class="location">
                <h3>Cebu City</h3>
                <img src="images/loc1.webp" alt="">
                <p>Explore the best restaurants in Cebu City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Mandaue City</h3>
                <img src="images/loc2.jpg" alt="">
                <p>Find top-rated eateries in Mandaue City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Lapu-Lapu City</h3>
                <img src="images/loc3.png" alt="">
                <p>Discover the best dining spots in Lapu-Lapu City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Talisay City</h3>
                <img src="images/loc4.jpg" alt="">
                <p>Enjoy local delicacies in Talisay City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Carcar City</h3>
                <img src="images/loc5.jpg" alt="">
                <p>Experience the best of Carcar City's food scene.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Naga City</h3>
                <img src="images/loc6.jpg" alt="">
                <p>Check out restaurants in Naga City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Consolacion</h3>
                <img src="images/loc7.jpg" alt="">
                <p>Discover hidden gems in Consolacion.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Liloan</h3>
                <img src="images/loc8.jpg" alt="">
                <p>Explore food destinations in Liloan.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Compostela</h3>
                <img src="images/loc9.jpg" alt="">
                <p>Check out the best food spots in Compostela.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Danao City</h3>
                <img src="images/loc1,0.jpeg" alt="">
                <p>Enjoy local cuisine in Danao City.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>San Fernando</h3>
                <img src="images/sanfer.jpg" alt="">
                <p>Find delicious meals in San Fernando.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
            <div class="location">
                <h3>Minglanilla</h3>
                <img src="images/minglanilla.jpg" alt="">
                <p>Explore dining options in Minglanilla.</p>
                <a href="#" class="btn">View Restaurants</a>
            </div>
        </div>
    </section>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                     
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Team</h4>
                    <ul>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>          
                    </ul>
                </div>
                <div class="footer-col" >
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
                        <li><a href="#">temporary</a></li>
    
    
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>