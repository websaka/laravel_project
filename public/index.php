
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="assets/images/newL." type="image/x-icon" />

    <title>Portfolio | Saka Pradipta</title>
  </head>
  <body>
    <div class="container">
      <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
          <img src="assets/images/SP.png" alt="Logo" />
        </div>
        <div class="nav-menu" id="myNavMenu">
          <ul class="nav_menu_list">
            <li class="nav_list">
              <a href="#home" class="nav-link active-link">Home</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#about" class="nav-link">About</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#projects" class="nav-link">Projects</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#contact" class="nav-link">Contact</a>
              <div class="circle"></div>
            </li>
          </ul>
        </div>
        <div class="nav-button">
          <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
        </div>
        <div class="nav-menu-btn">
          <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>

      <!-- -------------- MAIN ---------------- -->
      <main class="wrapper">
        <!-- -------------- FEATURED BOX ---------------- -->
        <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
              <span>Saka Pradipta</span>
            </div>
            <div class="featured-name">
              <p>I'm <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
              <p>Experienced frontend developer with a passion for creating visually stunning and user-friendly websites.</p>
            </div>
            <div class="featured-text-btn">
              <button class="btn blue-btn">Hire Me</button>
              <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">
              <div class="icon"> <a href="https://www.instagram.com/s_johnsmith_" target="_blank" rel="IG"><i class="uil uil-instagram"></i></a></div>
              <div class="icon">    <a href="https://www.linkedin.com/in/ketut-saka-pradipta" target="_blank" rel="LinkedIn"><i class="uil uil-linkedin-alt"></i></a></div>
              <div class="icon"><i class="uil uil-dribbble"></i></div>
              <div class="icon"><i class="uil uil-github-alt"></i></div>
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
              <img src="assets/images/saka.jpg" alt="avatar" />
            </div>
          </div>
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
              <i class="uil uil-mouse-alt"></i>
              <p>Scroll Down</p>
            </a>
          </div>
        </section>
        <!-- -------------- ABOUT BOX ---------------- -->
        <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="about-info">
                <h3>My introduction</h3>
                <p>
                  I am well-versed in HTML, CSS and JavaScript , and other cutting edge frameworks and libraries,which allows me to implement interactive features. Additionally, I have experirence working with content management systems
                  (CMS) like WordPress.
                </p>
                <div class="about-btn">
                  <button class="btn">Download CV <i class="uil uil-import"></i></button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="skills-box">
                <div class="skills-header">
                  <h3>Frontend</h3>
                </div>
                <div class="skills-list">
                  <span>HTML</span>
                  <span>CSS</span>
                  <span>Bootstrap</span>
                  <span>JavaScript</span>
                  <span>Vue</span>
                  <span>React</span>
                  <span>Angular</span>
                </div>
              </div>
              <div class="skills-box">
                <div class="skills-header">
                  <h3>Backend</h3>
                </div>
                <div class="skills-list">
                  <span>PHP</span>
                  <span>JAVA</span>
                  <span>Python</span>
                  <span>C++</span>
                </div>
              </div>
              <div class="skills-box">
                <div class="skills-header">
                  <h3>Database</h3>
                </div>
                <div class="skills-list">
                  <span>MySQL</span>
                  <span>PostgreSQL</span>
                  <span>MongoDB</span>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- -------------- PROJECT BOX ---------------- -->

        <section class="section" id="projects">
          <div class="top-header">
            <h1>Projects</h1>
          </div>
          <div class="project-container">
         
            <div class="project-box"><i class="uil uil-briefcase-alt"></i>
              
              <h3>Completed</h3>
              <label>15+ Finished Projects</label>
            </div>
            <div class="project-box">
              <i class="uil uil-users-alt"></i>
              <h3>Clients</h3>
              <label>25+ Happy Clients</label>
            </div>
            <div class="project-box">
              <i class="uil uil-award"></i>
              <h3>Experience</h3>
              <label>7+ Years in the field</label>
            </div>
          </div>
        </section>

        <!-- -------------- CONTACT BOX ---------------- -->

        <section class="section" id="contact">
          <div class="top-header">
            <h1>Get in touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
          </div>
          <div class="row">
            <div class="col">
              <div class="contact-info">
                <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                <p><i class="uil uil-envelope"></i> Email: saka</p>
                <p><i class="uil uil-phone"></i> Tel: +250 708 770 000</p>
              </div>
            </div>
            <div class="col">
              <div class="form-control">
                <div class="form-inputs">
                  <input type="text" class="input-field" placeholder="Name" />
                  <input type="text" class="input-field" placeholder="Email" />
                </div>
                <div class="text-area">
                  <textarea placeholder="Message"></textarea>
                </div>
                <div class="form-button">
                  <button class="btn">Send <i class="uil uil-message"></i></button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <!-- --------------- FOOTER --------------- -->
      <footer>
        <div class="top-footer">
          <p>Saka Pradipta</p>
        </div>
        <div class="middle-footer">
          <ul class="footer-menu">
            <li class="footer_menu_list">
              <a href="#home">Home</a>
            </li>
            <li class="footer_menu_list">
              <a href="#about">About</a>
            </li>
            <li class="footer_menu_list">
              <a href="#projects">Projects</a>
            </li>
            <li class="footer_menu_list">
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <div class="footer-social-icons">
        <div class="icon">
    <a href="https://www.instagram.com/s_johnsmith_" target="_blank" rel="IG">
        <i class="uil uil-instagram"></i>
    </a>
</div>
<div class="icon">
    <a href="https://www.linkedin.com/in/ketut-saka-pradipta" target="_blank" rel="LinkedIn">
        <i class="uil uil-linkedin-alt"></i>
    </a>
</div>
<div class="icon">
    <a href="https://dribbble.com/username" target="_blank" rel="Dribbble">
        <i class="uil uil-dribbble"></i>
    </a>
</div>
<div class="icon">
    <a href="https://github.com/username" target="_blank" rel="GitHub">
        <i class="uil uil-github-alt"></i>
    </a>
</div>

        </div>
        <div class="bottom-footer">
          <p>Copyright &copy; <a href="#home" style="text-decoration: none">Saka Pradipta</a> - All rights reserved</p>
        </div>
      </footer>
    </div>

    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

