<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robot" content="no-index, no-follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pStrTitre ?></title>
    <link href="../inc/css/reset.css" rel="stylesheet">
    <link href="../inc/css/bootstrap.min.css" rel="stylesheet">
    <link href="../inc/css/mainAdmin.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"> <a class="navbar-brand" href="../index.php">Retour à Margaw</a></div>
                <ul class="nav navbar-nav">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">forum<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="forumRead.php">Modération</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Références de l'auteur<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="referenceCreate.php">Création de rubrique</a></li>
                            <li><a href="referenceRead.php">Modification du nom de rubrique</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Artistes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="artisteCreate.php">Ajouter un artiste</a></li>
                            <li><a href="artisteRead.php">Modifier un artiste</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>