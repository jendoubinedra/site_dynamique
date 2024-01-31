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

div {
    display: block;
}
.mb-0 {
    margin-bottom: 0 !important;
}
h3 {
    font-size: 1.5rem;
}
h3 {
    color: #444;
    font-weight: 600;
    line-height: 1.5;
    margin: 0 0 30px 0;
    font-family: 'Poppins', sans-serif;
}

h3, .h3 {
    font-size: 1.75rem;
}
h3, .h3 {
    font-size: calc(1.3rem + 0.6vw);
}
h3 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
*, *::before, *::after {
    box-sizing: border-box;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
}

</style>
@include('layouts.navbar')
<div class="section mt-0 py-5 ">
    <div class="container">
        <h3 class="mb-0">
            Keynotes
        </h3>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach ($keynotes as $key)


        <div class="col-lg-3">
    <main class="grid">

            <article>
                <img src="{{asset('imagess/'.$key->image)}}" alt="Sample photo">
                <div class="text">
                  <h4>{{$key->lastname}} {{$key->firstname}}</h4>
                  <p>{{$key->description}}</p>
                  <p>{{$key->website}}</p>
                 
                </div>

              </article>

        </main>
    </div>
    @endforeach
</div>
  </div>
  <br><br><br>
  @include('layouts.footer')
