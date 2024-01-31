
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

        <title>Hotels | JURSE 2023 - Joint Urban Remote Sensing Event</title>
<style>
    #map {
    height: 400px;
    width: 100%;
}
.mb-5 {
    margin-bottom: 3rem !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}

div {
    display: block;
}
b {
    font-weight: bolder;
}
.py-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}

p {
    margin-bottom: 30px;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, *::before, *::after {
    box-sizing: border-box;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.grid-container {
    -webkit-transition: height .4s ease;
    transition-behavior: normal;
    transition-duration: 0.4s;
    transition-timing-function: ease;
    transition-delay: 0s;
    transition-property: height;
    -o-transition: height .4s ease;
    transition: height .4s ease;
    transition-behavior: normal;
    transition-duration: 0.4s;
    transition-timing-function: ease;
    transition-delay: 0s;
    transition-property: height;
}
element.style{
    position: relative;
    overflow: hidden;
}
[class*="col-"]:not([class*="sticky-"]):not([class*="position-"]) {
    position: relative;
}
.mb-4 {
    margin-bottom: 1.5rem !important;
}
{
    margin-top: 0;
    margin-bottom: 1rem;
}

*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.text-decoration-underline {
    text-decoration: underline !important;
}
a {
    text-decoration: none !important;
    color: #004A7B;
}
a {
    color: #0d6efd;
    text-decoration: underline;
}
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
body {
    line-height: 1.5;
    color: #555;
    /* font-family: 'Lato', sans-serif; */
    font-family: 'Lato', sans-serif;
}
table {
    caption-side: bottom;
    border-collapse: collapse;
}
*, *::before, *::after {
    box-sizing: border-box;
}
table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: gray;
}
img {
    overflow-clip-margin: content-box;
    overflow: clip;
}
.mb-2 {
    margin-bottom: 0.5rem !important;
}
p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
    margin-bottom: 30px;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.warning-msg {
    color: #a02020;
}
p, pre, ul, ol, dl, dd, blockquote, address, table, fieldset, form {
    margin-bottom: 30px;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.mb-5 {
    margin-bottom: 3rem !important;
}
.w-25 {
    width: 25% !important;
}
img {
    max-width: 100%;
}
img, svg {
    vertical-align: middle;
}
img {
    overflow-clip-margin: content-box;
    overflow: clip;
}
</style>
    </head>

    <body class="stretched">

       @include('layouts.navbar')
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Hotels & Accommodation
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container">

                <h4>Proposed hotels for your accommodation during the JURSE 2023 conference</h4>

                <p>
                    To help with your planning, a number of rooms at <b>various city hotels within walking distance</b> of the venue,
                    have been blocked by <b>CCBS GREECE</b>, which is our official accommodation supplier. Hotel rooms are available
                    in different room and price categories for conference delegates at <b>special rates</b>. <br>
                    Book early to secure your room and take advantage of the special negotiated rates.
                </p>

                <div id="map" class="mb-5 "></div>

                <div class="grid-container row mb-4">

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Olympic Hotel 3* (650m from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Standard Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>69€</td>
                                </tr>
                                <tr>
                                    <td>Standard Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>82€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Irini Hotel 3* (1km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Deluxe Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>76€</td>
                                </tr>
                                <tr>
                                    <td>Deluxe Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>92€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Kastro Hotel 3* (1km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Standard Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>60€</td>
                                </tr>
                                <tr>
                                    <td>Standard Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>85€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Castello City Hotel 4* (800m from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Deluxe City View Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>80€</td>
                                </tr>
                                <tr>
                                    <td>Deluxe City View Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>90€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Astoria Capsis Hotel 4* (1km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Superior Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>95€</td>
                                </tr>
                                <tr>
                                    <td>Superior Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>105€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Ibis Styles Heraklion Central Hotel 4* (1km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>98€</td>
                                </tr>
                                <tr>
                                    <td>Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>110€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Galaxy Hotel 5* (1km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Superior Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>115€</td>
                                </tr>
                                <tr>
                                    <td>Superior Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>134€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">Aquila Atlantis Hotel 5* (1.3km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Classic Room with Window BB</td>
                                    <td>Single (1 person)</td>
                                    <td>108€</td>
                                </tr>
                                <tr>
                                    <td>Classic Room with Window BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>130€</td>
                                </tr>
                                <tr>
                                    <td>Business Room with City View BB</td>
                                    <td>Single (1 person)</td>
                                    <td>140€</td>
                                </tr>
                                <tr>
                                    <td>Business Room with City View BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>140€</td>
                                </tr>
                                <tr>
                                    <td>Executive Room with Harbor View BB</td>
                                    <td>Single (1 person)</td>
                                    <td>150€</td>
                                </tr>
                                <tr>
                                    <td>Executive Room with Harbor View BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>150€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="3" class="text-center">GDM Megaron Hotel 5* (1.5km from Venue)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vip Sea & Venerian Fortress view Room BB</td>
                                    <td>Single (1 person)</td>
                                    <td>195€</td>
                                </tr>
                                <tr>
                                    <td>Vip Sea & Venerian Fortress view Room BB</td>
                                    <td>Double (2 persons)</td>
                                    <td>195€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="mb-4">
                    To book your accommodation please send us your request at <a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a>
                </div>

                <p>
                    If, by the time CCBS Greece receives your room request, the hotel you have selected is already fully booked,
                    CCBS Greece will propose an alternative similar hotel at the same price range.
                </p>

                <p>
                    The <b>Overnight Stay Tax</b> is <b>not included</b> in the above mentioned rates and it is payable by the client directly to the hotel upon check in. <br>
                    Your Room Reservation is not complete until payment has been received. <br>
                    Payment is available through the online registration form, with bank transfer or credit card (Visa or Master Card). <br>
                    For any questions or requests please send an email at <a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a> <br>
                </p>

                <h3>Payment options</h3>

                <p>
                    <b>By bank transfer</b> to the following account:
                </p>

                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td>Bank Name</td>
                            <td><b>EUROBANK</b></td>
                        </tr>
                        <tr>
                            <td>Bank Address</td>
                            <td>1, 62 Martyron Ave, Heraklion, Crete, Greece</td>
                        </tr>
                        <tr>
                            <td>Account Holder</td>
                            <td>Cretan Conference & Business Service LP</td>
                        </tr>
                        <tr>
                            <td>Account Number</td>
                            <td>0026.0134.00.0200765110</td>
                        </tr>
                        <tr>
                            <td>Account IBAN</td>
                            <td>GR9602601340000000200765110</td>
                        </tr>
                        <tr>
                            <td>SWIFT Code</td>
                            <td>ERBKGRAA</td>
                        </tr>
                        <tr>
                            <td>Currency</td>
                            <td><b>EURO</b></td>
                        </tr>
                    </tbody>
                </table>

                <p class="mb-4">
                    Please include in your payment the <b>name</b> of the participant and <b>Reference ID</b>. <br>
                    All bank transfers must be made without any charges to the recipient.
                </p>

                <p>
                    <b>By online payment via credit card</b> (Visa / Mastercard only) by using the following link: <a class="text-decoration-underline" href="https://www.livepay.gr/ccbs-1.aspx" target="_blank">https://www.livepay.gr/ccbs-1.aspx</a> <br>
                    Instructions on how to pay with LivePay <b><a class="text-decoration-underline" href="pdf/livepay-instructions.pdf">here</a></b>.
                </p>

                <h3>Accommodation cancellation policy</h3>

                <p>
                    Any changes or cancellations must be received by email <a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a> or fax at +30 2810 330606.
                </p>

                <div class="ms-4">
                    <ul>
                        <li><b>Until February 28th 2023</b>, Full refund minus 25€ administrative fee.</li>
                        <li><b>From March 1st until April 15th 2023</b>, Full Refund minus 1 night of Accommodation.</li>
                        <li><b>From April 16th until April 30th 2023</b>, Full Refund minus 2 nights of Accommodation.</li>
                        <li><b>From May 1st 2023 onward</b>, No refund of accommodation fees.</li>
                    </ul>
                </div>
                <p>
                    Please note that all the bank expenses will be deducted from the amount to be refunded.
                </p>

                <p class="mb-2">
                    For any question regarding payments please contact: <br>
                    Ms Katerina Koronaiou <br>
                    E:<a class="text-decoration-underline" href="mailto:conference@ccbsgreece.gr">conference@ccbsgreece.gr</a> <br>
                    T:+30 2810 331010 <br>
                    F:+30 2810 330606 <br>
                    Partner Agency: CCBS Greece
                </p>
                <img class="w-25 mb-5" src="images/ccbs.png" alt="">

                <p>
                    CCBS GREECE LP <br>
                    Cretan Conference and Business Services L.P. <br>
                    65, Ethnikis Antistaseos AVE, P.C.71306, Heraklion GR <br>
                    Tel: +30 2810 331010, Fax: +30 2810 330606 <br>
                    VAT: GR800532670
                </p>

                <p class="warning-msg">
                    Conference organizers would like to strongly emphasize that, for registration purposes and accommodation offers, only the official website, as well as the links and contacts advised herein should be used. <br>
                    <b>There is only one contact point and it is CCBS Greece.</b>
                </p>

            </div>
        </div>

      @include('layouts.footer')

        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
        <script src="js/jquery.js"></script>
        <script src="js/plugins.min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/venue.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDk_kuz1s0RZe_ev2Qf_A6ASj7N9qJXXY&callback=initMap&v=weekly" async></script>

        <script>
            let map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 35.33654, lng: 25.13378},
                    zoom: 15,
                    mapTypeId: 'satellite',
                    styles: [
                        {
                            featureType: "all",
                            elementType: "labels",
                            stylers: [{ visibility: "off" }]
                        }
                    ]
                });
                const idk = new google.maps.Marker({
                    position: {lat: 35.33378, lng: 25.12988},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                    },
                    label: {
                        text: 'Conference Venue',
                        className: 'marker-class'
                    }
                });
                const olympi = new google.maps.Marker({
                    position: {lat: 35.33654, lng: 25.13378},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Olympic Hotel',
                        className: 'marker-class'
                    }
                });
                const castello = new google.maps.Marker({
                    position: {lat: 35.3362, lng: 25.12367},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Castello City Hotel',
                        className: 'marker-class'
                    }
                });
                const galaxy = new google.maps.Marker({
                    position: {lat: 35.33054, lng: 25.13837},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Galaxy Hotel',
                        className: 'marker-class'
                    }
                });
                const capsis = new google.maps.Marker({
                    position: {lat: 35.33836, lng: 25.13635},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Astoria Capsis Hotel',
                        className: 'marker-class'
                    }
                });
                const aquila = new google.maps.Marker({
                    position: {lat: 35.34013, lng: 25.13796},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Aquila Atlantis Hotel',
                        className: 'marker-class'
                    }
                });
                const gdm_megaron = new google.maps.Marker({
                    position: {lat: 35.34105, lng: 25.13805},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'GDM Megaron Hotel',
                        className: 'marker-class'
                    }
                });
                const ibis = new google.maps.Marker({
                    position: {lat: 35.34082, lng: 25.13558},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Ibis Styles Heraklion Central Hotel',
                        className: 'marker-class'
                    }
                });
                const irini = new google.maps.Marker({
                    position: {lat: 35.34104, lng: 25.13567},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Irini Hotel',
                        className: 'marker-class'
                    }
                });
                const kastro = new google.maps.Marker({
                    position: {lat: 35.34116, lng: 25.13257},
                    map: map,
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    },
                    label: {
                        text: 'Kastro Hotel',
                        className: 'marker-class'
                    }
                });
            }

            window.initMap = initMap;
        </script>

    </body>
</html>
