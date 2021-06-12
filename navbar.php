<!-- navbar --> 
 <!DOCTYPE html>
    <html>
      <head>
        <style type="text/css">
            header
            {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                padding: 40px 100px;
                z-index: 10000;
                display: flex;
                justify-content: space-between;
                align-items: center;
                transition: 0.5s;
            }
            header.sticky
            {
                background: #fff;
                padding: 10px 100px ;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            }
            header .logo
            {
                color: #fff;
                font-weight:700;
                font-size: 2em;
                text-decoration: none;
            }
            header.sticky .logo
            {
                color: #111;
            }
            header .logo span
            {
                color: #ff0157;
            }
            header .navigation
            {
                position: relative;
                display: flex;
            }
            header .navigation li
            {
                list-style: none;
                margin-left: 30px;
            }
            header .navigation li a
            {
                text-decoration: none;
                color: #fff;
                font-weight: 600;
                font-size:25px;
            }
            header.sticky .navigation li a
            {
                color: #111;
            }
            header .navigation li a:hover{
                color: #ff0157;
            }

            #logo{
            width:6%;
            margin-left:0px;
            
            }
            @media (max-width: 991px)
            {
                header,
                header.sticky
                {
                    padding: 10px 20px;
                }
                header .navigation
                {
                    display: none;
                }
                header .navigation.active
                {

                    width: 100%;
                    height: calc(100% - 68px);
                    position: fixed;
                    top: 68px;
                    left: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    background: #fff;
                }
                header .navigation li{
                    margin-left: 0;
                }
                header .navigation li a{
                    
                    color: #111;
                    font-size: 1.6em;
                    
                }
                .menuToggle
                {
                    position: relative;
                    width: 40px;
                    height: 40px;
                    background: url(img/menu.png);
                    background-size: 30px;
                    background-repeat: no-repeat;
                    background-position: center;
                    cursor: pointer;
                }
                .menuToggle.active
                {
                    background: url(img/close.png);
                    background-size: 25px;
                    background-repeat: no-repeat;
                    background-position: center;
                }
                header.sticky .menuToggle
                {
                    filter: invert(1);
                }
            }

        </style>
    </head>
      <body>
      <header>
      <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" id="logo"></a>
       
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
            <li><a href="aboutme.php" onclick="toggleMenu();">About Me</a></li>
            <li><a href="contact.php" onclick="toggleMenu();">Contact</a></li>
           
        </ul>
    </header>
    <script type="text/javascript">
        window.addEventListener('scroll', function(){
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });

        function toggleMenu(){
                const menuToggle = document.querySelector('.menuToggle');
                const navigation = document.querySelector('.navigation')
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
   
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     </body>
     </html>