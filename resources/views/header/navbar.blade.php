<style>
    *, *::before, *::after{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body{
        color:#222;
        font-family: system-ui, sans-serif;
        padding-bottom: 50px;
    }

    .container{
        max-width: 1200px;
        margin: 0 auto;
    }

    .nav{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #222;
        transition: all 0.3s ease-in-out;
    }

    .nav .container{
        display: flex;
        justify-content: space-between;
        padding: 20px 0;
        transition: all 0.3s ease-in-out;
    }

    .nav ul {
        display: flex;
        align-items: center;
        list-style: none;
        justify-content: center;
    }

    .nav a{
        text-decoration: none;
        color: #fff;
        padding: 7px 15px;
        transition: all 0.3s ease-in-out;
    }

    .nav.active{
        background-color: #fff;
        box-shadow: 0  2px 10px rgba(0, 0, 0, 0.3);
    }

    .nav.active a{
        color: #222;
    }

    .nav.active .container{
        padding: 10px 0;
    }

    .nav a.current, .nav a:hover{
        color:#D80032;
        font-weight: bold;
    }

    .hero{
        background-image: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom-center;
        height:100vh;
        color:#fff;
        display: flex;
        align-items:center;
        justify-content: center;
        position: relative;
        margin-bottom: 20px;
        z-index: -2;
    }

    .hero::before{
        content:'';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    .hero h1{
        font-size: 46px;
        margin: -20px 0 20px;
    }

    .hero p{
        font-size: 20px;
        letter-spacing: 1px;
    }

    .content h2, .content h3{
        font-size: 150%;
        margin: 20px 0;
    }

    .content p {
        color: #555;
        line-height: 1.6;
        letter-spacing: 1px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="nav">
    <div class="container">
        <h1 class="logo"><a href="#">My website</a></h1>
        <ul>
            <li><a href="#current">Home</a></li>
            <li><a href="date.php">Dates</a></li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> --}}
                </div>
            </li>
            <li><a href="#">Presentation</a></li>
            <li><a href="#">Committees</a></li>
            <li><a href="#">Sponsors</a></li>
            <li><a href="#">Venue</a></li>
            <li><a href="#">Videos & Photos</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>
{{-- <div class="hero">
    <div class="container">
        <h1>Welcome to our website</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repudiandae.</p>
    </div>
</div> --}}

<script>
    const nav = document.querySelector('.nav');

    window.addEventListener('scroll', fixNav);

    function fixNav(){
        if(window.scrollY > nav.offsetHeight + 150){
            nav.classList.add('active');
        }else{
            nav.classList.remove('active');
        }
    }
</script>
