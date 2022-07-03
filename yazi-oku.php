

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




<section class="intro">
    
        <?php
        require_once 'inc-functions.php';

        $cek = $db->prepare("select * from yazi order by RAND()");
        $cek->execute();
        $row = $cek->fetch(PDO::FETCH_ASSOC);
?>
<script>
function uyari(mesaj) {
    <?php
        $cek = $db->prepare("select * from yazi order by RAND()");
        $cek->execute();
        $row = $cek->fetch(PDO::FETCH_ASSOC);
?>
}
</script>
        <div class="content">
            <h6 style="text-align:right; color:#7D3C98 ">
            <?php
                if (@$row["insta"] == "") {
                    ?> <?= $row['kullanici_adi']; ?> <?php
                }else{
                    ?>
                    <a style="text-decoration: none;color: blueviolet;" href="<?= $row['insta'] ?>">@<?= $row['kullanici_adi']; ?> ></a>
                    <?php
                }
                
            ?></h6>
            <h2 style="color:black"><?= $row['durum'] ?></h2>
                        
            <a href="yazi-oku.php" style="background-color:#28B463; font-size:20px" class="read-more col-auto">Değiştir</a>

        </div>
    </section>


  <!--Javascript-->
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>