<?php
require_once '../controllers/controller_userAccount.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Utilisateur</title>
    <?php include('include/header.php') ?>
</head>

<body>

    <?php include('include/navbar.php') ?>

    <div class="banniereInscriptionImg">
        <img src="../assets/img/banniere/banniereAdmin.jpg" alt="admin" class="img-fluid adminImg">
    </div>

    <div class="d-flex justify-content-end">
        <a href="disconnection.php" class="btn btn-danger btn-sm" type="button">Se déconnecter</a>
    </div>

    <div class="container mt-2">
        <h1 class="text-center text-dark">Page utilisateur</h1>
    </div>





    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('include/footer.php') ?>
</body>

</html>