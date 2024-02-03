<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Lato", sans-serif;
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.9);
  z-index: -1;
  opacity: 0;
  transition: 1s all;
}

.navbar {
  display: flex;
  align-items: center;
  width: 100vw;
  background-color: #fff;
  box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
  position: relative;
  padding: 0px 70px;
  background-color: #0d0c0c;
}
.navbar-logo {
  color: #f8f3f3;
  text-decoration: none;
  font-size: 25px;
  padding: 0px 20px;
}

.navbar-links {
  list-style-type: none;
  display: flex;
}
.navbar-links li a {
  display: block;
  text-decoration: none;
  color: #f9f5f5;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.4s all;
}

.navbar-links li.navbar-dropdown {
  position: relative;
}

.navbar-links li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
}

.navbar-links li.navbar-dropdown .dropdown {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding: 20px 0;
  top: 100%;
  transform: translateY(50px);
  left: 0;
  width: 250px;
  background-color: #080505;
  box-shadow: 0px 10px 10px 3px rgba(0, 0, 0, 0.3);
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  z-index: 111;
  transition: 0.4s all;
}
.navbar-links li.navbar-dropdown .dropdown a {
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: 400;
}
.navbar-dropdown .dropdown a:hover {
  padding-left: 30px;
}
.navbar-links li a:hover {
  color: #fdf6f6;
}

.header {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 90vh;
  /* background-color: #f00; */
  background-image: url("http://lorempixel.com/1366/698/food/");
  background-size: cover;
}

.header-inner {
  text-align: center;
  color: #ff3f34;
  text-shadow: 0px 10px 10px rgba(0, 0, 0, .8);
}

.header-inner h1 {
  font-family: "Great Vibes", cursive;
  font-size: 130px;
}

.header-inner form input[type="search"] {
  position: relative;
  width: 500px;
  border: none;
  padding: 15px;
  border-radius: 27px;
  box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.3);
  z-index: 11;
}
.header-inner form input[type="search"]:focus {
  outline: none;
}

.header-inner form input[type="search"]:focus + div {
  z-index: 1;
  opacity: 1;
}

::placeholder {
  color: #666;
  font-weight: 400;
}
/***********************/
#logo img {
    display: block;
    height: 70%;
    max-width: 70%;
    max-height: 70%;
}

#logo img {
    max-height: 70%;
}
#logo img {
    -webkit-transition: height .4s ease, padding .4s ease, margin .4s ease, opacity .3s ease;
    transition: height .4s ease, padding .4s ease, margin .4s ease, opacity .3s ease;
}
a img {
    border: none;
}
img {
    max-width: 70%;
}
img, svg {
    vertical-align: middle;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
img {
    overflow-clip-margin: content-box;
    overflow: clip;
}
#logo a {
    color: #000;
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
}
{
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
}
#logo a.standard-logo {
    display: none;
}
#logo a.standard-logo {
    display: -ms-flexbox;
    display: flex;
}
.header-row {
    position: initial;
}
.header-row {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.stretched .full-header #header-wrap > .container {
    width: 100%;
    max-width: none;
    padding: 0 30px;
}
.container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px;
}

.container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
}

.container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
}

.container, .container-sm, .container-md {
    max-width: 720px;
}

.container, .container-sm {
    max-width: 540px;
}
</style>
{{-- <div class="container">
    <div class="header-row">
        <div id="logo">
            <a href="index.html" class="standard-logo" data-dark-logo="{{asset('images/jurselogo.png')}}"></a>
            <a href="index.html" class="retina-logo" data-dark-logo="images/jurselogo.png"><img src="images/jurselogo.png" alt="RSLab Logo"></a>
        </div>
    </div>

</div> --}}
<nav class="navbar">
    <div class="logo header-row"> <img src="{{asset('imagess/jurselogo_2.png')}}"
        ></div>
 <ul class="navbar-links">
      <li class="navbar-dropdown">
        <a href="{{route('index.index')}}">Home</a>
      </li>
      <li class="navbar-dropdown">
        <a href="{{route('Date.index')}}">Date</a>
      </li>
      <li class="navbar-dropdown">
        <a href="#">Participation</a>
        <div class="dropdown">
            <a href="{{route('program.index')}}">Program </a>
            <a href=" {{route('guidelines.index')}}">Guidelines </a>
            <a href="{{route('call.index')}}">Call for Papers </a>
            <a href="{{route('social.index')}}">Social Events </a>
          </div>
      </li>
      <li class="navbar-dropdown">
        <a href="#">Presentation</a>
        <div class="dropdown">
          <a href="{{route('keynotes.index')}}">Keynote Speakers </a>
          <a href="{{route('specialsessions.index')}}">Special Sessions </a>
        </div>
      </li>
      <li class="navbar-dropdown">
        <a href="{{route('Committees.index')}}">Committes</a>
      </li>
      <li class="navbar-dropdown">
        <a href="{{route('affichage.index')}}">Sponsors</a>
      </li>
      <li class="navbar-dropdown">
        <a href="#">Venue</a>
        <div class="dropdown">
            <a href="{{route('Heraklion.index')}}">Heraklion & Crete </a>
            <a href="{{route('conference.index')}}">Conference Venue </a>
            <a href="{{route('Hotel.index')}}">Hotels </a>
          </div>
      </li>
      <li class="navbar-dropdown">
        <a href="{{route('videoPhoto.index')}}">Videos &photos</a>
      </li>
      <li class="navbar-dropdown">
        <a href="{{route('contact.index')}}">Contact</a>
      </li>
    </ul>
  </nav>
  {{-- <header class="header">
    <div class="header-inner">


    </div>
  </header>
 --}}
