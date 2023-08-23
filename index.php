<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./img/faris-logo-rounded.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>MSIB 5 - Latihan Git</title>
</head>

<body>
  <header> <!-- Header -->
    <div class="container">
      <nav> <!-- Navbar -->
        <img src="./img/faris-logo.png" alt="Faris Logo" class="logo">
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="search"><i class="fa fa-search"></i></a></li>
        </ul>
      </nav>
      <div class="header-text">
        <h1>I am <b>Faris Faikar</b></h1>
        <p>Computer Science Student</p>
      </div>
    </div>
  </header>
  <main> <!-- Main -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="about-col-1">
            <img src="img/faris-logo.png" alt="Faris Logo" height="auto" width="37.5rem">
          </div>
          <div class="about-col-2">
            <h2 class="sub-title">About Me</h2>
            <p>I'm currently majoring in Computer Science, particularly in the Informatics Engineering study program.
              I'm interested in pursuing a career in the IT sector. As of now, I'm looking forward to becoming a
              software engineer.</p>
            <div class="tab-titles">
              <p class="tab-links active-link" onclick="openTab('skills')">Skills</p>
              <p class="tab-links" onclick="openTab('experience')">Experience</p>
              <p class="tab-links" onclick="openTab('education')">Education</p>
            </div>

            <!-- Skills -->
            <div class="tab-contents active-content" id="skills">
              <ul>
                <li><span>Python Pygame</span><br>Creating games and simulations using Python Pygame
                </li>
                <li><span>Laravel Web Development</span><br>Designing Web/App interfaces using the
                  Laravel Framework</li>
              </ul>
            </div>
            <!-- Experience -->
            <div class="tab-contents" id="experience">
              <ul>
                <li><span>Game/Simulation Development</span><br>Creating games and simulations using
                  Python Pygame</li>
                <li><span>Web Development</span><br>Experience designing websites using Laravel, Django,
                  and Node.js</li>
              </ul>
            </div>
            <!-- Education -->
            <div class="tab-contents" id="education">
              <ul>
                <li><span>Informatics Engineering - UNNES</span><br>I'm an informatics engineering
                  student in State University of Semarang</li>
                <li><span>RIPTEK Organization</span><br>Expert Staff at RIPTEK college organization</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio">
      <div class="container">
        <h2 class="sub-title">Portfolio</h2>
        <div class="card">
          <img src="./img/number-game.png" alt="Number Game">
          <a href="https://github.com/farisfaikar/number-game" target="_blank" class="link-button">Number Game →</a>
          <p>Number Game is a game where players solve a 4-digit secret number combination using clever deductions!</p>
        </div>
        <div class="card">
          <img src="./img/bomber-plane-simulator.png" alt="Bomber Plane Simulator">
          <a href="https://github.com/farisfaikar/bomber-plane-simulator" target="_blank" class="link-button">Bomber
            Plane Simulator →</a>
          <p>A game that simulates the trajectory of a bomb dropped by a plane!</p>
        </div>
      </div>
    </section>
  </main>

  <footer> <!-- Footer -->
    <div class="container">
      <ul class="socials">
        <li><a href="https://github.com/farisfaikar" target="_blank"><i class="fa-brands fa-github"></i></a></li>
        <li><a href="https://instagram.com/farisfaikar_r" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li><a href="https://linkedin.com/in/farisfaikar" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
        <li><a href="https://twitter.com/farisfaikar_r" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="https://youtube.com/@farisfaikar_r" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="https://facebook.com/farisfaikar.r" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
      </ul>
      <p>Copyright <i class="fa fa-copyright"></i> Faris Faikar. 2023</p>
    </div>
  </footer>
</body>

<script src="script.js"></script>

</html>