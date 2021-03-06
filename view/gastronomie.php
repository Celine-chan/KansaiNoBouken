<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
    <title>Kansai no bouken - 関西の冒険 - Gastronomie</title>
    <?php include('../view/include/header.php') ?>
</head>


<body>
    <?php include('../view/include/navbar.php') ?>


    <div class="banniereTakoyakiImg">
        <img src="../assets/img/banniere/takoyaki2.jpg" alt="takoyaki" class="img-fluid takoyakiImg">
    </div>

    <h1 class="text-center mt-5 titleGastronomie">Gastronomie du Kansai</h1>

    <div class="d-flex flex-row mt-5 container">
        <div><img src="../assets/img/gastronomie/sushi.jpg" alt="sushiOsaka" class="img-fluid sushiOsaka rounded d-none d-sm-block"></div>
        <div>
            <p class="textGastronomyPage ml-4"><strong>La gastronomie du Kansai</strong>, très populaire sur l'archipel est composé de plats 
            et de mets variés, ce qui en fait une cuisine riche. Il y a bien sûr, les <em>okonomiyaki</em> et les <em>takoyaki</em> d'Osaka 
            en abondance dans les restaurants de Dotonbori, mais également, le <em>boeufs de Kobe</em>, les <em>sushis</em>, les <em>kuchikatsu</em> et 
            sans oublié les <em>fruits de mer</em> et <em>poissons</em>. </p>
            <p class="textGastronomyPage ml-4">A Kyoto, la cuisine locale porte un nom le <em>Kyou-Ryouri</em>. Vous trouverez de nombreuses pâtisserie, spécialités
            de la ville comme le <em>Yatsuhashi</em>, frit ou cuit à la vapeur, qui renferme de l'anko (pâte de haricot rouge) pour 
            le traditionnel mais vous en retrouverez également au chocolat, à la confiture ou encore à la crème.</p>
        </div>
    </div>

    <div class="text-center mt-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <h2 class="subTitleGastronomie ms-5 mt-5">Quelques recettes...</h2>
    <div class="container-fluid mx-auto d-flex row mt-5 mx-auto">
        <!-- Card recipe 1 -->
        <div class="card mb-3" style="max-width: 480px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../assets/img/gastronomie/takoyaki-gastronomie-recipe.jpg" alt="takoyaki" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Takoyaki</h5>
                        <p class="card-text text-dark">
                            Spécialités d'Osaka, les takoyaki se présentent sous forme de boulette fourées avec des
                            morceaux de poulpe (tako).
                            Ils peuvent se manger à toute heure et sont vendu en barquette de 6 à 12 takoyaki.
                        </p>
                        <button type="button" class="btn btn-rounded btnGastronomieRecipe" data-mdb-toggle="modal" data-mdb-target="#recipeTakoyaki">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal recipe 1 -->
        <div class="modal fade text-dark" id="recipeTakoyaki" tabindex="-1" aria-labelledby="recipeTakoyaki" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="recipeTakoyaki">Takoyaki</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="videoresponsive">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/v-qm6bThYjY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="mt-2 titleModalRecipe">Ingrédients (40 takoyaki) :</p>
                        <ul>
                            <li>200g de farine de takoyaki</li>
                            <li>700ml d'eau</li>
                            <li>2 oeufs</li>
                            <li>80g de poulpe</li>
                            <li>100g de légumes (chou, poireau, gingembre rouge, etc)</li>
                        </ul>
                        <ul>
                            <li>Appareil à takoyaki <i class="fas fa-exclamation"></i></li>
                        </ul>
                        <p class="titleModalRecipe">Préparation:</p>
                        <ul>
                            <li>Mélanger la farine, les oeufs et l'eau</li>
                            <li>Couper les légumes</li>
                            <li>Faire chauffer l'appareil à takoyaki et mettre de l'huile végétal</li>
                            <li>Verser la pâte à takoyaki dans les moules et mettre les légumes</li>
                            <li>Laisser cuire quelques minutes jusqu'à ce que la pâte ne soit plus liquide</li>
                            <li>Tourner les takoyaki petit à petit jusqu'à ce qu'ils soient bien dorés</li>
                            <li>Mettre dans une assiette et rajouter la sauce takoyaki, la poudre d'algues(aonori) et
                                les copeaux de bonites</li>
                        </ul>

                        <img class="imgRecipeSize mb-3 img-fluid" src="../assets/img/gastronomie/takoyakiRecipe.jpg" alt="takoyaki">
                        <p>Source : <a href="https://www.youtube.com/channel/UCt8iNzhAJONk3leOg0hoNYA">Les
                                recettes
                                d'une japonaise</a></p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btnGastronomieRecipe btn-rounded" data-mdb-dismiss="modal">
                            Retour
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card recipe 2 -->
        <div class="card mb-3 ms-2" style="max-width: 480px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../assets/img/gastronomie/pexels-ponyo-sakana-4193842.jpg" alt="ramen" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Ramen</h5>
                        <p class="card-text text-dark">
                            Le Ramen, un plat très populaire, est constitué de nouilles servis dans un bouillon à
                            base de viande ou de poisson.
                            Il existe plusieurs sorte de ramen, le plus commun est servi généralement avec un oeuf et
                            des tranches de porc.
                        </p>
                        <button type="button" class="btn btn-rounded btnGastronomieRecipe" data-mdb-toggle="modal" data-mdb-target="#recipeRamen">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal recipe 2 -->
        <div class="modal fade text-dark" id="recipeRamen" tabindex="-1" aria-labelledby="recipeRamen" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="recipeRamen">Ramen <img src="../assets/img/animatedDishes/icon_ramen.gif" class="ramenGif" alt="ramenGif"></h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="videoresponsive">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kTMomm4d73c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="mt-2 titleModalRecipe">Ingrédients pour recette d'accompagnement Ajitama :</p>
                        <ul>
                            <li>4 oeufs mollets</li>
                            <li>100ml d'eau</li>
                            <li>1 cuillère à café de dashi en poudre</li>
                            <li>2 cuillère à soupe de sauce soja</li>
                            <li>1 cuillère à soupe de sucre</li>
                            <li>bouillon de ramen en sachet</li>
                        </ul>
                        <p class="titleModalRecipe">Préparation:</p>
                        <ul>
                            <li>Mettre l'eau , le dashi, la sauce soja et le sucre dans une casserole et faire chauffer
                            </li>
                            <li>Laisser reposer jusqu'à ce qu'il soit chaud</li>
                            <li>Mettre les oeufs mollets dans un sac congélation et verser la sauce</li>
                            <li>laisser reposer 1 ou 2 jours dans le frigo</li>
                        </ul>

                        <img class="imgRecipeSize mb-3 img-fluid" src="../assets/img/gastronomie/ramen-gastronomie.jpg" alt="ramen">
                        <p>Source : <a href="https://www.youtube.com/channel/UCt8iNzhAJONk3leOg0hoNYA">Les
                                recettes
                                d'une japonaise</a></p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btnGastronomieRecipe" data-mdb-dismiss="modal">
                            Retour
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card recipe 3 -->
        <div class="card mb-3 ms-2" style="max-width: 480px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../assets/img/gastronomie/yamayoshiOkonomiyaki2.jpg" alt="okonomiyaki" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Okonomiyaki</h5>
                        <p class="card-text text-dark">
                            L'okonomiyaki est plat type d'Osaka. Il se présente sous la forme d'omelette composé de farine et de chou et accompagné
                            généralemetn de fines tranches de porc et du dashi. Il est préparé sur une plaque chauffante.
                        </p>
                        <button type="button" class="btn btn-rounded btnGastronomieRecipe" data-mdb-toggle="modal" data-mdb-target="#recipeOkonomyaki">
                            Voir la recette
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal recipe 3 -->
        <div class="modal fade text-dark" id="recipeOkonomyaki" tabindex="-1" aria-labelledby="recipeOkonomyaki" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="recipeOkonomyaki">Okonomiyaki</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="videoresponsive">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/RoJM6ob0oiE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p class="mt-2 titleModalRecipe">Ingrédients :</p>
                        <ul>

                        </ul>
                        <p class="titleModalRecipe">Préparation:</p>
                        <ul>

                        </ul>

                        <img class="imgRecipeSize mb-3 img-fluid" src="../assets/img/gastronomie/okonoRecipe.jpg" alt="okonomiyaki">
                        <p>Source : <a href="https://www.youtube.com/channel/UCt8iNzhAJONk3leOg0hoNYA">Les
                                recettes
                                d'une japonaise</a></p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btnGastronomieRecipe" data-mdb-dismiss="modal">
                            Retour
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <img src="../assets/img/separator.svg" alt="separator" class="w-25">
    </div>

    <h2 class="subTitleGastronomie ms-5 mt-5">Quelques adresses...</h2>
    <div>

    </div>











    <div>
        <a id="scrollTop"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
    </div>

    <?php include('../view/include/footer.php') ?>
</body>

</html>