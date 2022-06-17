<?php

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `müşteriler` WHERE CONCAT (`Müşteri Adı`, `Film`,`Koltuk No`,`Salon`) LIKE '%" . $valueToSearch . "%'";
    $searchResult = filterTable($query);
} else {
    $query = "SELECT * FROM müşteriler";
    $searchResult = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sinema");
    $filter_result = mysqli_query($connect, $query);
    return $filter_result;
}
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
                    <form action="musteriler.php" method="POST" name="valueToSearch">
                        <input type="text" name="valueToSearch">
                        <input type="submit" name="search" value="Ara">
                    </form>
                </div>
            </div>
        </div> <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-success">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Müşteri Adı</th>
                                <th>Film</th>
                                <th>Koltuk No</th>
                                <th>Salon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($satir =  mysqli_fetch_array($searchResult)) { ?>
                                <tr>
                                    <td><?= $satir['id'] ?></td>
                                    <td><?= $satir['Müşteri Adı'] ?></td>
                                    <td><?= $satir['Film'] ?></td>
                                    <td><?= $satir['Koltuk No'] ?></td>
                                    <td><?= $satir['Salon'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <a href="musteriEkle.php" class="btn btn-success btn-lg">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>