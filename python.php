<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>python</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/web_heading.css">
    <link rel="stylesheet" href="css/Style.css">
    <script type="javascript" src="css/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script type="css/javascript" src="script.js"></script>
</head>
<body>
<header>
        <a href="#" class="logo">Query</a>
        
        <nav>
            <div class="nav-bar">
                <a href="user_page.php">home</a>
                <a href="user_page.php">about</a>
                <!-- subjaects option  -->
                <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">subjects</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Statistics.php">Statistics</a></li>
                    <li><a class="dropdown-item" href="lineralgebra.php">linear Algebra</a></li>
                    <li><a class="dropdown-item" href="R_programming.php">R Programming</a></li>
                    <li><a class="dropdown-item" href="machine_learning.php">Machine Learning</a></li>
                    <li><a class="dropdown-item" href="Data_mining.php">Data Mining</a></li>
                    <li><a class="dropdown-item" href="Data_Visualisation.php">Data Visualization</a></li>
                    <li><a class="dropdown-item" href="python.php">Python</a></li>
                    <li><a class="dropdown-item" href="DataStucture.php">DSA</a></li>
                </ul>
                <!-- quizzes option -->
                <a href="quizes.php" target="_blank" role="button" aria-expanded="false">quizes</a>
                
                <!-- notes option -->
                <a  href="notes.php" target="_blank" role="button"  aria-expanded="false">Notes</a>

                <a href="logout.php">logout</a>
                <div class="animation start-home"></div>

            </div>
        </nav>

    </header><br><br><br><br><br>
    <div class="lecturs" style="padding: 30px;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gfDE2a7MKjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4> Python Tutorial For Beginners In Hindi (With Notes)</h4>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/61a7UkDO50s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>Python Programming Course in Hindi (Advanced) </h4>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E8fmDDtaHLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>Python Project: Tic Tac Toe Game in Python </h4>
    </div>
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="user_page.php">contest</a></li>
                        
                    </ul>
                </div>
                <div class="col">
                    <h4>Our services</h4>
                    <ul>
                        <!-- <li><a href="#">webdesign</a></li> -->
                        <li><a href="user_page.php">services</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h4>info</h4>
                    <ul>
                        <li><a href="about.php">OUR TEAM</a></li>
                        
                    </ul>
                </div>
                <div class="col">
                    <h4>Social media Handles</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        let menu = document.querySelector("#menu-icon");
        let navbar = document.querySelector(".navbar");

        menu.addEventListener("click", function () {
            navbar.classList.toggle("active");
        });

        window.onscroll = () => {
            navbar.classList.remove("active");
        };
    </script>
</body>
</html>