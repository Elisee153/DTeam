<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php include("layout/header.php")?>
</head>
<body>
      <!-- navigation  -->
      <div class="bradcam_area">
        <div class="bradcam_shap">
            <img src="img/ilstrator/bradcam_ils.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contactez-nous</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                              </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /navigation  -->
  <!-- ================ contact ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <h2 class="contact-title">Entrons en contact</h2>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="form-group" >
                    
                        <textarea id="form" class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre message'" placeholder = 'Entrez votre message'></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre nom'" placeholder = 'Votre nom'>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre adresse email'" placeholder = 'Votre adresse email'>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                    <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titre'" placeholder = 'Titre'>
                    </div>
                </div>
                </div>
                <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm btn_4 boxed-btn">Envoyer</button>
                </div>
            </form>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                <h3>R.D.C, L'shi.</h3>
                <p>Gambella, Du carmel</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                <h3>+243 851 272 953</h3>
                <p>Lun au Ven de 8am à 7pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                <h3>elisee.kalonji99@gmail.com</h3>
                <p>Notre adresse fonctionne 24h/24</p>
                </div>
            </div>
            </div>
        </div>
    </div>
  </section>
<?php include("layout/footer.php")?>
</body>
</html>