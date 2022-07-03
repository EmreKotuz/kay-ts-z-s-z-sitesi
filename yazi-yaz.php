<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teknoEk.com/Söz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="cssm/ben.css">

  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="https://teknoek.com" id="logo" class="navbar-brand"><b>teknoEk.com</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
          <a href="index.php" class="nav-link active"><b><i>Ana Sayfa</i></b></a>
          </li>
          <li class="nav-item active">
            <a href="yazi-oku.php" class="nav-link active"><b>Yazıları Oku</b></a>
          </li>
          <li class="nav-item">
          <a href="yazi-yaz.php" class="nav-link text-success"><b>Yazı Yaz</b></a>
          </li>
          <li class="nav-item">
          <a href="yazi-sil.php" class="nav-link"><b>Yazınızı Silin</b></a>
          </li>
        </ul>
<!--
    ÇOK YAKINDA!

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
-->

      </div>
    </div>
  </nav>
<?php
require_once 'inc-functions.php';

   if (@$_POST["submit"]) {

    $kullanici_adi = htmlspecialchars($_POST["kullanici_adi"], ENT_QUOTES, 'UTF-8');
    $insta = htmlspecialchars($_POST["insta"], ENT_QUOTES, 'UTF-8');
    $durum = htmlspecialchars($_POST["durum"], ENT_QUOTES, 'UTF-8');
    $sifre = htmlspecialchars($_POST["sifre"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("insert into yazi(kullanici_adi,insta,durum,sifre)values(:kullanici_adi,:insta,:durum,:sifre)");
    $ekle->bindValue(":kullanici_adi", $kullanici_adi, PDO::PARAM_STR);
    $ekle->bindValue(":insta", $insta, PDO::PARAM_STR);
    $ekle->bindValue(":durum", $durum, PDO::PARAM_STR);
    $ekle->bindValue(":sifre", $sifre, PDO::PARAM_STR);

    if ($ekle->execute()) {
        header("Location: yazi-oku.php?i=ekle");
    } else {
        //hata mesajı
        //print_r($ekle->errorInfo());
        header("Location: yazi-yaz.php?i=hata");
        echo "Hata Oluştu, Tekrar Deneyiniz.";
    }
}

 ?>

    <div class="container col-md-12" id="kutular">
        <div class="row">
                    <form action="" method="GET" enctype="multipart/form-data" class="justify-content-center text-align-center">
                <div class="col-md-3 mt-4 justify-content-center">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input name="kullanici_adi" required type="text" class="form-control" id="inlineFormInputGroup" placeholder="İnstagram Kullanıcı Adı">
                </div>
                </div>
                
            </div>

            <div class="form-row margin-auto mt-3">
            <div class="form-group col-md-6">
                <label for="inputPassword4"><b>İnstagram Linkin (isteğe bağlı)</b></label>
                <input name="insta" type="text" class="form-control mt-1" id="inputPassword4" placeholder="https://www.instagram.com/emreekotuz/">
</div>
                <div class="form-group col-md-6 mt-4">
                <label class for="inputEmail4"><b>Özgürce durum ya da yazınızı yazınız.</b></label>
                <textarea class="form-control mt-2" required name="durum" rows="5" data-rule="required" data-msg="Lütfen boş bırakmayınız" placeholder="Tanışmak için bugün çok güzel bir gün"></textarea>
                </div>
                <div class="form-group col-md-6 mt-3">
                <label for="inputPassword4"><b>Eğer yazınızı silmek isterseniz şifreye ihtiyacınız olacaktır!</b></label>
                <input name="sifre" required type="password" class="form-control mt-1" id="inputPassword4" placeholder="Password">
                </div>
            </div>


            <input type="submit" name="submit" value="Yayınla" class="btn btn-primary col-md-6 bg-success mt-4" />
            </form> 
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>