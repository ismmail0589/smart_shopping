<?php
session_start();
include("../../db.php");
include("btn.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];
///////picture delete/////////
$result=mysqli_query($con,"select product_image from products where product_id='$product_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../product_images/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($con,"delete from products where product_id='$product_id'")or die("query is incorrect...");
}


include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
                <h4 class="card-title" style="font-weight:bold;font-family:georgia;font-size:30px;color:white;padding: 1%;"> Products List</h4>
                
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " >
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th><th>
	                     <a class=" btn1" href="add_products.php">Add New</a></th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select product_id,product_image, product_title,product_price from products  where  product_cat=1 or product_cat=2 or product_cat=3 or product_cat=4 or product_cat=5 or product_cat=6 or product_cat=7")or die ("query 1 incorrect.....");

                        while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../../product_images/$image' style='width:50px; height:50px; border:groove #000'></td><td>$product_name</td>
                        <td>$price</td>
                       </tr>";
                        }

                        ?>
                    </tbody>
                  </table>

                
            </nav>
            
           

          </div>
          
          
        </div>
      </div>
      <?php
include "footer.php";
?>