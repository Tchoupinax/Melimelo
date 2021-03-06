<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bare - Start Bootstrap Template</title>
    <!-- 
    @@@ CSS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <link rel="stylesheet" type="text/css" href="ressources/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ressources/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ressources/css/common.css">
    <?php
    // ON INCLUT LA FEUILLE CSS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('ressources/css/'.$_GET['page'].'.css')) {
        echo "<link rel='stylesheet' type='text/css' href='ressources/css/".$_GET['page'].".css'>";
        echo "\n";
    }
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="ressources/images/mail_logo.png" class="img-responsive" alt="Responsive image"> <br>
                <font color="white">Bienvenue sur <b>MeliMailo</b> 
                <br>
                <hr>
                Votre première application mail décentralisé inter-connecté.</font>
            </div>
            <div class="col-md-9">
                <div class="well">
                    <form class="form-horizontal" action="index.php?page=inscription" method="post">
                      <div class="form-group">
                        <label for="pseudo" class="col-sm-3 control-label">Pseudo : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudonyme">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password1" class="col-sm-3 control-label">Mot de passe : </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password1" id="password1" placeholder="Mot de passe">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password2" class="col-sm-3 control-label">Retapez : </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password2" id="password2" placeholder="Mot de passe">
                        </div>
                      </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Inscription</button>
                        </div>
                      </div>
                    </form>
                </div>
                <a href="https://github.com/Tchoupinax/Melimelo" target="_blank"><img src="ressources/images/github.png" width="30" height="30" title="Dépôt GitHub" alt="Responsive image"></a>
            </div>  
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- 
    @@@ JS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <script type="text/javascript" src="ressources/js/jquery.js"></script>
    <script type="text/javascript" src="ressources/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="ressources/js/common.js"></script>
    <?php
    // ON INCLUT LA FEUILLE JS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('ressources/js/'.$_GET['page'].'.js')) {
        echo "<script type='text/javascript' src='ressources/js/".$_GET['page'].".js'></script>";
        echo "\n";
    }
    ?>
</body>
</html>
