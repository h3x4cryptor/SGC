<?php
$sql = "SELECT * FROM salesmen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["salemanname"]. " ID# " . $row["salemanid"]. "<br>";
        echo "<td width=500><b>". $row["id"].
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<table align="center" border="1">
<tr>          

<?php
include "dbconnect.php";

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    $count = 0;
    while ($row = $result->fetch_object())
    {
         echo "<td width=500><b>". $row["id"] . "</b><br/>Address: ".  $row->address . "<br/>Phone no: ". $row->phoneno . "<br/>Fax No:". $row->faxno ."<br/>Email: ". $row->email . "<br/>Website: ". $row->website ."</td>";

         if($count % 2 == 0){
            //nothing here
         }

         else{
             echo "</tr>";
             echo "<tr>";
         }
         $count++;
   }
   echo "</table>";
}

?>





if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo table( $result );
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?> 
                    </table>