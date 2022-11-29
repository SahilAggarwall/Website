<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
 ?>
<!DOCTYPE html>

<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="Generator" content="EditPlus">
     <meta name="Author" content="">
     <meta name="Keywords" content="">
     <meta name="Description" content="">
     <title>ReForm - A foundation</title>
     <link rel="stylesheet" href="projectstyles.css" />
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

     <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
          crossorigin="anonymous"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
          integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
          crossorigin="anonymous"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->
     <!-- <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  
    JavaScript Bundle with Popper
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>1
  
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script> -->
</head>

<body>
     <div class="webpage">
          <div class="main">
               <div class="headerDivision">
                    <header>
                         <!-- <canvas id="particles" width="1698" height="852"></canvas> -->
                         <nav class="navbar navbar-expand-lg mynavbar">
                              <div class="container-fluid ffff">
                                   <div class="navbar-brand ico" href="#">
                                        <img src="Save2-removebg-preview.png" style="height: 9vh; " alt="hi">

                                   </div>
                                   <div><h2><?php echo "<p class='welcome'>"."Welcome " . $_SESSION['username']."</p>" ?></h2></div>
                                   <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
                                   </button>
                                   <div class="collapse navbar-collapse navcollapse" id="navbarSupportedContent">

                                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 column">

                                             <!-- <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="#"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="30"
                                                                 height="30" fill="#fff" class="bi bi-search"
                                                                 viewBox="0 0 20 20">
                                                                 <path
                                                                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                            </svg></a>
                                                  </div>
                                             </li> -->
                                             <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-house" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                                          </svg></a>
                                                  </div>
                                             </li>
                                             <!-- <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="#"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="27"
                                                                 height="27" fill="#fff" class="bi bi-heart"
                                                                 viewBox="0 0 16 16">
                                                                 <path
                                                                      d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg></a>
                                                  </div>
                                             </li> -->
                                             <!-- <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="#"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="30"
                                                                 height="30" fill="#fff" class="bi bi-bell-fill"
                                                                 viewBox="0 0 20 20">
                                                                 <path
                                                                      d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                                            </svg></a>
                                                  </div>
                                             </li> -->
                                             <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link carttt" href="cart.php"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="30"
                                                                 height="30" fill="#fff" class="bi bi-cart-check-fill"
                                                                 viewBox="0 0 16 16">
                                                                 <path
                                                                      d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                                            </svg><span>0</span>
                                                  </div>
                                             </li></a>
                                             <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="register.php"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="30"
                                                                 height="30" fill="#fff" class="bi bi-person-rolodex"
                                                                 viewBox="0 0 16 16">
                                                                 <path
                                                                      d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                 <path
                                                                      d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                                                            </svg></a>
                                                  </div>
                                             </li>
                                             <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="logout.php"><svg
                                                                 xmlns="http://www.w3.org/2000/svg" width="30"
                                                                 height="30" fill="#fff" class="bi bi-power"
                                                                 viewBox="0 0 16 16">
                                                                 <path d="M7.5 1v7h1V1h-1z" />
                                                                 <path
                                                                      d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                                            </svg></a>
                                                  </div>
                                             </li>
                                             <li class="nav-item">
                                                  <div class="navitem">
                                                       <a class="nav-link" href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                          </svg></a>
                                                  </div>
                                             </li>

                                        </ul>
                                   </div>
                              </div>
                         </nav>
                    </header>
               </div>
               <div class="pictureWithContant">
                    <div class="blurbox">
                         <div class="contantOnBlurBox">
                              <div class="contant1">
                                   <!-- <img src="Recycle1.webp" alt="" width="80" height="80"> -->
                                   <center><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                             fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                                             <path
                                                  d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
                                        </svg><br><br>
                                        <h1>Recycle Plastic Waste</h1>
                                        <h5>Plastic waste is a detrimental to our environment. Recycling is the only way
                                             out. We need to recycle plastic in order to reduce the harm we are causing
                                             to the environment.
                                        </h5>
                                   </center>
                              </div>
                              <div class="contant2">
                                   <!-- <img src="arrow.webp" alt="" width="10" height="10"> -->
                                   <center><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                             fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                                             <path
                                                  d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                                        </svg><br><br>
                                        <h1>Recycling is A Must</h1>
                                        <h5>Recycling is very important and has a huge negative impact on the natural
                                             environment. Recycling reduces the need for raw materials so that resources
                                             are preserved.</h5>
                                   </center>

                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="carousel">
               <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <!-- <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div> -->
                    <div class="carousel-inner">
                         <div class="carousel-item active" data-bs-interval="10000">
                              <img src="image1.webp" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                   <!-- <h5>First slide label</h5>
                     <p>Some representative placeholder content for the first slide.</p> -->
                              </div>
                         </div>
                         <div class="carousel-item imag2" data-bs-interval="2000">
                              <img src="image2.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                   <!-- <h5>Second slide label</h5>
                     <p>Some representative placeholder content for the second slide.</p> -->
                              </div>
                         </div>
                         <div class="carousel-item imag3">
                              <img src="image3.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                   <!-- <h5>Third slide label</h5>
                     <p>Some representative placeholder content for the third slide.</p> -->
                              </div>
                         </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                         data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                         data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                    </button>
               </div>
          </div>


          <center>
               <div class="cardss">
                    <div class="card" id="item1" style="width: 14rem;">
                         <img src="card1.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <div class="card-title"><b>Cartoon Plant Pot</b></div>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of the card's content.</p>
                              <p class="pricee">Rs. 180</p>
                              <a class="add-cart cart1" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                             d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                   </svg></a>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                   class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd"
                                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                              </svg> -->
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="addToCart(item1)">
                                   <span class="glyphicon glyphicon-shopping-cart"></span>
                                   <b> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                             <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                           </svg> </b>
                              </button> -->
                         </div>
                    </div>
                    <div class="card" id="item2" style="width: 14rem;">
                         <img src="card2.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <div class="card-title"><b>Bottle Cans</b></div>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of the card's content.</p>
                              <p class="pricee">Rs. 45</p>
                              <a class="add-cart cart2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                             d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                   </svg></a>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                   class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd"
                                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                              </svg> -->
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="addToCart(item2)">
                                   <span class="glyphicon glyphicon-shopping-cart"></span>
                                   <b> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                             <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                           </svg> </b>
                              </button> -->
                         </div>
                    </div>
                    <div class="card" id="item3" style="width: 14rem;">
                         <img src="card3.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <div class="card-title"><b>Water Bottle</b></div>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of the card's content.</p>
                              <p class="pricee">Rs. 10</p>
                              <a class="add-cart cart3" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                             d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                   </svg></a>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                   class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd"
                                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                              </svg> -->
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="addToCart(item3)">
                                   <span class="glyphicon glyphicon-shopping-cart"></span>
                                   <b> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                             <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                           </svg> </b>
                              </button> -->
                         </div>
                    </div>
                    <div class="card" id="item4" style="width: 14rem;">
                         <img src="card4.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <div class="card-title"><b>Stationary Holder</b></div>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of the card's content.</p>
                              <p class="pricee">Rs. 39</p>
                              <a class="add-cart cart4" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                             d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                   </svg></a>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                   class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd"
                                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                              </svg> -->
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="addToCart(item4)">
                                   <span class="glyphicon glyphicon-shopping-cart"></span>
                                   <b> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                             <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                           </svg> </b>
                              </button> -->
                         </div>
                    </div>
                    <div class="card" id="item5" style="width: 14rem;">
                         <img src="card5.jpg" class="card-img-top" alt="...">
                         <div class="card-body">
                              <div class="card-title"><b>Designer Plant Holder</b></div>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of the card's content.</p>
                              <p class="pricee">Rs. 78</p>
                              <a class="add-cart cart5" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                             d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                   </svg></a>
                              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                   class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd"
                                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                              </svg> -->
                              <!-- <button type="button" class="btn btn-default btn-sm" onclick="addToCart(item5)">
                                   <span class="glyphicon glyphicon-shopping-cart"></span>
                                   <b> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                             <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                             <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                           </svg> </b>
                              </button> -->
                         </div>
                    </div>
               </div>
          </center>
          <!-- 
          <div class="cart" id="cart">
               <div class="card-title">CART</div>
          
               <div id="card-title"></div>
          </div> -->

          <div class="contact" id="contact">
               <div class="container-fluid fdd">
                    <div class="rowssss">

                         <div class="contactside">
                              <div class="main-text">
                                   <div class="h44">
                                        <h3>CUSTOMER SUPPORT</h3>
                                   </div>
                                   <div class="contact-wrap">
                                        <!-- <i class="fa fa-phone-square" aria-hidden="true"></i>
                                         -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                             class="bi bi-telephone-plus-fill" viewBox="0 0 25 25">
                                             <path fill-rule="evenodd"
                                                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                        <div class="h44">
                                             <h4>Contact us at:</h4>
                                        </div>

                                        <p>1800 209 3005</p>

                                   </div>
                                   <div class="contact-wrap">
                                        <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                             class="bi bi-envelope-check-fill" viewBox="0 0 25 25">
                                             <path
                                                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                                             <path
                                                  d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                        </svg>
                                        <div class="h44">
                                             <h4>Email:</h4>
                                        </div>

                                        <p>info.reformindustries@gmail.com</p>

                                   </div>
                                   <div class="contact-wrap">
                                        <!-- <i class="fa fa-map-marker" aria-hidden="true"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                                             class="bi bi-geo-fill" viewBox="0 0 25 25">
                                             <path fill-rule="evenodd"
                                                  d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                        </svg>

                                        <div class="h44">
                                             <h4>Address:</h4>
                                        </div>
                                        <p>INDIA Delhi GTB Nagar</p>

                                   </div>
                              </div>
                         </div>
                         <div class="backpic">
                              <div class="form-bg">
                                   <form id="form" action="https://submit-form.com/ptCr7urt">

                                        <input type="text" class="name" name="name" placeholder="NAME" required=""><br>

                                        <input type="text" class="email" name="phone" placeholder="EMAIL"
                                             required=""><br>

                                        <textarea input="" type="text" class="msg" name="text" placeholder="MESSAGE"
                                             required=""></textarea>

                                        <button class="btn" type="submit
                                        ">SEND MESSAGE</button>

                                   </form>
                              </div>
                         </div>

                    </div>
               </div>
          </div>





          <div class="footer">
               <div class="cpryt">
                    <h6>Copyright © 2022 by ReForm Industries Pvt. Ltd.</h6>
                    <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         All rights reserved.</h6>
               </div>

          </div>





     </div>



     <script type="text/JavaScript" src="webD.js"></script>

</body>

</html>

<!-- <li class="nav-item">
                                             <a class="nav-link active" href="#header">HOME

                                             </a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#about"><svg xmlns="http://www.w3.org/2000/svg"
                                                       width="30" height="30" fill="currentColor"
                                                       class="bi bi-bell-fill" viewBox="0 0 20 20">
                                                       <path
                                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                                  </svg></a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#education"><svg
                                                       xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                       fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 20 20">
                                                       <path fill-rule="evenodd"
                                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                  </svg></a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#education"><svg
                                                       xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                       fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 20 20">
                                                       <path fill-rule="evenodd"
                                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                  </svg></a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="#education"><svg
                                                       xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                       fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 20 20">
                                                       <path fill-rule="evenodd"
                                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                                  </svg></a>
                                        </li> -->