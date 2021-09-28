<?php $pagetitre = "Accueil - Infinotes";
include_once('./libs/header.php');
require_once('./includes/database.php');?>
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Une plateforme communautaire d'étudiants</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Partage de notes en temps réel ! Et l'horaire plus clair que le tableau excel là :)</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="./notes.php">Notes de cours</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="./prehoraires.php">Horaire</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://i.imgur.com/57O3zsv.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Les fonctionnalités de cette plateforme.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-calendar2-range"></i></div>
                                    <h2 class="h5">Horaire</h2>
                                    <p class="mb-0">Les horaires de l'école initialement en fichier excel on été remanié pour les offrirs en joli format sous forme de calendrier</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-book"></i></div>
                                    <h2 class="h5">Notes de cours</h2>
                                    <p class="mb-0">Les notes de cours de BIRG BLOC 1 sont disponible pratiquement en temps réel sur notre plateforme</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-pencil-square"></i></div>
                                    <h2 class="h5">Résumés</h2>
                                    <p class="mb-0">Des résumés de cours seront aussi disponibles (on est pas encore au exam hn)</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                                    <h2 class="h5">Collaboratif</h2>
                                    <p class="mb-0">Vous pouvez vous même alimenter la plateforme en envoyant vos notes de cours ou résumers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4">⚠️ Vous verrez régulièrement le nom de l'école HELB passer. Cette plateforme n'a aucun lien avec l'école. Elle est simplement alimené par les étudiants de l'HELB ! ⚠️</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Des demandes à faire ? Des questions en général ? Envie de nous aider ? </h1>
                                <p class="lead fw-normal text-muted mb-4">Pour n'importe quelle question/demande</p>
                                <a class="btn btn-primary btn-lg" href="./about.php">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </main>
<?php require_once('./libs/footer.php'); ?>