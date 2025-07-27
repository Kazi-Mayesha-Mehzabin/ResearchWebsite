<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Website</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/magnefic-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ffffff;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

    </style>
</head>
    <body class="antialiased">


        <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div id="logo">
                        <a href="index.html"><img style="height:70px;" src="img/home/logo.png" alt=""
                                title="" /></a>
                        <a style="color:#b58c52; font-size:25px; font-family: 'Playfair Display', serif;"><b>Movie
                                Website</b></a>
                    </div>
                    <div class="ml-auto d-none d-md-block d-md-flex">

                        <div class="media header-top-info">

                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="main_menu">
           

            <!-- <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div> -->
        </div>
    </header>

    <div>
        <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Movie List</a>
  <input type="text" placeholder="Search your desired movie">
</div>
    </div>

    <div style="">
         <img style="height:200px; width:200px;" src="res/img/index1.jpg">

    </div>

<div class="row">
  <div class="column">
    <img style="height:200px; width:200px;" src="res/img/index1.jpg">
    <img style="height:200px; width:200px;" src="res/img/index1.jpg">
     <img style="height:200px; width:200px;" src="res/img/index1.jpg">
   
  </div>
  <div class="column">
    <img src="underwater.jpg">
    <img src="ocean.jpg">
    <img src="wedding.jpg">
    <img src="mountainskies.jpg">
    <img src="rocks.jpg">
    <img src="underwater.jpg">
  </div>
  <div class="column">
    <img src="wedding.jpg">
    <img src="rocks.jpg">
    <img src="falls2.jpg">
    <img src="paris.jpg">
    <img src="nature.jpg">
    <img src="mist.jpg">
    <img src="paris.jpg">
  </div>

   <div class="column">
    <img src="underwater.jpg">
    <img src="ocean.jpg">
    <img src="wedding.jpg">
    <img src="mountainskies.jpg">
    <img src="rocks.jpg">
    <img src="underwater.jpg">
  </div>
</div>

        

        
    </body>
</html>
