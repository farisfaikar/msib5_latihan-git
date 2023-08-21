<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>MSIB 5 - Latihan Git</title>
</head>

<body>
  <header> <!-- Header -->
    <div class="container">
      <nav> <!-- Navbar -->
        <img src="img/faris-logo.png" alt="Faris Logo" class="logo">
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
      <div class="header-text">
        <h1>I am <b>Faris Faikar</b></h1>
        <p>Computer Science Student</p>
      </div>
    </div>
  </header>
  <main> <!-- Main -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="about-col-1">
            <img src="img/faris-logo.png" alt="Faris Logo" height="auto" width="37.5rem">
          </div>
          <div class="about-col-2">
            <h1 class="sub-title">About Me</h1>
            <p>Esse eu est anim pariatur cillum reprehenderit amet laboris laboris duis tempor mollit.
              Reprehenderit non eiusmod deserunt incididunt exercitation. Magna adipisicing officia
              exercitation sunt mollit ullamco. Magna adipisicing enim nisi anim aliqua nisi anim ut
              proident qui. Tempor eiusmod pariatur adipisicing irure.</p>

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
    </div>
    <h2>Number Game</h2>
    <p>Number Game is a game where players solve a 4-digit secret number combination using clever deductions!</p>

    <h2>Bomber Plane Simulator</h2>
    <p>A game that simulates the trajectory of a bomb dropped by a plane!</p>
  </main>


  <footer> <!-- Footer -->
    <p>Copyright &copy; Faris Faikar. 2023</p>
    <ul>
      <li><a href="https://github.com/farisfaikar" target="_blank">GitHub</a></li>
      <li><a href="https://instagram.com/farisfaikar_r" target="_blank">Instagram</a></li>
      <li><a href="https://linkedin.com/in/farisfaikar" target="_blank">Linkedin</a></li>
      <li><a href="https://twitter.com/farisfaikar_r" target="_blank">Twitter</a></li>
      <li><a href="https://youtube.com/@farisfaikar_r" target="_blank">Youtube</a></li>
      <li><a href="https://facebook.com/farisfaikar.r" target="_blank">Facebook</a></li>
    </ul>
  </footer>
</body>

</html>

<?php
  echo "Hello World";
?>