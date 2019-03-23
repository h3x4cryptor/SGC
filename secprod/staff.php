<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Staff Members</title>

    <link rel="stylesheet" href="css/bootstrap.css" />
 </head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Staff Members</h1>
                        
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
                        <?php
                        include "dbconnect.php";
                        include "table.php";
                        $sql = "SELECT salemanname, salemanid, email, phonenumber, salt, created_on FROM salesmen";
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

</body>
</html>




