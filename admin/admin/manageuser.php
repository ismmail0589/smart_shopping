
    <?php
session_start();
include("../../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];

/*this is delet quer*/
mysqli_query($con,"delete from user_info where user_id='$user_id'")or die("query is incorrect...");
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
                <h4 class="card-title" style="font-weight:bold;font-family:georgia;font-size:28px;color:white;padding: 1%;">Manage Users</h4>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead  >
                      <tr >
                        <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;" >UserId</th>
                        <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">FirstName</th>
                        <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">LastName</th>
                        <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">Email</th>
                       
                <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;"> Password</th>
                <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">Mobile</th>
                <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">City</th>
                <th style="font-weight:bold;font-family:sans-serif;font-size:14px;color:white;">Address</th>
	<th><a href="addsuppliers.php" class="btn btn-success">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select user_id,first_name,last_name, email, password,mobile,address1,address2 from user_info")or die ("query 2 incorrect.......");

                        while(list($user_id,$user_name,$user_last,$email,$user_password,$mobile,$address1,$address2)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td>$user_id</td>
                         <td>$user_name</td>
                          <td>$user_last</td>
                           <td>$email</td>

                        <td>$user_password</td>
                         <td>$mobile</td>
                          <td>$address1</td>
                           <td>$address2</td>";
                        echo"<td>
                     
                        <a class='btn btn-danger' href='manageuser.php?user_id=$user_id&action=delete'>Delete<div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>