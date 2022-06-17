<?php

if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `filmler` (`id`, `Film Adı`, `Salon`, `Saat`) VALUES (NULL, ? , ? , ? )";
    $dizi = [
        $_POST["filmAdı"],
        $_POST["Salon"],
        $_POST["Saat"]
    ];    
    $sth = $baglan->prepare($sql);
    $sonuc = $sth ->execute($dizi);
    header("Location:index.php");
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
                    <label for="filmAdı" class="form-label">Film Adı</label>
                    <input type="text" name="filmAdı" class="form-control">
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
                    <div class="col-sm-6">
                        <label for="Saat" class="form-label">Saat</label>
                        <input type="datetime-local" name="Saat" class="form-control">
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