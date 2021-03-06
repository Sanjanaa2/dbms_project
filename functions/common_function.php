<?php

  //including connect file
  include('./includes/connect.php');

  // getting products
  function getproducts(){
    global $con;
     
     //condition to check isset or not
    if(!isset($_GET['category'])){
       if(!isset($_GET['brand'])){
    $select_query="select * from `products` order by rand() LIMIT 0,9";
         $result_query=mysqli_query($con,$select_query);
         //$row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
         while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image2=$row['product_image2'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-md-4'>
          <div class='card'>
               <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                 <div class='card-body'>
               <h5 class='card-title'> $product_title</h5>
             <p class='card-text'> $product_description</p>
              <a href='#' class='btn btn-dark'>Add to Cart</a>
               <a href='#' class='btn btn- #e3f2fd;'>View more</a>
           </div>
          </div>   
         </div>";
         }
  }
  }
  }

  //getting unique categories

  function get_unique_categories(){
    global $con;
     
     //condition to check isset or not
    if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    $select_query="select * from `products` where category_id=$category_id";
         $result_query=mysqli_query($con,$select_query);
         $num_of_rows=mysqli_num_rows($result_query);
         if($num_of_rows==0){
            echo "<h2 class='text-center text-danger' >No stock for this category</h2>";
         }
         //$row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
         while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image2=$row['product_image2'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-md-4'>
          <div class='card'>
               <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                 <div class='card-body'>
               <h5 class='card-title'> $product_title</h5>
             <p class='card-text'> $product_description</p>
              <a href='#' class='btn btn-dark'>Add to Cart</a>
               <a href='#' class='btn btn- #e3f2fd;'>View more</a>
           </div>
          </div>   
         </div>";
         }
  }
  }
  
  // getting unique brands
  
  function get_unique_brands(){
    global $con;
     
     //condition to check isset or not
    if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    $select_query="select * from `products` where brand_id=$brand_id";
         $result_query=mysqli_query($con,$select_query);
         $num_of_rows=mysqli_num_rows($result_query);
         if($num_of_rows==0){
            echo "<h2 class='text-center text-danger' >Brand is not available for service</h2>";
         }
         //$row=mysqli_fetch_assoc($result_query);
        // echo $row['product_title'];
         while($row=mysqli_fetch_assoc($result_query)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image2=$row['product_image2'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $brand_id=$row['brand_id'];
          echo "<div class='col-md-4'>
          <div class='card'>
               <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                 <div class='card-body'>
               <h5 class='card-title'> $product_title</h5>
             <p class='card-text'> $product_description</p>
              <a href='#' class='btn btn-dark'>Add to Cart</a>
               <a href='#' class='btn btn- #e3f2fd;'>View more</a>
           </div>
          </div>   
         </div>";
         }
  }
  }
  


//displaying brands in sidenav
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo"<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link'>$brand_title</a> 
</li>";
}
}

//displaying categories
function getcategories(){
    global $con;
$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo"<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link'>$category_title</a> 
</li>";
}
}

// searching product

function search_product(){
    global $con;
     if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
   $seach_query="Select * from `products` where product_keywords like '%$search_data_value%'";
        $result_query=mysqli_query($con,$seach_query);
        //$row=mysqli_fetch_assoc($result_query);
       // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
         $product_id=$row['product_id'];
         $product_title=$row['product_title'];
         $product_description=$row['product_description'];
         $product_image2=$row['product_image2'];
         $product_price=$row['product_price'];
         $category_id=$row['category_id'];
         $brand_id=$row['brand_id'];
         echo "<div class='col-md-4'>
         <div class='card'>
              <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
              <h5 class='card-title'> $product_title</h5>
            <p class='card-text'> $product_description</p>
             <a href='#' class='btn btn-dark'>Add to Cart</a>
              <a href='#' class='btn btn- #e3f2fd;'>View more</a>
          </div>
         </div>   
        </div>";
        }
 }}



?>