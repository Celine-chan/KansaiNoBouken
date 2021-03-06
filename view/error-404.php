<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - ERREUR 404</title>
    <?php include('../view/include/header.php') ?>
</head>

<body>

    <div class="container text-center text-dark">
        <h1 class="errorTitle">Oups ! Page introuvable !</h1>

        <div class="mt-3">
            <p class="textError">Vous avez tenté d’accéder à une page qui ne se trouve pas sur ce site. Veuillez revenir sur la page d'accueil afin de continuer votre navigation sur notre site.</p>
            <p><strong><a href="../index.php" class="indexReturn">Revenir à l'accueil</a></strong></p>
        </div>

        <div class="imgerror mt-5">
            <img src="../assets/img/error404/kasaObake.png" alt="Kasa-Obake Yokai" class="kasaObakeImg">
        </div>

        
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/include/footer.php') ?>
</body>

</html>