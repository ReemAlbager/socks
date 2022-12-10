

<html lang="ar">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> HOME </title>

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
                        <a class="nav-link" href="C:\xampp\htdocs\gang\admin\dash.php"> DASHBOARD <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\admin\products_list.php"> PRODUCTS LIST</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="C:\xampp\htdocs\gang\admin\clients_list.php"> CLIENTS LIST</a>
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
        
        <!--Start header-->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="C:\xampp\htdocs\gang\img\space.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="C:\xampp\htdocs\gang\img\cartoon.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="C:\xampp\htdocs\gang\img\foodie.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of Products</h3>
		<div class="card-tools">
			<a href="?page=product/manage_product" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-strip">
				<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="20%">
					<col width="30%">
					<col width="10%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
                    <th>#</th>
						<th>Name</th>
                        <th>Price</th>
                        <th>Describ</th>
						<th>Status</th>
						<th>Action</th>
                        

					</tr>
				</thead>

                <tbody>
					
               <?php 
			   $servername = "localhost" ;
			   $username = "root@localhost" ;
			   $password = " " ;

			   $conn = new mysqli($servername , $username , $password);

			   if ($conn->connect_error) {
				   die("connection failed:" .$conn->connect_error);
			   }
			   echo "connected successfully";
			   ?>


						
							
			</tbody>