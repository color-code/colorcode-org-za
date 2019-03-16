<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="tarcode">
    <title>ColorCode</title>
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/cc.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script>
       $(document).ready(function() {
         $(".button-collapse").sideNav({
           closeOnClick: true,
           menuWidth: 100
         });

         $("#overlay").click(() => {
           document.getElementById('overlay').style.pointerEvents = 'none'
         })
       })
    </script>
    <style>
      body {
        font-family: 'Josefin Sans', sans-serif;
        background-color: #FAFAFA;
      }
      .xlText {
        font-size: 80px;
      }
      .actionBtn {
        vertical-align: middle;
        font-size: 20px;
        margin-top: 10px;
      }
      #logo {
        font-weight: bold;
      }
      #message {
        font-size: 27px;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: 'Oswald', sans-serif;
      }
      #particles-js {
        position: absolute;
        z-index: 1;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
      }

      .fade-enter {
        opacity: 0;
        z-index: 1;
      }

      .fade-enter.fade-enter-active {
        opacity: 1;
        transition: opacity 250ms ease-in;
      }

      #body {
          margin: 0;
          padding: 0;
      }

      main {
          min-height: calc(100vh - 370px);
      }

      nav {
          height: 64px;
      }


      .logo {
          display: block;
          height: 56px;
          margin: 4px 4px;
          z-index: 1001;
      }


      .tech-logo-container {
          height: 175px;
          position: relative;

      }

      .tech-logo {
          height: 70%;
      }

      .main {
          background-size: cover;
          margin-top: 0;
          height: calc(100vh - 55px);
          padding-top: calc(20%);
          background-color: #fafafa;
          background-image: url("<?php echo get_bloginfo('template_directory'); ?>/img/bg.jpg");
          overflow: hidden;
      }

      .main-header {
          font-size: 7em;
          margin: 0;
      }

      .main-subheader {
          font-size: 2em;
          color: #FAFAFA;
      }

      .session-info {
        font-size: larger;
      }

      .home-img {
          width: 200px;
          padding-bottom: 20px;
          position: relative;
      }

      .overlay {
        background:transparent;
        position:relative;
        width:100%;
        height:450px; /* your iframe height */
        top:480px; /* your iframe height */
        margin-top:-500px; /* your iframe height */
        z-index: 1000;
      }

      .team-text {
      font-size: 20px;
      line-height: 24px;

      }
      footer {
          padding-bottom: 0px;
      }

      iframe {
        border: 0;
        width: 100%;
        display: inline-block;
        position: relative;
      }

    </style>
  </head>
  <body>
    <header class="navbar-fixed">
      <nav class="indigo darken-4">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center">
            <img class='logo' src='./img/cc.svg' />
          </a>
          <a href="#" data-activates="burger" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="white-text" href="#about">
              About
            </a></li>
            <li><a class="white-text" href="#work">
              Work
            </a></li>
          </ul>
          <ul class="side-nav" id="burger">
            <li><a class="grey-text text-darken-4" href="#about">
              About
            </a></li>
            <li><a class="grey-text text-darken-4" href="#work">
              Work
            </a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div id="particles-js"></div>
      <div id="home">
        <div class='main'>
          <div class="container center">
            <h1 class='main-header white-text'>COLOR CODE</h1>
            <br/>
            <p class='main-subheader'>
              Learn to code from a community of people who are passionate about code and teaching!
            </p>
          </div>
        </div>
        <div id="about" class="row center">
          <br/>
          <br/>
          <div class="container">
            <h3>What is ColorCode?</h3>
            <p>
              ColorCode is a place for anyone to learn how to code. We're not prescriptive about what people should learn, but are more
              keen on hearing about what problems people want to solve or what they want to do, and then set them on the right
              path to achieving those goals. We also want to encourage those who are under-represented in tech (i.e. women, People
              of Colour , LGBTQ etc) to participate and feel empowered.
            </p>
          </div>
        </div>
        <div class="row center">
          <div class="col s12 m4">
            <div class="container">
              <h5>Why ColorCode?</h5>
              <p>Community and consistency is important when learning to code. We provide a safe, consistent space in which people
                can learn how to solve problems with code, build websites or think about how tech can help their small business.
              </p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="container">
              <h5>When is ColorCode?</h5>
              <p>
                We meet every second Saturday, from about 9h30 to 13h00. See our
                <a href="https://twitter.com/ColorCodeCT">Twitter Feed</a> for dates and reminders.
              </p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="container">
              <h5>Who is ColorCode for?</h5>
              <p>Anyone, no matter your skill level, is welome at ColorCode. Tell us about what you want to do and we can assist in
                whatever way we can.</p>
            </div>
          </div>
        </div>
        <div class="row center">
          <div class="col s12 m4">
            <div class="container">
              <h5>How much is ColorCode?</h5>
              <p>It's free!</p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="container">
              <h5>What do you need for ColorCode?</h5>
              <p>
                Your own laptop.
              </p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="container">
              <h5>Where is ColorCode?</h5>
              <p>ColorCode is based in Cape Town. We usually meet at
                <a href="http://greenpointcoworking.co.za">Greenpoint Coworking</a>, but the venue may change from time to time</p>
            </div>
          </div>
        </div>
        <div class='row center'>
          <h5>Upcoming Workshops</h5>
          <p class="session-info">16-March</p>
          <p class="session-info">30-March</p>
          <p class="session-info">13-April</p>
          <p class="session-info">27-April</p>
          <p>Contact us below via email or Twitter to let us know.</p>
        </div>

        <div class='row center'>
          <h3>Some of the team...</h3>
          <br />
          <div class='col s6 m3'>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/emma.png" class='circle responsive-img' />
            <br/>
            <b class="team-text orange-text text-darken-2">Emma</b>
            <br/>
            <i>Uber5</i>
            <br/>
            <br/>
          </div>
          <div class='col s6 m3'>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/nate.png" class='circle responsive-img' />
            <br/>
            <b class="team-text orange-text text-darken-2">Nathan</b>
            <br/>
            <i>Praekelt</i>
            <br/>
            <br/>
          </div>
          <div class='col s6 m3'>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/tar.png" class='circle responsive-img' />
            <br/>
            <b class="team-text orange-text text-darken-2">Taariq</b>
            <br/>
            <i>TARCODE!</i>
            <br/>
            <br/>
          </div>
          <div class='col s6 m3'>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/nurha.png" class='circle responsive-img' />
            <br/>
            <b class="team-text orange-text text-darken-2">Nurha</b>
            <br/>
            <i>Direct Axis</i>
            <br/>
            <br/>
          </div>
        </div>

        <div id="overlay" class="overlay">
        </div>
        <iframe width="600" height="450" scrolling="no" frameBorder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.070347793704!2d18.41540931521132!3d-33.91358898064382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc675cf65a6981%3A0xe93cabfa81eda535!2sGreenpoint+Coworking!5e0!3m2!1sen!2sza!4v1503326942057"
          allowFullScreen>
        </iframe>
      </div>
    </main>
    <footer class="page-footer indigo darken-3">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Colorcode</h5>
            <p class="grey-text text-lighten-4">A consistent community for learning to code in Cape Town</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links/Contact Us</h5>
            <ul>
              <li>
                <a href="https://twitter.com/ColorCodeCT">Twitter</a>
              </li>
            </ul>
            <ul>
            </ul>
            <ul>
              <li>
                <a href="mailto:contact@colorcode.org.za">Email</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/particles.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
  </body>
</html>
