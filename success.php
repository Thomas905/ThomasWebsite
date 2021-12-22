<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site internet Thomas Clarisse">
    <meta name="keywords" content="HTML, CSS, JavaScript, thomas clarisse, PHP, REACT">
    <meta name="author" content="Thomas Clarisse">
    <link rel="shortcut icon" type="image/png" href="assets/images/thomasclarisse.png" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Thomas Clarisse | Message de confirmation</title>
</head>

<body>
    <header>
        <div class="burger-menu" id="burger-menu">
            <img onclick="burgerFunction()" src="/assets/images/navburger.png" alt="Menu burger">
        </div>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="https://github.com/Thomas905" class="bold">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/thomas-clarisse/" class="bold">Linkedin</a></li>
                <li><a href="#contact">Contactez-moi</a></li>
                <div class="blue">
                    <li><a href="download.php?path=download/CVTHOMASCLARISSE.pdf">Télécharger mon CV</a></li>
                </div>
            </ul>
        </nav>
    </header>
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <h1 class="title-contact-success green" data-aos="fade-up">Merci de m'avoir contacté ! :)</h1>
            </div>
            <div class="btn">
                <button type="submit" class="back font bold blue"><a href="/">Retour sur le site</a></button>
            </div>
        </div>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>