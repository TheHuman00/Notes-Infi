<?php $pagetitre = "Proposer notes - Infinotes";
include_once('./libs/header.php'); 
include_once('./includes/function.php');
include_once('./includes/sql.php'); 
include_once('./includes/uploads.php');

if(isset($_POST['submit'])) {
	$photo = new Media();
	$photo->upload($_FILES['file_upload']);
	  if($photo->process_media()){
		  $session->msg('s','la photo a été téléchargée.');
		  redirect('media.php');
	  } else{
		$session->msg('d',join($photo->errors));
		redirect('media.php');
	  }
	}

?>
<section class="py-5">
                <div class="container px-5">
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Ajouter ses notes</h1>
                            <p class="lead fw-normal text-muted mb-0">N'oublier pas le commentaire</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" action="media.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Ecrit ton nom..."/>
                                        <label for="name">Prénom</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="nom@exemple.com"/>
                                        <label for="email">Email</label>
									</div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Ecrit ton commentaire..." style="height: 8rem"></textarea>
                                        <label for="message">Commentaire</label>
                                    </div>
									<div class="input-group">
									<input type="file" class="form-control" name="file_upload">
									</div>
									<br>
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Envoyer ses notes</button></div>
                                </form>
                            </div>
                        </div>
					</div>
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-bookmark-check"></i></div>
                            <div class="h5 mb-2">Vérification</div>
                            <p class="text-muted mb-0">Vos fichiers seront vérifiés avant d'être en ligne.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-circle"></i></div>
                            <div class="h5">Le prénom</div>
                            <p class="text-muted mb-0">Envoyer votre prénom ou quelque chose pour savoir vous identifier.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-archive"></i></div>
                            <div class="h5">Le cours</div>
                            <p class="text-muted mb-0">Spécifier le cours qui concerne vos notes.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-right-text"></i></div>
                            <div class="h5">Les commantaires</div>
                            <p class="text-muted mb-0">N'hésiter pas à nous envoyez des commantaires à propos de vos notes.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include_once('./libs/footer.php');?>



