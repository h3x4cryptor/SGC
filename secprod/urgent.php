<?php require_once("dbconnect.php"); 
session_start();
include "table.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Create Urgent PO</title>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" />-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body class="bg-light"><br />
<code>Sunbulah Group Developers Portal</code>
<h2>Create <span style="color:red">Urgent</span> PO</h2>
<div class="container mt-5">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
               <div class="card-body text-left">
                    <h3 style="background-color:black;color:white"><?php echo  $_SESSION['salemanname']; ?></h3>
                    <p  style="background-color:black;color:white">Saleman ID# <b><?php echo $_SESSION['salemanid']; ?></b></p>
                    <p><a href="logout.php">Logout</a></p>
                    </div>
            </div>            
        </div>

<br />
        
          <!--  <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Whats Up ?"></textarea>
                </div>
            </form> -->
            <form action="commit-urgent.php" method="POST">



            <div class="input-group">
  <span class="input-group-addon">PO#</span>
  <input type="text" name="po" class="form-control" placeholder="xxxxxxxx" />
  <span class="input-group-addon" style="border-left: 0; border-right: 0;">Branch#</span>
  <input type="text" name="branch" class="form-control" placeholder="xxxxxx" />
</div>















<div class="col-md-8">
            <div class="col-md-5">
        </div>
            <?php //for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-14">
            <h3>Vegetables</h3>

                <div class="card-body">

                <div>
                
                <table>
                <th>


                <td><b>Material</b></td>
                <td><b>Product Name</b></td>
                <td><b>Qty</b></td>
                <td><b>Free</b></td>
                <td><b>Price</b></td>
                </th>




                <tr>
                    <td width="30" style="border: 1px solid black ;">
                    <input class="inline" type="checkbox"  name="chk" />
                    <input class="inline" type="checkbox"  name="chk" />
                    <input class="inline" type="checkbox"  name="chk"/>
                    <input class="inline" type="checkbox"  name="chk" />
                    </td>

                    <td width="260" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                </td>

                    <td width="620" style="border: 1px solid black ;">
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                </td>
                

                
                    <td width="100" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="price" placeholder="55 SAR" />
                <input class="form-control" type="number" name="price" placeholder="150 SAR" />
                <input class="form-control" type="number" name="price" placeholder="1200 SAR" />
                <input class="form-control" type="number" name="price" placeholder="20 SAR" />
                </td>

                
                    <td width="100" style="border: 1px solid black ;">

                    <input class="form-control" type="number" name="price" placeholder="55 SAR" />
                <input class="form-control" type="number" name="price" placeholder="150 SAR" />
                <input class="form-control" type="number" name="price" placeholder="1200 SAR" />
                <input class="form-control" type="number" name="price" placeholder="20 SAR" />
                </td>
                
                <td width="100" style="border: 1px solid black ;">
                <input class="form-control" type="number" name="price" placeholder="55 SAR" />
                <input class="form-control" type="number" name="price" placeholder="150 SAR" />
                <input class="form-control" type="number" name="price" placeholder="1200 SAR" />
                <input class="form-control" type="number" name="price" placeholder="20 SAR" />
                </td>
               </tr> 

                </table>    

                
             
                
                </div>

                </div>
            </div>
            <?php //}
            $conn->close(); ?>       


       <input width="80" class="form-control" type="submit" name="submit" /><br />
       </form>

        </div>   
    </div>
</div>
</body>
</html>