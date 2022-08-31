<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>www.Query.com</title>
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

</head>

<body>
    <div id="preloder"></div>
    <header>
        <a href="#" class="logo">Query</a>
        <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
        <nav>
            <div class="nav-bar">
                <a href="#home">home</a>
                <a href="#about">about</a>
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

    </header>
    <!--  start home from this  -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>
                <article class="card" style="border:  #1e1c2a; background-color: #1e1c2a;">
                    <svg viewBox="40 10 960 250">
                        <symbol id="s-text">
                            <text text-anchor="middle" x="42%" y="80%">Query</text>
                        </symbol>

                        <g class="g-ants">
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                            <use xlink:href="#s-text" class="text-copy"></use>
                        </g>
                    </svg>
                </article>
            </h1>
            <h2>Question and Educational Stuff Realated to Ycce</h2>
            <h3 style=" padding:10px;">Hi,
                <?php echo $_SESSION['admin_name'] ?> Welcome
            </h3>
        </div>
        <div class="home-img">
            <img src="favicon.ico" alt="LOGO">
        </div>

    </section>
    <!-- start about us   -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/daata science.png" alt="" style="height: 200px; width: 400px;">
        </div>
        <div class="about-text">
            <span>About us</span>
            <h2>
                WE are currently working on DATA SCIENCE
                <hr>
            </h2>
            <p style="text-align: left;">
<pre>
    Our Project which started with simple question or in a better term a QUERY,
Can we provide a site which distributes study material related to the inquisitive 
LEARNERS for FREE?? Even though there are ample sites which were online and doing
really great, we wanted to add our little contribution and diversify the library
even more, with other perks such as small quizzes related to those topics, video
references etc. <br>
Being rookie developers and avid learners, we decided to work on this thing. We 
brainstormed on it and finally made this website with love, hard-work and with 
the thought of benefitting the people.



WITH LOVE , TEAM SYNTAX TERROR
                </pre>
                
            </p>
           

        </div>
    </section>

    <!-- courses ko start karte yaha se -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>courses</span>
            <h4>we provide are given below</h4>
        </div>
        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="images/ds.png" alt="DATA STRUCTURE">
                </div>
                <h2>DATA SCIENCE</h2>
                <h3>what is Data science ?</h3>

                <span>
                    A data scientist can include developing strategies for analyzing data, preparing data for analysis, exploring, analyzing, and visualizing data, building models with data using programming languages, such as Python and R, and deploying models into applications.
                </span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="images/math.png" alt="MATHEMATICS FOUNDATION">
                </div>
                <h2>MATHEMATICS FOUNDATION</h2>
                <h3>This is an important toipc in Data science</h3>

                <span>
                   Foundations of mathematics is the study of the philosophical and logical and/or algorithmic basis of mathematics, or, in a broader sense, the mathematical investigation of what underlies the philosophical theories concerning the nature of mathematics.
                </span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="images/py.png" alt="PYTHON">
                </div>
                <h2>PYTHON</h2>
                <!-- <h3>It is an language</h3> -->

                <span>
                    Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis. 
                </span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="images/ml.png" alt="MACHINE LEARNING">
                </div>
                <h2>MACHINE LEARNING</h2>
                <h3>It is also essential topic </h3>

                <span>
                    Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more accurate at predicting outcomes without being explicitly programmed to do so Machine learning algorithms use historical data as input to predict new output values.
                </span>
                <i class='bx bx-cart-alt'></i>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="images/quiz.png" alt="QUIZES">
                </div>
                <h2>PRACTICE QUIZES</h2>
                <h3>we are providing best quizes for your best practic</h3>

                <span>
                    Basicly is for your revision it is short test of knowledge that your aquire from hear.
                </span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </section>
    <!-- services  -->
    <section class="services" id="services">
        <div class="heading">
            <span>services</span>
            <h2>Join our groups for regular updates</h2>
        </div>
        <div class="service-continer">
            
            <div class="s-box">
            <a href="https://t.me/+ZP7gE_3vfRQ1NTkx" target="_blank"><img src="images/tele.png" alt=""></a>
                <h3>TELEGRAM</h3>
                <p>If any notes updated is made by our team then hear you get it</p>
            </div>
            <div class="s-box">
                <a href="https://www.youtube.com/channel/UCofpuDunZxkYphFc1M5zP_A" target="_blank"><img src="images/yt.png" alt=""></a>
                <h3>YOUTUBE</h3>
                <p> All the lecturs are provide on website you can see hear </p>
            </div>
            <div class="s-box">
            <a href="https://chat.whatsapp.com/Ii7BoDttkwJ4Ze8KLNYuFQ" target="_blank"><img src="images/wa.png" alt=""></a>
                <h3>whatsapp</h3>
                <p> If any query then contact on this also you can see our score and progress on this group </p>
            </div>

        </div>
    </section>


    <section class="cta">
        <h2>We make quality content</h2>
        <a href="#" class="btn">start learniing</a>
    </section>

    <!-- gooter -->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="#">contest</a></li>
                        
                    </ul>
                </div>
                <div class="col">
                    <h4>Our services</h4>
                    <ul>
                        <!-- <li><a href="#">webdesign</a></li> -->
                        <li><a href="#services">services</a></li>
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
                        <a href="https://www.youtube.com/channel/UCofpuDunZxkYphFc1M5zP_A" target="_blank"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    
                              
        <script>
            var loder = document.getElementById("preloder");
            window.addEventListener("load",function(){
                loder.style.display = "none";
            })
        </script>
</body>

</html>