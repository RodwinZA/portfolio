<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rodwin John Pieterse, Web Developer, Web Designer, HTML CSS JavaScript">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d8413b0d5e.js" crossorigin="anonymous"></script>
    <title>Portfolio | Rodwin John</title>
</head>
<body>
    <main>
        <nav class="navbar">
            <div class="brand-title">Rodwin John</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
        </nav>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="hero-text">
                <p>Hello</p>
                <h1>I'm Rodwin</h1>
                <h2>A Frontend Web Developer From Cape Town</h2>
                <button class="hire-me call-to-action"><a href="#contact">Hire Me</a></button>
                <button class="view-work call-to-action"><a href="#portfolio">View My Work</a></button>
            </div>
            <div class="hero-img">
                <img src="images/undraw_web_developer.svg" alt="web developer">
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="about">
            <div class="about-text">
                <h3>About Me</h3>
                <h2>I love making things for the web.</h2>
                <p>My time is split between researching what works best on the web and making beautiful layouts with HTML, CSS and JavaScript.</p>
                <p>I also occasionally yell at my TV when Manchester City plays.</p>
            </div>
            <div class="about-img">
                <img src="images/undraw_static_website.svg" alt="html css">
            </div>
        </section>

        <!-- Portfolio Section -->
        <section class="portfolio" id="portfolio">
            <h2>Portfolio</h2>
            <p>View some of the things I have built using Frontend Web technologies.</p>
            <div class="portfolio-items portfolio-item-one">
                <h3>Fashion Store Landing Page</h3>
                <p>Made with HTML5, CSS & JavaScript</p>
                <img src="images/fashion-house.png" alt="" class="portfolio-demo portfolio-demo-one">
                <div class="demo-links demo-one-links">
                    <i class="fab fa-github" title="View Code"><a href="https://github.com/RodwinZA/fashion-house-landing-page" target="_blank"></a></i>
                    <i class="fab fa-chrome" title="View Site Live"><a href="https://rodwinza.github.io/fashion-house-landing-page/" target="_blank"></a></i>
                </div>
            </div>
        </section>

        <!-- Work Tools -->
        <section class="my-skills">
            <div class="skillset">
                <h2>My current skill set includes:</h2>
                    <div>
                        <img src="images/html5.svg" alt="HTML5" title="HTML5">
                        <img src="images/css3.svg" alt="CSS3" title="CSS3">
                        <img src="images/javascript.svg" alt="JavaScript" title="JavaScript">    
                    </div>
            </div>
            <div class="future-skillset">
                <h2>I am currently learning:</h2>
                <img src="images/react.svg" alt="ReactJS" title="ReactJS">
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contact">
            <div class="contact-text">
                <h2>Contact</h2>
                <p>Want to work with me? Have a question? Reach me by completing the form below.</p>
                <form action="form-control.php" class="contact-form" id="form" method="post">
                    <div class="form-control">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <small>Error Message</small>
                    </div>
                    <div class="form-control">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        <small>Error Message</small>
                    </div>
                    <input type="submit" name="submit" value="Send Message">
                    <!-- <button type="submit" name="submit">Send Message</button> -->
                </form>    
            </div>
            <div class="contact-img">
                <img src="images/undraw_forms.svg" alt="contact forms">
            </div>
        </section>
    </main>
    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2020 Rodwin Pieterse</p>
    </footer>

    <script src="js/nav-bar.js"></script>
    <script src="js/contact-form.js"></script>
</body>
</html>