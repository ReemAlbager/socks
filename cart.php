<html lang="ar">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Cart </title>

            <!-- Google font -->

            <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo|Oswald&display=swap">
            <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Reem+Kufi&display=swap">

            <!-- Bootstrap -->
            <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
            
            <!-- normalize -->
            <link type="text/css" rel="stylesheet" href="css/normalize.css"/>

            <!-- Font Awesome Icon -->
            <link rel="stylesheet" href="css/all.min.css">

            <!--  psge Icon -->
            <link rel="icon" href="img/Home/logo.png">

            <!-- Custom stlylesheet -->
            <link rel="stylesheet" href="css/stylePage.css"/>
    </head>
    <body>

        <!--Start Navbar-->

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\index.php"> HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\products.php"> PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\cart.php"> CART</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\login2.php"> LOGIN</a>
                        </li>
                     </ul>
                </div>
                <a class="navbar-brand" href="C:\xampp\htdocs\gang\socks.php">
                ZOL STORE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
              
            </div>
        </nav>

        <!--End Navbar-->


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end mb-2">
                <button class="btn btn-outline-dark btn-flat btn-sm" type="button" id="empty_cart">Empty Cart</button>
            </div>
        </div>
        <div class="card rounded-0">
            <div class="card-body">
                <h3><b>Cart List</b></h3>
                <hr class="border-dark">
               
                    <div class="d-flex w-100 justify-content-between  mb-2 py-2 border-bottom cart-item">
                        <div class="d-flex align-items-center col-8">
                            <span class="mr-2"><a href="javascript:void(0)" class="btn btn-sm btn-outline-danger rem_item" data-id=""><i class="fa fa-trash"></i></a></span>
                           
                            <div></p>
                                <small class="text-muted"></small><br>
                                <small class="text-muted">></small><br>
                                <small class="text-muted"></small><br>
                                <p class="mb-1 mb-sm-1"><small><b>Price:</b> <span class="price"></span></small></p>
                                <div>
                                <div class="input-group" style="width:130px !important">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-sm btn-outline-secondary min-qty" type="button" id="button-addon1"><i class="fa fa-minus"></i></button>
                                    </div>
                                    <input type="number" class="form-control form-control-sm qty text-center cart-qty" placeholder="" aria-label="Example text with button addon" value="<?php echo $row['quantity'] ?>" aria-describedby="button-addon1" data-id="<?php echo $row['id'] ?>" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-outline-secondary plus-qty" type="button" id="button-addon1"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right align-items-center d-flex justify-content-end">
                            <h4><b class="total-amount"></b></h4>
                        </div>
                    </div>
                <div class="d-flex w-100 justify-content-between mb-2 py-2 border-bottom">
                    <div class="col-8 d-flex justify-content-end"><h4>Grand Total:</h4></div>
                    <div class="col d-flex justify-content-end"><h4 id="grand-total">-</h4></div>
                </div>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-end">
            <a href="C:\xampp\htdocs\gang\checkout.php" class="btn btn-sm btn-flat btn-dark">Checkout</a>
        </div>
    </div>
</section>




<footer class="text-center">
               E-COMMEREC PROJECT 2022&copy;
              <p> by REEM ALBAGER</p>
        </footer>
</html>