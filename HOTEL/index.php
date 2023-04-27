<!DOCTYPE html>
<html lang="en">
<head>

    <title>hotel management</title>
    <link rel= "stylesheet" href="style.css">

</head>
<style>
  *{
    margin:0;
    padding:0;


}
h3
{
  color: forestgreen;
}

.main{
    width:100%;
    background: linear-gradient(to top,rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),url(1.jpg);
    background-position: center;
    background-size:cover;
    height:109vh;

}
.navbar{
    width: 1200px;
    height: 75px;
    margin:auto;
}
.icon{
    width:100px;
    float:left;
    height:70px;

}
.logo{
    color: greenyellow;
    font-size:40px;
    font-family:Century Gothic      ;
    padding-left:0px;
    float:left;
    padding-top:10px;
}

.menu{
  margin-left: 150px;
    width:400px;
    float:left;
    height:70px;
}
ul{
    float:left;
    display:flex;
    justify-content:center;
    align-items:center;
}
ul li{
    list-style:none;
    margin-left:62px;
    margin-top:27px;
    font-size:14px;
}
ul li a {
    text-decoration:none;
    font-size: 20px;
    color:white;
    font-family:Arial;
    font-weight:bold;
    transition:0.4s ease-in-out;

}
ul li a:hover{
    color:#ff7200;

}
.search{
    width: 300px;
    float:left;
    margin-left:250px;

}
.srch{
    font-family:'times new roman';
    width:150px;
    height:40px;
    background:transparent;
    border:1px solid #ff7200;
    margin-top:13px;
    color: white;
    border-right:none;
    font-size:16px;
    float:left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius:5px;

}
.btn{
    width:50%;
    height: 40px;
    background:#ff7200;
    border:2px solid #ff7200;
    margin-top:12px;
    color:white;
    font-size:15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.btn:focus{
    outline:none;

}
.srch:focus{
    outline:none;
}
.content{
    width:1400px;
    height:auto;
    margin:auto;
    font-size:20px;
    color:antiquewhite;
    position:relative;
}
.content.par{
    padding-left:20px;
    padding-bottom: 30px;
    font-family:Arial;
    font-size: 30px;
    letter-spacing:1.4px;
    line-height:40px;

}
.content h1{
    font-family:'Times New Roman';
    font-size: 60px;
    padding-left:20px;
    margin-top:9%;
    letter-spacing:2px;
}
.content .cn{
    width:160px;
    height:40px;
    background:#ff7200;
    border:none;
    margin-bottom:10px;
    margin-left: 20px;
    font-size:20px;
    border-radius:30px;
    cursor:pointer;
    transition: .4s ease;
}
.content.cn a{
    text-decoration:none;
    color:#000;
    transition:.3s ease;
}
.cn:hover{
    background-color:#ff7200

}
.content span{
    color:#ff7200;
    font-size:65px;
}
.form{
    width:250px;
    height:350px;
    background: linear-gradient(to top,rgba(191, 90, 8, 0.8)50%,rgba(207, 94, 2, 0.8)50%);
    position: absolute;
    top:-20px;
    left:870px;
    border-radius: 10px;
    padding:25px;
}
.form h2{
    width:220px;
    font-family:sans-serif;
    text-align:center;
    color:#ff5500;
    font-size:15px;
    background-color:#fff;
    border-radius: 10px;
    margin:2px;
    padding:8px;
}
.form input{
    width:240px;
    height:35px;
    background:transparent;
    border-bottom: 1px solid #ff6a00eb;
    border-top:none;
    border-right:none;
    border-left:none;
    color:#fff;
    font-size:15px;
    letter-spacing:1px;
    margin-top:30px;
    font-family:sans-serif;

}

.form input:focus{
    outline:none;
}
::placeholder{
    color:#fff;
    font-family:Arial;
}
.btnn{
    width:240px;
    height:40px;
    background:#ff7200;
    border:none;
    margin-top:30px;
    font-size:10px;
    border-radius:10px;
    cursor:pointer;
    color:#fff;
    transition:0.4s ease-in-out;
}
.btnn:hover{
    background:#fff;
    color:#ff7200;
}
.btnn a{
    text-decoration:none;
    color:#000;
    font-weight:bold;
}
form .link{
    font-family:Arial,Helvetica,sans-serif;
    font-size:17px;
    padding-top:20px;
    text-align:center;
}
.form .link a{
    text-decoration:none;
    color:#ff7200;
}
.liw{
    padding-top:15px;
    padding-bottom:10px;
    text-align:center;
}
.icon a{
    text-decoration:none;
    color:#fff;
}
.icon ion-icon{
    color:green;
    font-size:25px;
    padding-left: 5px;
    padding-top: 5px;
    transition:0.3s ease;

}
.icon ion-icon:hover{
    color:green;
}




</style>
<body>
<div class="main">
    <div class= "navbar">
        <div class= "icon">
          <h3 class="logo">JP Hotel</h3>
        </div>

        <div class="menu">
              <ul>
                <li><a href="#">Home</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="rooms.php">BookNow</a></li>
                 <li><a href="contact.php">Contact</a></li>
              </ul>
        </div>
        <div class="search">
            <!--s<input class="srch" type="search" name=""placeholder="type to text">
  <a href="#"> <button class="btn">Search</button> </a>  -->


        </div>
      </div>
    <div class="content">
      <h1>book your<br><span>stay</span><br>online</h1>
      <p class="par"> Are you searching a perfect spot for dining and stay in madurai?
        <br>JP hotel is one among the best in the city!
        <br>Experinece relaxed atmosphere and comfort of a 4-star hotel on unique location by the lake.
        <br>We provide delicious food in both traditional and continental style!
        <br>No booking has become very easy.You can now easily book your stay online using.  </p>

       <!--<button class="cn"><a href="#">BOOK NOW</a></button>-->

       <div class="form">
         <h2>Why choose JP hotels?</h2>


         <p class="link"> <br>
         <p class="liw"> -We are in service since 1950.<br>
          <br>
          -We have got the best chefs in asia.<br>
          <br>
          -Jp Hotels have been ranked as 2nd best hotel in tamilnadu.<br>
          <br>
          -Our hotels have been placed under top 10 hotels in india.</p>

       <ul>

      </div>
      </div>
       </div>
    </div>
</div>
 <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" ></script>
</body>
</html>
