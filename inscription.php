<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Inscription</title>
    <?php include('assets/pagePortion/header.php') ?>
</head>


<body>

    <!--Navbar -->
    <?php include('assets/pagePortion/navbar.php') ?>

    <div class="banniereInscriptionImg mb-5">
        <img src="assets/img/banniere/osakaPortKansai2.jpg" alt="takoyaki" class="img-fluid takoyakiImg">
    </div>


    <!-- forms inscription -->
    <div class="container">
        <form class=" border border-danger p-5" method="POST" action="#!">

            <p class="h4 mb-5 text-center">Inscription</p>

            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prénom">
                </div>
                <div class="col mt-4">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nom">
                </div>
                <div class="col mt-4">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Pseudo">
                </div>
            </div>

            <div class="mb-3">
                <label for="skills" class="form-label">Avez-vous déjà effectué un voyage au Japon</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault1" value="oui">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault2" value="non">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Non
                    </label>
                </div>
            </div>

            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Comfirmer votre mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock">

            <button class="btn btn-info my-4 btn-block red darken-4" type="submit">S'inscrire</button>

            <p class="text-center">En cliquant sur <em>s'inscrire</em> vous acceptez nos <a href="" target="_blank">terms of service</a></p>

        </form>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('assets/pagePortion/footer.php') ?>
</body>

</html>