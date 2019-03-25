
<?php
include "dbconnect.php";

session_start();





?>






            <section>

<div class="container">
        <div class="row">
            <div class="col-md-12">

            <?php
            include "table.php";
            $sql = "SELECT materialnumber, productname FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo table( $result );
                    print_r ( $row );
                }
            } else {
                echo "0 results<br/>";
            }




            $array = [
                [1, 2, array(3, array(4, 5))],
                [3, 4, array(5, array(6, 7))],
            ];
            
            foreach ($array as list($a, $b, $c, $d, $e)) {
                echo "A: $a; B: $b; C: $c; D: $d; E: $e;<br>";
            };
            



            ?> 

<form enctype="multipart/form-data" action="make.php" method="post">
            <select name="items[]" style="width:300px">

            <option class="form-control" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" /></option>
            <option class="form-control" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" /></option>
            <option class="form-control" name="materialnumber" style="color:black" value="<?php $sql = 'SELECT productname FROM products WHERE sku = 3333';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" /></option>

                        <option class="form-control" name="materialnumber" value="<?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?>" /> <?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['materialnumber'];}} else {echo '0 results';}?>  <?php $sql = 'SELECT * FROM products WHERE sku = 9999';$result = $conn->query($sql);if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {echo $row['productname'];}} else {echo '0 results';}?> </option>
            </select>
            <input type="submit" name="make" value="Submit"/><br/>

                        </form> 

<?php
$a = array('m' => 'value');
$a['mike'] = &$a['m'];

print_r($a);

$a['m'] = 'new_value';
print_r($a);

$a['mike'] = 'new_value_2';
print_r($a);


foreach( $a as $as => $array ) {
    echo '<option value="' . $array . '">' . $as[$as] . '</option>';
 }

?>



                        <script>
function displayResult()
{
var table=document.getElementById("myTable");
var row=table.insertRow(0);
var cell1=row.insertCell(0);
var cell2=row.insertCell(1);
cell1.innerHTML="New";
cell2.innerHTML="New";
}
</script>
</head>
<body>
<table id="myTable" border="1">
  <tr>
    <td>cell 1</td>
    <td>cell 2</td>
  </tr>
  <tr>
    <td>cell 3</td>
    <td>cell 4</td>
  </tr>
</table>
<br>
<button type="button" onclick="displayResult()">Insert new row</button>










           </div>
        </div>
    </div>
</section>








