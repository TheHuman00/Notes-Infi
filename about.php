<?php $pagetitre = "A propos - Infinotes";
include_once('./libs/header.php'); ?>
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Envie de nous contacter ?</h1>
                                <p class="lead fw-normal text-muted mb-4">Rejoins notre whatsapp ou discord si tu as des questions, demandes, idées ou ce que vous voulez (on peut jouer à apex aussi)</p>
                                <a class="btn btn-primary2 btn-lg" href="https://chat.whatsapp.com/EIoW2qwMiMGKLriPqRmn9p">Whatsapp</a>
                                <a class="btn btn-primary btn-lg" href="https://discord.gg/zkaFJU6AKv">Discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://i.imgur.com/0zSWdUC.png" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Comment le site est fait ?</h2>
                            <p class="lead fw-normal text-muted mb-0">Site en PHP avec comme plugin fullcalendar pour le calendrier. Les crédits sont dans le footer.<br>Le site est en open source sur github. <a href="google.com">Ici le lien<a></p>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">L'équipe de <i>Notes Infi</i></h2>
                        <p class="lead fw-normal text-muted mb-5">Les notes, l'horaire c'est nous :)</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://i.imgur.com/56DI2vY.jpg" alt="..." width="200" height="200"/>
                                <h5 class="fw-bolder">Guillaume Boen</h5>
                                <div class="fst-italic text-muted">Etudiant en 1er Infi <br> Site internet - Horaires - Notes</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://i.imgur.com/p4pxPPn.jpg" alt="..." width="200" height="200"/>
                                <h5 class="fw-bolder">Matheos Ioannou</h5>
                                <div class="fst-italic text-muted">Etudiant en 1er Infi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include_once('./libs/footer.php');?>
