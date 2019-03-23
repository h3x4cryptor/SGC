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

<style>



#myInput {
  background-image: url('./img/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}












input[type=checkbox], input[type=radio] {
  margin-bottom: 22.5px;
  margin-top: 22.5px;
  line-height: normal;
  padding-left: inherit;
  vertical-align:top;


}


input {
 display: inline-block;
}

fieldset {
 display: inline;
 padding: 0;
 margin: 0
}




input[type="checkbox"].selectedId, #selectall {
line-height: normal;
margin: 0;
float: none;
}
.checkbox {
margin: 0;
float: none;
}








button, input, optgroup, select, textarea {

    /* margin: 0; */
    font: inherit;
    color: inherit;
}

table.checkboxs {
    display:inline-block;
    vertical-align:middle;
}

input[type="text"] {
}







/**Collapse*/
.collapsible {
  background-color: #ddd;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #222;
  color: white;
}

.content {
  padding: 0 2px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;

    overflow-x: hidden;
}




</style>


</head>
<body class="bg-light">

<header>
<br />
<div style="background-color:black;color:white">
<span style="font-size:24px;padding-left:20px;"><a href="./timeline.php">Sunbulah Group</a></span><span style="float:right;padding-right:20px;"><p><a class="btn btn-danger" href="logout.php">Logout</a></p></span>
<br /> 
</div>
<div class="row">

                    <div class="col-md-3">


</div>

 
        <div class="jumbotron jumbotron-fluid">

        <span style="padding-left:20px;font-size:18px"><b>Create <span style="color:red">Urgent</span> PO From:</b></span><span style="float:right"></span>

        <h3 style="background-color:black;color:white;padding-left:20px;"><?php echo  $_SESSION['salemanname'] . "<span style='float:right;padding-right:20px;'>ID#" . $_SESSION['salemanid'] . "</span>"; ?></h3>

<div class="col-md-4">

</div>

            <div class="container">

 
                    <div class="row">
                    <div class="col-md-4">
  


          <!--  <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Whats Up ?"></textarea>
                </div>
            </form> -->

            <form action="commit-urgent.php" method="POST">




</div>
<div class="input-group">
  <span style="padding-left:20px;" class="input-group-addon">PO#</span>
  <input type="number" name="po" class="form-control" placeholder="xxxxxxxx" />
  <span class="input-group-addon" style="border-left: 0; border-right: 0;">Branch#</span>
  <input type="number" name="branch" class="form-control" placeholder="xxxxxx" />
</div>
</div>
</div>
</div>

</header>









<div class="col-md-8">
            <div class="col-md-5">
        </div>
            <?php //for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-14">

            
            <i class="fa fa-search"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Products..">
            <h3></h3>
<div class="collapsible">Vegetables</div>
<div class="content">
          <div class="card-body">
                <div>
                <table id="">
               <th>

                <tr class="header">
                <th><b>chk</b></th>
                <th><b>Material No.</b></th>
                <th><b>Product Name</b></th>
                <th><b>Qty</b></th>
                <th><b>Free</b></th>
                <th><b>Price</b></th>
                </tr>
                <tr>
                    <td width="30" style="border: 1px solid black ;">
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    </td>

                    <td width="260" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 9988';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                </td>

                    <td width="620" style="border: 1px solid black ;">
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 9988';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                </td>
                

                
                    <td width="100" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                </td>

                
                    <td width="100" style="border: 1px solid black ;">

                    <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                </td>
                
                <td width="100" style="border: 1px solid black ;">
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                </td>
               </tr> 

                </table>    

                </div>
         
             
                
                </div>

                </div>
            </div>




<!--PART2-START-->


            <?php //for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-14">
            <h3></h3>
<div class="collapsible">Cheese & Honey</div>
<div class="content">
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
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    </td>

                    <td width="260" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 9988';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                </td>

                    <td width="620" style="border: 1px solid black ;">
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 9988';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                </td>
                

                <td width="100" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                </td>

                
                    <td width="100" style="border: 1px solid black ;">

                    <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                </td>
                
                <td width="100" style="border: 1px solid black ;">
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                </td>
               </tr>                 </table>    

                </div>
         
             
                
                </div>

                </div>
            </div>


<!--PART2-END-->








<!--PART3-START-->


<?php //for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-14">
            <h3></h3>
<div class="collapsible">Frozen</div>
<div class="content">
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
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk" />
                    <input class="checkbox" type="checkbox"  name="chk"/>
                    <input class="checkbox" type="checkbox"  name="chk" />
                    </td>

                    <td width="260" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="number" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT materialnumber FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>" />
                </td>

                    <td width="620" style="border: 1px solid black ;">
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                    <input class="form-control" type="text" name="productname" style="color:black;font-size:9px;font-wieght:bold;" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" />
                </td>
                

                <td width="100" style="border: 1px solid black ;">
                    <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                <input class="form-control" type="number" name="qty" placeholder="0" />
                </td>

                
                    <td width="100" style="border: 1px solid black ;">

                    <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                <input class="form-control" type="number" name="free" placeholder="0" />
                </td>
                
                <td width="100" style="border: 1px solid black ;">
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                <input class="form-control" type="number" name="price" placeholder="55  " />
                <input class="form-control" type="number" name="price" placeholder="150  " />
                <input class="form-control" type="number" name="price" placeholder="1200  " />
                <input class="form-control" type="number" name="price" placeholder="20  " />
                </td>
               </tr> 
               </table>    

                </div>
         
             
                
                </div>

                </div>
            </div>


<!--PART3-END-->










            <?php //}
            $conn->close(); ?>       

<br />
<br />
       <center><input width="80" class="btn btn-primary" type="submit" name="submit" /></center><br /><br />
       </form>
        </div>   
    </div>
</div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<!--Search ENGINE-->

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


</body>



<br />
<br />

<?php
include "inc/footer.php";
?>


</html>