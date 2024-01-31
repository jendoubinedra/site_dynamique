<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}

.wrapper .sidebar ul li:hover a{
  color: #fff;
}

.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
.nested-list {
        display: none;
        background-color: #594f8d;
        padding: 10px;
        border-radius: 5px;
    }

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
/********************************/
.info {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
</style>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Dashbord</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Pages</a>
                <div class="nested-list">
                    <ul>
                        <li><a href="{{route('page')}}">Ajouter page</a></li>
                        <li><a href="#">liste pages 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="fas fa-home"></i>azedrftg</a>
                <div class="nested-list">
                    <ul>
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a>
                <div class="nested-list">
                    <ul>
                        <li><a href="#">Submenu Item 1</a></li>
                        <li><a href="#">Submenu Item 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
        </ul>

    </div>
    <div class="main_content">
        <div class="header"></div>
        <div class="info">
            <form action="#" method="post">
                @csrf
                @method('POST')
                <label for="firstname">Page Name:</label>
                <input type="text" id="name" name="name" required>
                <button type="submit">Ajouter pages</button>
            </form>

      </div>

    </div>
</div>

 <script>
    // Add JavaScript to toggle visibility of the submenu
    document.addEventListener("DOMContentLoaded", function () {
      var nestedLinks = document.querySelectorAll(".sidebar li a");

      nestedLinks.forEach(function(link) {
        link.addEventListener("click", function (event) {
          event.preventDefault();
          var nestedList = this.nextElementSibling;
          if (nestedList && nestedList.classList.contains("nested-list")) {
            nestedList.style.display = (nestedList.style.display === "none") ? "block" : "none";
          }
        });
      });
    });
  </script>

