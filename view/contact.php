<?php
session_start();
require_once "../controllers/controller_contact.php";

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Contact</title>
    <?php include('include/header.php') ?>
</head>

<body class="contactBack">

    <?php include('include/navbar.php') ?>

    <div class="container mt-5 col-12 col-md-10 col-xl-6 row g-3 mx-auto">
        <form class="shadow-lg p-5 contactForm" action="post_contact.php" method="POST">

            <h1 class="mb-4 text-center text-dark contactTitle">Contact</h1>

            <div class="mb-4">
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Nom" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Prénom" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <input type="email" id="mail" name="mail" class="form-control" placeholder="E-mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                <div class="text-danger">
                    <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
                </div>
            </div>

            <div class="mb-4">
                <label for="subjectContact" class="text-dark">Sujet</label>
                <select class="browser-default custom-select" aria-label="Default select example" name="subjectContact">
                    <option selected disabled>Sélectionner une option</option>
                    <?php foreach ($subjectContact as $keySubject => $valueSubject) { ?>
                        <option value="<?= $keySubject ?>" <?= isset($_POST['subjectContact']) && $_POST['subjectContact'] == $keySubject ? 'selected'  : '' ?>><?= $valueSubject ?></option>
                    <?php } ?>
                </select>
                <div class="text-danger">
                    <span><?= isset($errorMessages['subjectContact']) ? $errorMessages['subjectContact'] : '' ?></span>
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control rounded-0" id="textContact" name="textContact" rows=7 placeholder="Votre message"><?= isset($_POST['textContact']) ? $_POST['textContact'] : '' ?></textarea>
                <div class="text-danger">
                    <span><?= isset($errorMessages['textContact']) ? $errorMessages['textContact'] : '' ?></span>
                </div>
            </div>

            <div class="mt-4">
                <button class="btn btn-info red darken-4" type="submit" name="submit">Envoyer</button>
            </div>

        </form>
    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('include/footer.php') ?>
</body>

</html>