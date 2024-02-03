@include('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    body {
  padding: 40px 0;
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
}

.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
}

.grid > article img {
  max-width: 100%;
}

.grid .text {
  padding: 20px;
}
/********************************/
.section {
    position: relative;
    width: 100%;
    margin: 60px 0;
    padding: 60px 0;
    background-color: #F4F4F4;
    overflow: hidden;
}
.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
.mt-0 {
    margin-top: 0 !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    line-height: 1.5;
    color: #555;
    /* font-family: 'Lato', sans-serif; */
    font-family: 'Lato', sans-serif;
}
body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

</style>
</head>

<body>
    <div class="section mt-0 py-5 ">
            <div class="container">
                <h3 class="mb-0">
                   keynotes
                </h3>
            </div>
        </div>
    <div class="container">
        <main class="grid">




@foreach ($keynotes as $keynote)


          <article>

            <div class="text">
              <h3>{{$keynote->firstname}} {{$keynote->lastname}}</h3>
              <p>{{$keynote->description}}</p>
              <p>{{$keynote->website}}</p>
            </div>
          </article>
          @endforeach
        </main>
      </div>

</body>
</html>
<br><br><br>



  @include('layouts.footer')
