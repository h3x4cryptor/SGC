
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










 $insert = [array(po => "405998988", branch => "303888", salemanid => "1711", array(materialnumber => "46046009", productname => "ALSHIFA HONEY SCETCHES 180Gx24", qty => "4", free => "0", price => "0", sku => "9999")) ];

 print_r($insert);

 echo '<br />';
 echo '<br />';
echo '<br />';

 $insert = array([
     po => "405998988",
     branch => "303888",
     salemanid => "1711"],

     array([materialnumber => "46046009",
     productname => "ALSHIFA HONEY SCETCHES 180Gx24",
     qty => "4",
     free => "0",
     price => "0",
     sku => "9999"])) ;
     print_r($insert);

     echo '<br />';
     echo '<br />';
    echo '<br />';
    
     $insert = array([
         po => "405998988",
         branch => "303888",
         salemanid => "1711"],
    
         array(materialnumber => "46046009",
         productname => "ALSHIFA HONEY SCETCHES 180Gx24",
         qty => "4",
         free => "0",
         price => "0",
         sku => "9999")) ;
         print_r($insert);
    


        
         echo '<br />';
         echo '<br />';
        echo '<br />';

            $array = array([
                po => 'sale',
                branch => 'sale',
                salemanid => 'sale'],     
                array([materialnumber => 'sale',
                productname => 'product',
                qty => 'test', 'test2', 'test2', 'test2', 'test7',
                free => 'test',
                price => 'test',
                sku => 'sku'])) ;
                foreach ($array as &$single) {

                    json_decode( $array, true );

                }
                







//$array = array([
//    $_POST['po'[array($_POST['branch'], $_POST = ['salemanid']
//        array(
//            $_POST = ['materialnumber'], $_POST = ['productname'], $_POST = ['qty'], $_POST = ['free'], $_POST = ['price'], $_POST = ['qrqode'], $_POST = ['sku']
//        );
//    )]];   
//]);
















?>



<br />
<br />
<br />
<br />
<br />


<?php
  // JSON string
  $someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
  print_r($someArray);        // Dump all data of the Array
  echo $someArray[1]["name"]; // Access Array data

  // Convert JSON string to Object
  $someObject = json_decode($someJSON);
  print_r($someObject);      // Dump all data of the Object
  echo $someObject[1]->name; // Access Object data
?>

<br />
<br />
<br />
<br />
<br />



<?php


$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo( $row['materialnumber'] . "<br />" );
$sku = $row['sku'];
$materialnumber = $row['materialnumber'];



    }
} else {
    echo "0 results<br/>";
};
$items = array("00003333", "443002232", "303888", $materialnumber, $sku); 
//print_r($staff);
//foreach( $staff as $key => $value ) {
//echo "Name: " . $staff[salmanname] . " | EmployeeID#: " . $staff[salemanid] . "  | Email: " . $staff[email] . ".<br />";
//}

echo '<br />
<br />
<br />
<br />';


// prepare and bind
$stmt = $conn->prepare("INSERT INTO array (ordernumber, po, branch, materialnumber, sku) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $ordernumber, $po, $branch, $$materialnumber, $sku);

// set parameters and execute
$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();

$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();

$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();
echo "New records created successfully";

$stmt->close();












echo '<br />
<br />
<br />
<br />
';



    /* If the query is valid $result will now
     * hold an indexed array of data */
    $sql = "SELECT * FROM salesmen";
    $result = $conn->query($sql);
       
    /* mysql_fetch_assoc will give you each row as
     * $row['column_name'] */
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo( $row['salemanname'] . "<br />" );

        }
    } else {
        echo "0 results<br/>";
    }





echo '<br />
<br />
<br />
<br />
<br />

';






  // Loop through Array
  $someArray = array([
    po => 'sale',
    branch => 'sale',
    salemanid => 'sale'],     
    array([materialnumber => 'sale',
    productname => 'product',
    qty => 'test', 'test2', 'test2', 'test2', 'test7',
    free => 'test',
    price => 'test',
    sku => 'sku'])) ; // Replace ... with your PHP Array
  foreach ($someArray as $key => $value) {
    echo $value["po"] . ", " . $value["qty"] . "<br>";
  }


