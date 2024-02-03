@include('layouts.navbar')
<html>
    <head>
        <style>
            body {
              font-family: 'Arial', sans-serif;
              background-color: #f4f4f4;
              margin: 0;
              padding: 0;
          }

          .menu-container {
              max-width: 1200px;
              margin: 50px auto;
              padding: 20px;
          }

          .menu-column {
               display: flex;
      flex-wrap: wrap;
      /* Adjust the gap as needed */
          }

          .menu-item {
              flex: 1 0 calc(25% - 20px); /* Adjust the width and margin as needed */
              max-width: calc(25% - 20px); /* Limit maximum width to maintain 4 columns */
              transition: transform 0.3s ease-in-out;
              margin: 0 10px 20px 0; /* Adjust the margin as needed */
          }

          .menu-item img {
              width: 100%;
              height: auto;
              border-radius: 5px 5px 0 0;
          }

          .menu-item-content {
              padding: 20px;
          }

          .menu-filter {
              text-align: center;
              margin-bottom: 30px;
          }


          .menu-item {
              flex: 1 0 calc(25% - 20px); /* Adjust the width and margin as needed */
              max-width: calc(25% - 20px); /* Limit maximum width to maintain 4 columns */
              transition: transform 0.3s ease-in-out;
              margin: 0 10px 20px 0; /* Adjust the margin as needed */
          }




          .menu-filter {
              text-align: center;
              margin-bottom: 30px;
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
  </style>
    </head>
    <body>
        <div class="section mt-0 py-5 ">
            <div class="container">
                <h3 class="mb-0">
                   Sponsors
                </h3>
            </div>
        </div>
        <div class="menu-container">
            <p>The following organizations are supporting us:</p>
            <div class="menu-column">

                @foreach($sponsors as $sponsor)
                <div class="menu-item dessert">
                    <div class="card">
                        <img src="http://127.0.0.1:8000/{{$sponsor->src}}" alt="" class="card-img-top">

                    </div>
                </div>

                @endforeach
                <!-- Add more items as needed -->

            </div>
            <br><br>
            <p>If your organization/society/company is interested to support the JURSE 2023 event, please contact us <a class="text-decoration-underline" href="mailto:zedd2@iacm.forth.gr">zedd2@iacm.forth.gr</a>  </p>

        </div>
        <script>
              $(document).ready(function () {
                    var $grid = $('.menu-column').isotope({
                        itemSelector: '.menu-item',
                        layoutMode: 'fitRows'
                    });

                    $('.menu-filter button').on('click', function () {
                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({ filter: filterValue });
                    });

                    // Add active class to the current button (highlight it)
                    $('.menu-filter button').on('click', function () {
                        $(this).addClass('active').siblings().removeClass('active');
                    });
                });
        </script>
    </body>
</html>


@include('layouts.footer')
