<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Top Fashion Week | Team</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="https://jebackoda.github.io/tfw/index.html#page-top"><img class="card-img-overlay mx-5" src="assets/img/logo.png"
                    width="240" height="120"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" id="topw" href="/index.html#nav1">O Top Fashion Week</a></li>
                            <li class="nav-item"><a class="nav-link" href="/pred.html#nav10">Předchozí ročníky</a></li>
                            <li class="nav-item"><a class="nav-link" href="/index.html#nav5">Návrháři</a></li>
                            <li class="nav-item"><a class="nav-link" href="/index.html#nav6">Pomáháme</a></li>
                            <li class="nav-item"><a class="nav-link" href="/team.html#nav9">Náš tým</a></li>
                            <li class="nav-item"><a class="nav-link" href="/index.html#nav7">Partneři</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/TopFashionWeekcom/"><img class="navpic" src="assets/img/fb.png"></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/top_fashionweek/"><img class="navpic" src="assets/img/ig.png"></a></li>
                        </ul>
                    </div>
        </div>
    </nav>
<section>
    <div class="container px-5 margin-top">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <hr class="line1" />
                    <h2 class="display-4 tucny">Kontaktní formulář</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5">
        <form method="POST" action="form.php" id="contact-form">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="leftal">
                        <label class="texty2">Vaše jméno*</label>
                    </div>
                    <div class="leftal">
                        <p><input class="inputt" type="text" id="name" name="visitor_name" placeholder="Jméno" pattern=[A-Z\sa-z]{2,20} required oninvalid="this.setCustomValidity('Prosíme vyplnit.')" oninput="setCustomValidity('')" /></p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="leftal">
                        <label class="texty2">Vaše přijmení*</label>
                    </div>
                    <div class="leftal">
                        <p><input class="inputt" type="text" id="surname" name="visitor_surname" placeholder="Přijmení" pattern=[A-Z\sa-z]{2,20} required oninvalid="this.setCustomValidity('Prosíme vyplnit.')" oninput="setCustomValidity('')"/></p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="leftal">
                        <label class="texty2">Váš email*</label>
                    </div>
                    <div class="leftal">
                        <p><input class="inputt" type="email" id="email" name="visitor_email" placeholder="@" required oninvalid="this.setCustomValidity('Prosíme vyplnit.')" oninput="setCustomValidity('')"/></p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="leftal">
                        <label class="texty2">Váš telefon*</label>
                    </div>
                    <div class="leftal">
                        <p><input class="inputt" name="tel" type="tel" placeholder="+420" pattern="[0-9]{9}" required oninvalid="this.setCustomValidity('Prosíme vyplnit.')" oninput="setCustomValidity('')"/></p>
                    </div>
                </div>
            </div>

            <div class="row gx-0 align-items-center">
                <div class="col-lg-12 order-lg-2">
                    <div class="leftal">
                        <label class="texty2">Zpráva*</label>
                    </div>
                    <div class="leftal">
                        <p><textarea class="inputtext inputt" id="message" name="visitor_message" placeholder="Zde napište vaši zprávu..." required oninvalid="this.setCustomValidity('Prosíme vyplnit.')" oninput="setCustomValidity('')"></textarea></p>
                    </div>
                </div>
            </div>

            <div class="row gx-0 align-items-center">
                <div class="col-lg-12">
                    <div class="leftal">
                        <p><input id="odeslat" type="submit" value="Odeslat" name="Odeslat" /></p>
                    </div>
                    <?php
                $msg = "";
                if(isset($_GET['error']))
                {
                    $msg = "Prosíme doplnit celý formulář.";
                    echo '<div class="alert alert-danger">'.$msg.'</div>';
                }

                if(isset($_GET['success']))
                {
                    $msg = "Vaše zpráva byla odeslána";
                    echo '<div class="alert alert-success">'.$msg.'</div>';
                }
            ?>
                </div>
            </div>
        </form>
    </div>
</section>




    <!-- Footer-->
    <footer class="py-4 bg-black">
        <div class="container px-5">
            <p class="m-0 text-center text-white small"><a href="...">Ochrana soukromí</a>  |  <a href="...">Pravidla a podmínky</a> |  <a href="https://jebackoda.github.io/tfw/contact.html">Kontakt</a></p><br>
            <p class="m-0 text-center text-white small">Pořádá a realizuje společnost High Level Pictures s.r.o.</p><br>
            <p class="m-0 text-center text-white small">Vlastníkem ochranné známky Top Fashion Week je Top Fashion Models s.r.o.</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
</body>

</html>