<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>


    <link rel="stylesheet" href="contact.css">

    <script src="https://kit.fontawesome.com/e6c1130fdf.js" crossorigin="anonymous"></script>

    <!-- <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(function() {
            $('#burger, #close').click(function() {
                $('body').toggleClass('navOpen');
            })
        })
    </script> -->

</head>

<body class="container">
    <header class="main-header">
        <div class="navbar">
            <img src="images/Plan de travail 1.png" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="apropos.php">A propos</a></li>
                    <li><a href="#">Ateliers</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon">
        </div>

    </header>

    <article class="contactintro">
        <figure>
            <img src="images/contact.png" alt="Icône de Contact">
        </figure>


    </article>
    <div class="bdr">
        <article class="info">
            <h3>Afin de répondre à toutes vos questions, </h3>
            <h3> n’hésitez pas à nous contacter via ce formulaire. </h3>
            <h3> s’efforcerons de répondre dans les plus brefs délais.</h3>
        </article>

        <article id="contact">
            <h2 class="major">Contact</h2>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field half">
                        <label for="email" id="abs">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" value="Envoyer" class="primary" />
                </div>
            </form>
            <div class="icons">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </article>
    </div>
    <footer>
        <article class="fend">
            <p>
                <a href="#">Nos valeurs</a>
                <a href="#">Presse</a>
                <a href="#">Mentions Légales</a>
                <a href="#">Vie privée</a>
                <a href="#">Premium</a>

            </p>
        </article>
    </footer>
</body>

</html>