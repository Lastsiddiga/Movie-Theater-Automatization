<?php

include "baglan.php";

$sql = "SELECT * FROM salon";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinama Salonu</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='main.css'>

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center"> Doğa Sinema Salonu</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-success">Filmler</a>
                        <a href="musteriler.php" class="btn btn-outline-success">Müşteriler</a>
                        <a href="salonlar.php" class="btn btn-outline-success">Salonlar</a>
                    </div>
                </div>
            </div> <br>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-success">
                        <thead>
                            <tr>
                                <th>Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?=$satir['id']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>