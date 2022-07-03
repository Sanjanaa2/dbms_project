<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="en">
        
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>Admin Dashboard</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous"  referrerpolicy="no-referrer" />

            <link rel="stylesheet"href="style.css">

             <link rel="stylesheet"href="../style.css">
<style>
    .Admin_image{
    width:200px;
    object-fit: contain;
}
.footer{
    position:absolute;
    bottom:0;


}
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark"></nav>-->
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">shopyy</a>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="navbar-nav">
    <li class="nav-item">
        <a href=""class="nav-link">Welcome Guest</a>
</li>
</ul>
</nav>
    </div>
</nav>
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
<div class="row">
    <div class="col-md-12 bg-light p-1 d-flex align_items-center">
<div class="p-3">
    
    <a href="#"><img src="../images/1.png"alt="" class="Admin_image"></a>
    <p class="text-dark text-center">Admin Name</p>
</div>
    <div class="button text-center">
        
        <button class="my-4"><a href="insert_product.php" class="nav-link text-light bg-dark my-1">Insert Products</a></button>
        <button class="my-4" ><a href="" class="nav-link text-light bg-dark my-1">View Products</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">View Products</a></button>
        <button  class="my-4"><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1">Insert categories</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">View Categories</a></button>
        <button  class="my-4"><a href="index.php?insert_brand" class="nav-link text-light bg-dark my-1">Insert Brands</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">View Brands</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">All orders</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">All payments</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">list users</a></button>
        <button  class="my-4"><a href="" class="nav-link text-light bg-dark my-1">logout</a></button>
    

        </div>
    </div>
</div>
<div class="container">
    <?php
    if(isset($_GET['insert_category']))
    {
include('insert_categories.php');
    }
    if(isset($_GET['insert_brand']))
    {
include('insert_brands.php');
    }
    ?>
<!--<div class="bg-dark text-light p-3 text-center footer">
                    <p>All rights reserved</p>
</div>-->
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
            crossorigin="anonymous"></script>
</body>
</html>