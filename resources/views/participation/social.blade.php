@include('layouts.navbar')
<br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Events</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/go.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <link href="chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/github-dark.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px; /* Ajout de marges à gauche et à droite */
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .mb-3,
        .mt-2 {
            margin: 2rem 0 !important;
        }

        h4 {
            font-size: 24px; /* Augmentation de la taille de la police */
            font-weight: 600;
            margin: 7% 0 0 7%; /* Ajustement de la marge */
            display: block;

        }

        p {
            display: block;
            margin: 7% 0 0 7%; /* Ajustement de la marge */

        }

        .container {
            width: 80%; /* Ajustement de la largeur de la container */
            margin: 0 auto; /* Centrer la container */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }
        .mb-0 {
    margin-bottom: 0 !important;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    color: #444;
    font-family: 'Poppins', sans-serif;
    line-height: 1.5;
    margin: 0 0 30px 0;
    font-weight: 600;
}
    </style>
</head>

<body>
    <div class="section mt-0 py-5 ">
        <div class="container">
            <h3 class="mb-0">
                Social Events
            </h3>
        </div>
    </div>
    <br><br>
    <p>The JURSE 2023 program will host social events, which are addressed to all registered participants and accompanying persons.</p>
    <h4 class="mb-3 mb-2">Ice Breaker (May 16)</h4>
    <p>This welcome event will take place at the conference venue and will include a snack buffet and beverages. This event is ideal for networking among participants in a hospitable setting, while participants will also have the chance to register in advance for the conference.</p>
    <h4 class="mb-3 mb-2">Cultural Tour (May 17)</h4>
    <p>A guided cultural tour at the Knossos Palace has been planned, including transport with a bus from/to the conference venue. Visitors will learn about the thriving Minoan civilization and will wander across the ruins of this unique archaeological site. The tour will end with a buffet and beverages on-site.</p>
    <h4 class="mb-3 mb-2">Gala Dinner (May 18)</h4>
    <p>A visit to the Lyrarakis winery at the Heraklion outskirts with a bus from/to the conference venue has been organized. Visitors will have the chance to taste different local wine varieties and delectable cuisine at a site surrounded by the natural beauty of the island. During the dinner, the result of the student contest will be announced too.</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><img src="{{asset('images/knossos.png')}}" alt></div>
            <div class="col-lg-6"><img src="{{asset('images/winery.png')}}" alt></div>
        </div>
    </div>
    <br><br>
</body>

</html>
@include('layouts.footer')
