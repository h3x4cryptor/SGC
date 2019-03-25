<?php 
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
    <!--<link rel="stylesheet" href="css/bootstrap.css" />-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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

    <div class="container">
    <table id="myTable" class=" table order-list">
    <thead>
        <tr>
            <td>Product</td>
            <td>Qty.</td>
            <td>Free</td>
            <td>Price</td>
            <td>Delete</td>
        </tr>
    </thead>





    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-primary btn-block" id="addrow" value="Add Item +" />
            </td>
        </tr>
        <tr>
        </tr>

    </tfoot>

</table>
<center><?php     echo '<input type="submit" class="btn btn-success" id="submit" name="make" value="Submit" /></form>'; ?></center>
</form>
</div>





                </div>

            <!--<h4>Services</h4>
        <ol>
        <li><a href="./urgent.php">Create <span style="color:red">Urgent</span> PO.</a></li>
        <li><a href="./regular.php">Create Regular PO.</a></li>
        <li><a href="./export.php">Export Reports.  </a><span style="font-size:12px;">Supported formats:  <span style="color: gray; font-size:10px;"><b>[Excel Sheets][PDF]</b></span></span></li>
        <li><a href="./products.php">Search Products List.</a></li>
        
        </ol>-->
                 
        </div>   
    </div>
</div>
</body>





<script>
       
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><select style="font-size:8px" class="form-control" name="order" width="280px"><option style="font-size:8px" value="#">--Select Item--</option><option style="font-size:8px" value="59009212">Sunbula Spring Roll(12X240G)</option><option value="56040036">Al-Shifa Honey Sachets(7Gx12x24)</option><option style="font-size:8px" value="56040136">Al-Shifa Honey Sachets(7GX24X12)</option></select></td>';
        cols += '<td><input width="20px" type="number" class="form-control" name="qty' + counter + '"/></td>'
        cols += '<td><input width="20px" type="number" class="form-control" name="free' + counter + '"/></td>';
        cols += '<td><input width="20px" type="number" class="form-control" name="price' + counter + '"/></td>';

        cols += '<td data-role="listview"><input type="button" class="ibtnDel btn btn-small btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });






    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}





</script>

<script>


function code()
        {
            alert ("<option class="form-control" name="materialnumber" value="<?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" /> <?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>  <?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?> </option>");
            }
            code();
</script>


<br />
<br />
<center>
<?php
include "./inc/footer.php";
?>
</center>
</html>
<?php include "./inc/access-top.php"; ?>

<?php include "./inc/access-bottom.php"; ?>
