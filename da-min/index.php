<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTeam admin</title>
    <?php include("header.inc")?>
</head>
<body>
<div class="admin_area">
        <div class="bradcam_shap">
            <img src="view/static/img/ilstrator/bradcam_ils.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" text-center">
                        <img src="view/static/img/svg_icon/admin_elec.png" alt="">
                        <h1 class="admin">DTeam Admin</h1>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <form action="../controller/admin/login.php" method="post" class="form-contact form-group">

                        <input type="text" name="login" id="login" class="form-control"
                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Login'" placeholder = 'Votre Login'><br>
                        <input type="password" name="pwd" id="pwd" class="form-control"
                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre Mot de passe'" placeholder = 'Votre Mot de passe'><br>
                                                       
                        <div class="form-group mt-3 text-center">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Se connecter</button>
                        </div>               
                    </form>
                </div>
            </div>
        </div>
<?php include("footer.inc")?>
</body>
</html>