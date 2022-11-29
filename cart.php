<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Generator" content="EditPlus">
    <meta name="GENERATOR" content="Evrsoft First Page">
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
    </script>

    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script> -->
</head>

<body>
    <div class="webpage">
        <div class="headerDivision">
            <header>
                <!-- <canvas id="particles" width="1698" height="852"></canvas> -->
                <nav class="navbar navbar-expand-lg mynavbar">
                    <div class="container-fluid ffff">
                        <div class="navbar-brand ico" href="#">
                            <img src="Save2-removebg-preview.png" style="height: 9vh; " alt="hi">

                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
                        </button>
                        <div class="collapse navbar-collapse navcollapsess" id="navbarSupportedContent">

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
                                        <a class="nav-link" href="welcome.php"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="30" height="30" fill="#fff" class="bi bi-house"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                                <path fill-rule="evenodd"
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                            </svg></a>
                                    </div>
                                </li>
                                <!-- <li class="nav-item">
                                    <div class="navitem">
                                        <a class="nav-link" href="# "><svg xmlns="http://www.w3.org/2000/svg" width="27"
                                                height="27" fill="#fff" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg></a>
                                    </div>
                                </li> -->
                                <li class="nav-item">
                                    <div class="navitem">
                                        <a class="nav-link carttt" href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                                                class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                            </svg><span>0</span>
                                    </div>
                                </li></a>
                                <li class="nav-item">
                                    <div class="navitem">
                                        <a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" fill="#fff" class="bi bi-person-rolodex"
                                                viewBox="0 0 16 16">
                                                <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                <path
                                                    d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                                            </svg></a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="navitem">
                                        <a class="nav-link" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" fill="#fff" class="bi bi-power" viewBox="0 0 16 16">
                                                <path d="M7.5 1v7h1V1h-1z" />
                                                <path
                                                    d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                                            </svg></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <div class="products-container">
            <div class="products-header">
                <h5 class="product-title">PRODUCT</h5>
                <h5 class="name">NAME</h5>
                <h5 class="price">PRICE</h5>
                <h5 class="quantity">QUANTITY</h5>
                <h5 class="total">TOTAL</h5>
            </div>
            <div class="products">

            </div>
        </div>
        <!-- <form method="post" action="pgRedirect.php">
            <input name="basketTotal" value="$_GET"> -->
    </div>

    <script type="text/JavaScript" src="webD.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>