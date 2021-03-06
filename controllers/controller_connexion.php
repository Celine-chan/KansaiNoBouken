<?php

require_once '../models/database.php';
require_once '../models/users.php';

$regexPseudo = '/^[a-zA-ZéèàêâùïüëçæœÉÈÇÙÆŒ\-0-9!@#$%^&\ _*]+$/';
$regexPassword = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

$errorMessages = [];
$messageConnection = '';


if (isset($_POST['btnConnexion'])) {

    if (isset($_POST['pseudoConnexion'])) {
        if (!preg_match($regexPseudo, $_POST['pseudoConnexion'])) {
            $errorMessages['pseudoConnexion'] = 'Veuillez saisir un pseudo valide.';
        }
        if (empty($_POST['pseudoConnexion'])) {
            $errorMessages['pseudoConnexion'] = 'Veuillez saisir votre pseudo.';
        }
    }

    if (isset($_POST['passConnexion'])) {
        if (!preg_match($regexPassword, $_POST['passConnexion'])) {
            $errorMessages['passConnexion'] = 'Votre mot de passe doit contenir au minimum 8 caractères, une lettre majuscule, un chiffre et un caractère spécial (!@#$%^&*-)';
        }
        if (empty($_POST['passConnexion'])) {
            $errorMessages['passConnexion'] = 'Veuillez saisir un mot de passe';
        }
    }

    // sécurité captcha
    require('../captcha/autoload.php');
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha = new \ReCaptcha\ReCaptcha('6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
        if ($resp->isSuccess()) {
        } else {
            $errors = $resp->getErrorCodes();
            $errorMessages['captcha'] = 'Erreur dans le Captcha';
        }
    } else {
        $errorMessages['captcha'] = 'Erreur dans le Captcha';
    }
}

// Connexion

if (isset($_POST['btnConnexion'])) {
    $pseudoConnection = htmlspecialchars($_POST['pseudoConnexion']);
    $passwordConnection = $_POST['passConnexion'];

    $usersObj = new Users;
    $usersInfoArray = $usersObj->getInfoUser($pseudoConnection);

    if (password_verify($passwordConnection, $usersInfoArray['users_password'])) {
        $_SESSION['users_id'] = $usersInfoArray['users_id'];
        $_SESSION['users_pseudo'] = $usersInfoArray['users_pseudo'];
        $_SESSION['users_role'] = $usersInfoArray['users_role'];
        header("location: ../index.php");
    } else {
        $messageConnection = 'Votre mail ou votre mot de passe est incorrect !';
    }
}