<?php 
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['phone'])) {
    if (!empty($_POST['firstname'] && $_POST['lastname'] && $_POST['email'] && $_POST['message'] && $_POST['phone'])) {
        $post = $firstname && $lastname && $email && $message && $phone;
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $phone = $_POST['phone'];
        $formcontent="De: $firstname $lastname \n Message: $message \n Téléphone: $phone";
        $recipient = "thomasclarisse03@gmail.com";
        $subject = "Website Thomas Clarisse contact";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        header('Location: success.php');
        exit();
    }

    $error = [];
    if (empty($post)){
        $errors[] = "Merci de remplir les informations manquants dans le formulaire";
    }
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur mon site !">
    <meta name="keywords" content="HTML, CSS, JavaScript, thomas clarisse, PHP, REACT">
    <meta name="author" content="Thomas Clarisse">
    <link rel="shortcut icon" type="image/png" href="assets/images/thomasclarisse.png"/>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Thomas Clarisse</title>
</head>
<body >
    <header>
        <div class="burger-menu" id="burger-menu">
            <img onclick="burgerFunction()" src="/assets/images/navburger.png" alt="Menu burger">
        </div>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="https://github.com/Thomas905" class="bold">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/thomas-clarisse/" class="bold">Linkedin</a></li>
                <li><a href="#contact">Contactez-moi</a></li>
                <div class="blue"><li><a href="download.php?path=download/CVTHOMASCLARISSE.pdf" >Télécharger mon CV</a></li> </div>
            </ul>
        </nav>
    </header>
    <main>
        
        <div class="card-first" data-aos="fade-down">
            <img class="card-img" src="assets/images/thomasclarisse.png" alt="IMG PROFIL THOMAS CLARISSE">
            <div class="card-body-first">
                <h1 class="card-title-first bold font blue">Bienvenue sur le site de Thomas Clarisse</h1>
                <h4 class="card-text font bold">Développeur Web Full Stack Junior 💻</h4>
            </div>
        </div>
        <h1 class="title" data-aos="fade-up">Biographie</h1>
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <p class="card-text-presentation font">J'ai commencé par des études en tant que Technicien informatique en alternance.
                Actuellement en formation à la WildCodeSchool pour devenir Développeur web.
                J'apprends les technologies PHP, Twig, Javascript, MVC, Symfony.
                Passionné par les nouvelles technologies Informatique et le domaine spacial.
                </p>
            </div>
        </div>
        <h1 class="title" data-aos="fade-up">Compétences</h1>
        <div class="competences" data-aos="fade-up">
            <div class="card">
                <div class="card-body">
                    <div class="card-soft-title bold font">Soft Skills</div>
                    <div class="card-soft">
                        <div class="card-soft-text font">
                            Ouvert d'esprit
                        </div>
                        <div class="card-soft-text font">
                            Esprit d'équipe
                        </div>
                        <div class="card-soft-text font">
                            Attentif <br> à l'écoute
                        </div>
                        <div class="card-soft-text font">
                            Capacité à l'adaptation
                        </div>
                        <div class="card-soft-text font two">
                            Communication
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-hard-title bold font">Hard Skills</div>
                    <div class="card-hard">
                        <div class="card-hard-text font">
                            UI / UX DESIGN
                        </div>
                        <div class="card-hard-text font">
                            FIGMA 
                        </div>
                        <div class="card-hard-text font">
                            HTML5 / CSS3
                        </div>
                        <div class="card-hard-text font">
                            REACT
                        </div>
                        <div class="card-hard-text font">
                            JAVASCRIPT
                        </div>
                        <div class="card-hard-text font">
                            PHP
                        </div>
                        <div class="card-hard-text font">
                            TWIG
                        </div>
                        <div class="card-hard-text font">
                            SYMFONY
                        </div>
                        <div class="card-hard-text two font">
                            LINUX / WINDOWS
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-down">
            <h1 class="title">Mes projets</h1>
            <div class="project">
                <div class="card">
                    <div class="card-body">
                        <div class="card-project">
                            <div class="card-project-title bold font">Site Thomas Clarisse</div>
                            <div class="card-project-text font">Site personnel de Thomas Clarisse</div>
                            <div class="card-techno">
                                <img class="code" src="/assets/images/code.png" alt="code img">
                                <p class="techno font bold">HTML / CSS / PHP</p>
                                <a href="https://github.com/Thomas905/ThomasWebsite" class="github font bold blue">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-project">
                            <div class="card-project-title bold font">WebInCloudy</div>
                            <div class="card-project-text font">Site d'hébergement numérique</div>
                            <div class="card-techno">
                                <img class="code" src="/assets/images/code.png" alt="code img">
                                <p class="techno font bold">REACT / SYMFONY</p>
                                <a href="https://webincloudy.fr" class="github font bold blue">WebInCloudy.fr</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-project">
                            <div class="card-project-title bold font">TechWatch</div>
                            <div class="card-project-text font">Apprenez à faire une bonne veille technologique</div>
                            <div class="card-techno">
                                <img class="code" src="/assets/images/code.png" alt="code img">
                                <p class="techno font bold">HTML / CSS</p>
                                <a href="https://github.com/Thomas905/callisto-techwatch" class="github font bold blue">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-project">
                            <div class="card-project-title bold font">MyBooks</div>
                            <div class="card-project-text font">Bibliothèque numérique personnelle</div>
                            <div class="card-techno">
                                <img class="code" src="/assets/images/code.png" alt="code img">
                                <p class="techno font bold">HTML / CSS / JS / PHP</p>
                                <a href="https://purple-php-mybooks.phprover.wilders.dev/" class="github font bold blue">Site (Prototype)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-down">
            <h1 class="title" id="contact">Contactez-moi</h1>
            <div class="card">
                <div class="card-body">
                    <form action="/#contact" method="post">
                        <?php
                        if(!empty($errors)){
                            foreach ($errors as $error) {
                                echo "<div class='error-red'>" . $error . "</div>";
                            }
                        }
                        ?>
                        <div class="form-group">
                            <div class="form-class">
                                <label class="font bold">Nom :</label>
                                <input type="text" name="firstname" id="">
                            </div>
                            <div class="form-class">
                                <label class="font bold">Prénom :</label>
                                <input type="text" name="lastname" id="">
                            </div>
                            <div class="form-class">
                                <label class="font bold">Adresse Mail :</label>
                                <input type="email" name="email" id="">
                            </div>
                            <div class="form-class">
                                <label class="font bold">Téléphone :</label>
                                <input type="tel" name="phone" id="">
                            </div>
                            <div class="form-class">
                                <label class="font bold">Message :</label>
                                <input type="textarea" name="message" id="">
                            </div>
                        </div>
                        <div class="btn">
                        <button type="submit" class="send font bold blue">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-text">
            <p class="font bold">Copyright Thomas Clarisse 2021</p>
            <a class="blue font bold" href="download.php?path=download/CVTHOMASCLARISSE.pdf" >Télécharger mon CV</a>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="assets/js/script.js"></script>
</html>