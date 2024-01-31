
<!DOCTYPE html>
<html dir="ltr" lang="en-US" style="position: relative; min-height: 100%;">
    <head>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD3C8E34SP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BD3C8E34SP');
        </script>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/dark.css" type="text/css" />
        <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="css/custom.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="images/favicon.ico">

        <title>Contact | JURSE 2023 - Joint Urban Remote Sensing Event</title>

    </head>

    <body class="stretched">

       @include('layouts.navbar')
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Contact
                </h3>
            </div>
        </div>

        <div class="container">
            <div class="row my-4">

                <div class="col-lg-6">
                    <h3>Contact Person</h3>
                    <a class="text-decoration-underline" href="http://rslab.gr/nektarios.html" target="_blank">Nektarios Chrysoulakis</a><br>
                    <a class="text-decoration-underline" href="mailto:zedd2@iacm.forth.gr">zedd2@iacm.forth.gr</a><br>
                    +30 2810-391-762<br>
                    +30 6932-929-775
                </div>

                <div class="col-lg-6">
                    <h3>Venue</h3>
                    Nik. Plastira 49, 71201 Heraklion Crete, Greece<br>
                    +30 2810 229 618
                </div>

            </div>

            <iframe class="w-100 mt-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.5594938632066!2d25.12992566584432!3d35.333394494779704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149a5987e50bedd9%3A0xab0037183204b1d2!2sCultural%20Conference%20Center%20of%20Heraklion!5e0!3m2!1sen!2sgr!4v1650026080910!5m2!1sen!2sgr" height="300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <br><br>

      @include('layouts.footer')
        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="js/code.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/plugins.min.js"></script>
        <script src="js/functions.js"></script>

    </body>
</html>
