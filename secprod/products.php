<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Products</title>

     <link rel="stylesheet" href="./css/bootstrap.css" />

</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Products List</h1>
                        
                    </div>
                    <div class="col-md-4">
                        <!--<a href="start.php" class="btn btn-primary">Start</a>-->
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
                    <i class="fa fa-search"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Products..">

                    <?php
                    include "dbconnect.php";
                    include "table.php";
                    $sql = "SELECT materialnumber, productname, price, sku, producttype FROM products";
                    $result = $conn->query($sql);
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
                   </div>
                </div>
            </div>
    </section>







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
</html>