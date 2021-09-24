<?php include_once('./libs/header.php'); ?>
            <section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-calendar-range"></i></div>
                            <h1 class="fw-bolder">Avoir son horaire</h1>
                            <p class="lead fw-normal text-muted mb-0">Selectionner les filtres</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form action="horaires.php" method="get">
                                <select class="form-select" name="cursus">
                                <option selected>Selectionner le cursus</option>
                                <option value="SI B1">SI B1</option>
                                <option value="SI B2">SI B2</option>
                                <option value="SI B3">SI B3</option>
                                <option value="SI B4">SI B4</option>
                                <option value="SF B1">SF B1</option>
                                <option value="SF B2">SF B2</option>
                                <option value="SF B3">SF B3</option>
                                <option value="SF B4">SF B4</option>

                                </select>
                                <br>
                                <select class="form-select" name="groupe">
                                <option selected>Selectionner votre groupe</option>
                                <option value="">Pas de groupe</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                </select>
                                <br>
                                <div class="d-grid"><input class="btn btn-primary btn-lg" type="submit" value="Voir l'horaire"></div> 
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
<?php include_once('./libs/footer.php');?>
