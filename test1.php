<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="content.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
}
body{
    background-color: whitesmoke;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
h1{
color: rgba(98, 179, 216, 0.733);
font-size: 50px;
font-weight: 800;
text-align: center;
}
.container{
    top: 100px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px 20px;
   flex-direction: row;
}
h4{
    text-align: left;
    margin-left: 20px;
    font-size: 17px;
}
.card{
    width: 350px;
    height: 255px;
    background:white;
    border-width: 2px; 
     text-align: center;
    border-radius: 10px;
    position: relative;
    border: ridge 1.5px;
}
p{
    text-align: left;
    margin-left: 20px;
    color: gray;
}
  .score .stars {
    color: #EEBD01;
    position: absolute;
    bottom: 30px;
    
}
label{
    color: white;
  position: absolute;
  background-color: #da006d;
  top: 10px;
  left: 10px;
  padding: 5px 5px;
  border-radius: 10px;
}
.bt{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.bl{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.mt{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.bq{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.gw{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.rr{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.pares{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.th{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
.cw{
    height: 200px;
    width: 350px;
    object-fit: cover;
    border-radius: 10px;
}
@media(max-width: 690px){
  .container{
    flex-direction: column;
    gap: 50px 50px;
    padding: 0;
  }
}
    </style>

</head>
<body>  
    
    <div class="container">
        <div class="card">
          <label>₱ 0 off delivery, min. ₱ 349 </label>
        <img src="images/Botejyu.jpeg" class="bt">
         <h4>Boteyju - SM City Cebu</h4>
         <p> Ramen </p>  
         <span class="score">
      <span class="stars" style="width:78%">
          <i class="fa fa-star">4.4/5(24)</i>
      </span>
     </div> 
    <div class="card">
      <label>₱ 0 off delivery, min. ₱ 349 </label>
    <img src="images/Balamban-Liempo-Cebu-1-1536x976.jpg" class="bl">
     <h4>BALAMBAN LECHON - Dipolog</h4>
     <p> Lechon </p>  
     <span class="score">
  <span class="stars" style="width:78%">
      <i class="fa fa-star">5(60)</i>
  </span>
 </div> 
    <div class="card">
      <label>₱ 0 off delivery, min. ₱ 299 </label>
    <img src="images/BKY-JT-MilkTea-01726.jpg" class="mt">
    <div class="con">
     <h4>Tiger Sugar - AS Fortuna</h4>
     <p> Milk Tea</p>
     <span class="score">
      <span class="stars" style="width:78%">
          <i class="fa fa-star">5(1000+)</i>
      </span>
     </div> 
     </div> 
    <div class="card">
      <label>₱ 0 off delivery, min. ₱ 349 </label>
    <img src="images/filipino-bbq-pork-skewers.jpg" class="bq">
    <div class="con">
     <h4>AA BBQ - Cebu City</h4>
     <p> Filipino Pork BBQ</p>
     <span class="score">
      <span class="stars" style="width:78%">
          <i class="fa fa-star">5(1000+)</i>
      </span>
     </div> 
    </div>
<div class="card">
  <label>₱ 0 off delivery, min. ₱ 499</label>
<img src="images/Greenwich Ultimate Overload 2015.jpg" class="gw">
<div class="con">
 <h4>Greenwich - Gaisano Tabunok</h4>
 <p> Pizza</p>
 <span class="score">
  <span class="stars" style="width:78%">
      <i class="fa fa-star">5(2000+)</i>
  </span>
 </div> 
</div>
<div class="card">
  <label>₱ 0 off delivery, min. ₱ 899</label>
   <img src="images/Red-Ribbon-Holiday-Cakes.jpeg" class="rr">
   <div class="con">
    <h4>Red Ribbon - Cebu City</h4>
    <p> Cakes</p>
    <span class="score">
      <span class="stars" style="width:78%">
          <i class="fa fa-star">5(100+)</i>
      </span>
  </div>
   </div>
   <div class="card">
    <label>₱ 0 off delivery, min. ₱ 349</label>
      <img src="images/pares.jpg" class="pares">
      <div class="con">
       <h4>Pares Ta Bai - Banilad</h4>
       <p>Filipino</p>
       <span class="score">
        <span class="stars" style="width:78%">
            <i class="fa fa-star">5(2000+)</i>
        </span>
    </div>
      </div>
      <div class="card">
        <label>₱ 0 off delivery, min. ₱ 349</label>
         <img src="images/th.jpg" class="th">
         <div class="con">
          <h4>Big Daddy - Lahug</h4>
          <p>Burgers</p>
          <span class="score">
            <span class="stars" style="width:78%">
                <i class="fa fa-star">5(2000+)</i>
            </span>
        </div>
         </div>
         <div class="card">
          <label>₱ 0 off delivery, min. ₱ 349</label>
          <img src="images/traditional-chicken-wings-912937-hero-01-6c1a003373a54538a732abc0005145d8.jpg" class="cw">
          <div class="con">
           <h4>Bad Boys Wingz - Consolacion</h4>
           <p>Chicken Wings</p>
           <span class="score">
            <span class="stars" style="width:78%">
                <i class="fa fa-star">4.9(85)</i>
            </span>
        </div>
          </div>
</div>  
</body>
</html>