<?php 
$pagetitre = "Notes - Infinotes";
include_once('./libs/header.php'); 

?>

            <section class="py-3">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Des notes de cours ?</h1>
                        <p class="lead fw-normal text-muted mb-0">En voici en voilà (même pour les pas baptisés)</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <h2 class="fw-bolder mb-3">Note de cours</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Notes de cours Général</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Note de cours</strong>
                                            (mis à jour régulièrement). <br>
                                            <a href="https://iron-burn-5a5.notion.site/Note-de-Cours-437831e7e5bf4b31ae675d38a16569eb">Ici les notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="fw-bolder mb-3">Résumé d'examen</h2>
                            <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Résumé général</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            On est pas encore au exam gros
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card border-0 bg-light mt-xl-5">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Envie de partager tes notes ?</div>
                                            <p class="text-muted mb-4">
                                            Envoie les
                                                <a href="./propofile.php">ici</a>
                                            </p>
                                            <div class="h6 fw-bolder">Rejoins nous</div>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include_once('libs/footer.php'); ?>