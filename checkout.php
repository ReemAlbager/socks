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
        <div class="card rounded-0">
            <div class="card-body"></div>
            <h3 class="text-center"><b>Checkout</b></h3>
            <hr class="border-dark">
            <form action="" id="place_order">
                <input type="hidden" name="amount">
                <input type="hidden" name="payment_method" value="cod">
                <input type="hidden" name="paid" value="0">
                <div class="row row-col-1 justify-content-center">
                    <div class="col-6">
                        <div class="form-group col address-holder">
                            <label for="" class="control-label">Delivery Address</label>
                            <textarea id="" cols="30" rows="3" name="delivery_address" class="form-control" style="resize:none"></textarea>
                        </div>
                        <div class="col">
                            <span><h4><b>Total:</b> </h4></span>
                        </div>
                        <hr>
                        <div class="col my-3">
                        <h4 class="text-muted">Payment Method</h4>
                            <div class="d-flex w-100 justify-content-between">
                                <button class="btn btn-flat btn-dark">Cash on Delivery</button>
                                <span id="paypal-button"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