?>



<br />
<br />
<br />
<br />
<br />


<?php 

$insert = array(
    "1",
    "405998988",
    "405998",
    "56090909",
    "1711");

//perfect array $records


print_r($records);


    $sql = "INSERT INTO array (ordernumber, po, branch, materialnumber, sku) VALUES .implode.($insert)";
    mysqli_query($conn, $sql);
?>
 
<br />
<br />
<br />


 <?php 

    $multiArray = array(
        ordernumber => "00000003333", po => "40954588", branch => "309888", saleman => "1711",  "no" => "56060106", name => "FRICO CHEESE 180g", qty => "4", free => "5", price => "6");
    //echo $multiArray;
    $i = 0;
    foreach ($multiArray as $key => $value) {
        $i++;
        echo "Item $i || Array key = $key || Value = $value <br />";
    }

    echo ' <br />
    <br />';
    $client_ids = ['id1','id2','id3'];
    $newarray = [];
    foreach($client_ids as $key => $value) {
        array_push($newarray,["type" => "client_id", "value" => $value,]);
    }


    $ordernumber = "'0000033333"; $branch = "303888"; $salmanid = $_SESSION['salemanid'];
    $materialnumber = "6066069" ;
    $productname = "ALSHIFA HONEY 170g";
    $multiArray = array(
        $materialnumber => $branch, "FRICO CHEESE 180g", "4", "5", "6");
    //echo $multiArray;
    $i = 0;
    foreach ($multiArray as $key => $value) {
        $i++;
        echo "
        $ordernumber || $branch || $salmanid ||
        Item $i || Array key = $key || Value = $value <br />";
    }

    echo ' <br />
    <br />';
     
    class Item
    {
        public $materialnumber;
        public $productname;
        public $sku;
     
        public function __construct($materialnumber, $productname, $sku)
        {
            $this->materialnumber  = $materialnumber;
            $this->productname   = $productname;
            $this->sku = $sku;
        }
    }
     
    $item1 = new Item('6066069', 'ALSHIFA HONEY 170g', '3333');
    $item2 = new Item('6066070', 'ALSHIFA HONEY 270g', '3334');
    foreach ($items as $row) {
        print_r($productname . ': '  . $item1 . $item2 . '<br>');
    }
    echo '<br />';
    $data = array(
        [0] => array("000033333", "40958987", "303888", "56060506", "3333"),
        [1] => array("000033334", "40958988", "303889", "56060507", "4444"),
        [2] => array("000033335", "40958989", "303890", "56060508", "5555")
    );
    print_r($data);
    if(is_array($data)){
        foreach ($data as $row) {
            $fieldVal1 = $data[$row][000033333];
            $fieldVal2 = $data[$row][000033334];
            $fieldVal3 = $data[$row][000033335];
            $query ="INSERT INTO array (ordernumber, po, branch, materialnumber, sku) VALUES ( '". $fieldVal1."')";
            mysqli_query($conn, $query);
            //print_r($fieldVal1);
        }
    }

    echo '<br />';



    echo '<br />';



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





    echo '<br />';





    echo '<br />';

$client_ids = ['id1','id2','id3'];
$newarray = [];
foreach($client_ids as $key => $value) {
    array_push($newarray,["type" => "client_id", "value" => $value,]);
}
print_r($newarray);





 ?>
 <br />
<br />
<br />
<br />
<!--<form>
    <select name="multi" multiple>
        <option name="ordernumber" value="000003333"><a href="index.global.php" rel="noopener noreferrer"></a></option>
        <option name="po" value="23232332">23232332</option>
        <option name="branch" value="303888">303888</option>
        <option nsme="materialnumber" value="22222222">22222222</option>
        <option name="sku" value="3333">3333</option>
    </select>
</form>-->





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




