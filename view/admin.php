<?php 

require_once "../controllers/controller_admin.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Administrateur</title>
    <script src="https://cdn.tiny.cloud/1/75w0aspes5o1fsfrwo2wxkidqu37998magwy5f44mnuk9ytq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <?php include('../view/pagePortion/header.php') ?>
</head>

<body>

    <?php include('../view/pagePortion/navbar.php') ?>

    <div class="banniereInscriptionImg mb-5">
        <img src="../assets/img/banniere/banniereAdmin.jpg" alt="admin" class="img-fluid adminImg">
    </div>


    <div class="container">
        <h1 class="text-center">Page administrateur</h1>

        <div class="mt-5">
            <form action="osaka.php" method="POST" class="container col-10 row g-3 mx-auto border border-danger">

                <h2 class="mt-3">Article Osaka</h2>

                <textarea name="osakaArticle">Welcome to TinyMCE!</textarea>

                <div class="col-12 text-center mb-3">
                    <input type="submit" name="submit" value="envoyer">
                </div>
            </form>
        </div>

        <div>
            <form action="kyoto.php" method="POST" class="container col-10 row g-3 mx-auto border border-danger mt-5">

                <h2 class="mt-3">Article Kyoto</h2>

                <textarea name="kyotoArticle">Welcome to TinyMCE!</textarea>

                <div class="col-12 text-center mb-3">
                    <input type="submit" name="submit" value="envoyer">
                </div>
            </form>
        </div>

        <div>
            <form action="admin.php" method="POST" enctype="multipart/form-data" class="mt-5 border border-danger">

                <h2 class="mt-3 ms-4">Upload Galerie</h2>

                <div class="form-group mx-4">
                    <label class="form-label" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                </div>

                <div class="form-group mt-3 text-center">
                    <!-- <input type="submit" name="submit" value="Envoyer"> -->
                    <button type="submit" name="submit" class="btn" id="bouton">Envoyer photo</button>
                </div>

                <?= (!empty($message))  ? " <p class='messagePHP'>  $message  </p>" : "" ?>

                <?= (!empty($messageSecond)) ? " <p class='messagePHP'>  $messageSecond  </p>" : "" ?>

                <?= (!empty($messageOk)) ? " <p class='messagePHP'>  $messageOk  </p>" : "" ?>

                <?= (!empty($messageNoFormat)) ? " <p class='messagePHP'>  $messageNoFormat  </p>" : "" ?>

                <p class="note note-danger mt-3 mx-4"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 1 Mo.</p>

            </form>
        </div>

    </div>

    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image media table charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <?php include('../view/pagePortion/footer.php') ?>
</body>

</html>