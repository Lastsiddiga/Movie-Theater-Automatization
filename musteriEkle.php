<?php

if (isset($_POST["kaydet"])) {
    include "baglan.php";
    $sql = "INSERT INTO `müşteriler` (`id`, `Müşteri Adı`, `Film`, `Koltuk No`,`Salon`) VALUES (NULL, ? , ? , ? ,? )";
    $dizi = [
        $_POST["musteriAdı"],
        $_POST["Film"],
        $_POST["KoltukNo"],
        $_POST["Salon"]

    ];
    $sth = $baglan->prepare($sql);
    $sonuc = $sth->execute($dizi);
    header("Location:musteriler.php");
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
            <form action="" method="post" class="row mt-4 g-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="musteriAdı" class="form-label">Müşteri Adı</label>
                        <input type="text" name="musteriAdı" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Film" class="form-label">Film</label>
                        <div class="row">
                            <div class="col">
                                <select name="Film">
                                    <option value="Yıldızlararası" class="btn btn-outline-success">Yıldızlararası</option>
                                    <option value="ZindanAdası" class="btn btn-outline-success">Zindan Adası</option>
                                    <option value="Başlangıç" class="btn btn-outline-success">Başlangıç</option>
                                    <option value="EsaretinBedeli" class="btn btn-outline-success">Esaretin Bedeli</option>
                                    <option value="Titanik" class="btn btn-outline-success">Titanik</option>
                                    <option value="Shrek" class="btn btn-outline-success">Shrek</option>
                                    <option value="KungFuPanda" class="btn btn-outline-success">Kung Fu Panda</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="KoltukNo" class="form-label">Koltuk No</label>
                        <input type="text" name="KoltukNo" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Salon" class="form-label">Salon</label>
                        <div class="row">
                            <div class="col">
                                <select name="Salon">
                                    <option value="1" class="btn btn-outline-success">1</option>
                                    <option value="2" class="btn btn-outline-success">2</option>
                                    <option value="3" class="btn btn-outline-success">3</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6 g-3 ">
                        <button type="submit" name="kaydet" class="btn btn-success">Ekle</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>