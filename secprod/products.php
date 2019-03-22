<?php
include "dbconnect.php";
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td><tr>" . $row["materialnumber"]. " </tr><tr> " . $row["qty"]. "</tr></td><br>";


?>


    

    <?php  foreach($new_row as $row):?> 




            <tr>
                <td><?php echo $row["materialnumber"];?></td>
                <td><?php echo $row["productname"];?></td>
            </tr>
    <?php endforeach;?>



    </table>

<?php

}

} else {
    echo "0 results";
}



?>
<?php 
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

  foreach($new_row as $productname => $rows): ?>
  <?php  foreach($rows as $row): ?>
        <tr>
            <td><?=$productname;?></td>
            <td><?=$row['materialnumber'];?></td>
            <td><?=$row['productname'];?></td>
        </tr>
  <?php endforeach;?>
<?php endforeach;?>















<?php
$conn->close();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group Portal</title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Sunbulah Group Development Portal</h1>
                        
                    </div>
                    <div class="col-md-4">
                        <a href="start.php" class="btn btn-primary">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br />
    <br />

    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center><img class="img img-responsive" src="img/sgn.jpg" /></center>
                    </div>
                </div>
            </div>
    </section>

</body>
</html>