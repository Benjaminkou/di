<?php
    
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname ="bdd";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "la connexion a étè bien etablie";
    }
    catch(PDOEexception$e){
        echo "le connexion a echoué" . $e->getMessage();
    }
    if(isset($_POST['envoyer']))
    {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        

        $sql = ("INSERT INTO `contact`(`prenom`, `nom`, `mail`, `tel`) VALUES(:prenom, :nom, :mail, :tel)");
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':tel', $tel);
            $stmt->execute();
    }
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "la connexion a étè bien etablie";
    }
    catch(PDOEexception$e){
        echo "le connexion a echoué" . $e->getMessage();
    }
    if(isset($_POST['envoyer']))
    {
        $proprio = $_POST['proprio'];
        $maison = $_POST['maison'];
        $surface = $_POST['surface'];
        $residant = $_POST['residant'];
        $chauffage = $_POST['chauffage'];
        $old = $_POST['old'];
        $code_postal = $_POST['code_postal'];
        
        $sql = ("INSERT INTO `logement`(`proprio`, `maison`, `surface`, `residant`, `chauffage`, `old`, `code_postal`) VALUES( :proprio, :maison, :surface, :residant, :chauffage, :old, :code_postal)");
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':proprio', $proprio);
        $stmt->bindParam(':maison', $maison);
        $stmt->bindParam(':surface', $surface);
        $stmt->bindParam(':residant', $residant);
        $stmt->bindParam(':chauffage', $chauffage);
        $stmt->bindParam(':old', $old);
        $stmt->bindParam(':code_postal', $code_postal);
            $stmt->execute();
            // Connexion à la base de données


$conn = mysqli_connect("localhost", "root", "", "bdd");

$sql = ("INSERT INTO logement (id_contact) SELECT MAX(id) from contact");

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);
    }





?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Direct Installeur</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">Voted #1 Worldwide</p>
                        <h1 class="fw-bold">Vos dossiers, notre priorité</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8" src="assets/img/products/house-g2db578cbc_1280.jpg"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4" src="assets/img/products/winter-g822897ffd_1280.jpg"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.25" src="assets/img/products/air-conditioner-g0f3053755_1280.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-lg-6 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Simuler votre éligibilité</h2>
                </div>
            </div>
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="row">
    <form action="" method="post">
                            <div class="col-lg-6 my-4"><label class="form-label">Etes-vous :</label>
                                <div class="form-check"><input class="form-check-input" type="radio" id="proprio_true" name="proprio" value="true"><label class="form-check-label" for="proprio_true">Propriétaire</label></div>
                                <div class="form-check"><input class="form-check-input proprio_false" type="radio" id="proprio_false" name="proprio" value="false"><label class="form-check-label" for="proprio_false">Locataire</label></div>
                            </div>
                            <div class="col-lg-6 my-4"><label class="form-label">Bien concerné :</label>
                                <div class="form-check"><input class="form-check-input" type="radio" id="maison_true" name="maison" value="true"><label class="form-check-label" for="maison_true">Maison individuelle</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="maison_false" name="maison"><label class="form-check-label" for="maison_false">Appartement</label></div>
                            </div>
                            <div class="col-lg-6 my-4"><label class="form-label">Surface (en m²)&nbsp;</label><input class="form-control form-control" type="text" name="surface"></div>
                            <div class="col-lg-6 my-4"><label class="form-label">Nombre de résident</label><input class="form-control form-control" type="number" name="residant"></div>
                            <div class="col-lg-6 col-lg-4 my-4"><label class="form-label">Mode de chauffage actuel</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="elec" name="chauffage" value="electrique"><label class="form-check-label" for="elec">Electrique</label></div>
                                        <div class="form-check"><input class="form-check-input" type="radio" id="fuel" name="chauffage" value="fuel"><label class="form-check-label" for="fuel">Fuel</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check"><input class="form-check-input" type="radio" id="gaz" name="chauffage" value="gaz"><label class="form-check-label" for="gaz">Gaz</label></div>
                                        <div class="form-check"><input class="form-check-input" type="radio" id="bois" name="chauffage" value="bois"><label class="form-check-label" for="bois">Bois</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 my-4"><label class="form-label">Votre bien a-t-il 15 ans ou plus ?</label>
                                <div class="form-check"><input class="form-check-input" type="radio" id="old_true" name="old" value="true"><label class="form-check-label" for="old_true">Oui</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio" id="old_false" name="old"><label class="form-check-label" id="old_false" for="formCheck-2" name="old" value="false">Non</label></div>
                            </div>
                            <div class="col text-center"><button class="btn btn-primary" type="button" data-bs-target="#modal-1" data-bs-toggle="modal">Simuler</button></div>
                        </div>
                    </div>
                </div>
            </div>
        <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5">
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Dernière étape - Vos coordonnés</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col col-6"><label class="form-label">Prenom</label><input class="form-control" type="text" name="prenom"></div>
                                    <div class="col col-6"><label class="form-label">Nom</label><input class="form-control" type="text" name="nom"></div>
                                    <div class="col col-6"><label class="form-label">Téléphone</label><input class="form-control" type="text" placeholder="+337xxxxxxxx" required="" name="tel"></div>
                                    <div class="col col-6"><label class="form-label">Adresse mail</label><input class="form-control" type="text" placeholder="exemple@domaine.com" name="mail"></div>
                                    <div class="col"><label class="form-label">Code postal</label><input class="form-control" type="text" name="code_postal"></div>
                                </div>
                        </div>
                        <div class="modal-footer"><input type="submit" value="Envoyer" name="envoyer"></div>
    </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last">
                    <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-circle bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                                <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                                <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                            </svg></span><span>Direct Installateur</span></div>
                    <p class="text-muted">Vos dossiers, notre priorité</p>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 Direct Installeur</p>
            </div>
        </div>
    </footer>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="border rounded border-white d-flex flex-column justify-content-between align-items-center flex-lg-row bg-primary-gradient p-4 p-lg-5">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2">Demander juste à être rappelé par un conseillé</h2>
                    <p class="mb-0"></p>
                </div>
                <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post">
                    <div class="my-2"><input class="form-control" type="text" placeholder="07xxxxxxxx" name="tel"></div>
                    <div class="my-2"><button class="btn btn-primary shadow ms-2" type="submit">Envoyé&nbsp;</button></div>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
</body>

</html>