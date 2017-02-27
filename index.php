<!doctype html>
<html>
  <head>
    <?php require('dataRead.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Dev icons -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <!-- Scripts -->
    <script src="scripts/project-animations.js"></script>
    <script src="scripts/scripts.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/animation-styles.css">
    <!--jQuery -->
    <title>Jon Janelle</title>
  </head>
  <body>
    <!--
      Top navigation bar
    -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="main-nav">
      <div class="navbar-header">
        <a class="navbar-brand" href="#top-anchor">Home</a>
        <a class="navbar-brand" href="#skills-anchor">Skills</a>
        <a class="navbar-brand" href="#project-anchor">Projects</a>
        <a class="navbar-brand" href="#bio-anchor">Bio</a>
        <a class="navbar-brand" href="#contact-anchor">Contact</a>
      </div>
    </nav>

    <!--
      Title panel
    -->
    <a id="top-anchor"></a>
    <div class="scroll-img bgimg-1">
      <div class="dark-strip">
        <h1 id="main-title">Jon Janelle</h1>
        <p>Educator and developer in Medford, MA</p>
        <p>jonjanelle1@gmail.com</p>
      </div>
    </div>

    <!--
      Skills panel
    -->
    <a id="skills-anchor"></a>
    <div class="content-panel" id="skills-panel">
      <h3>Skills</h3>
      <p>I have experience with many programming languages and frameworks, and
      I'm always eager to learn more!</p>
      <div class="row row-centered">
        <?php foreach($skills as $name=>$skill): ?>
          <div class="col-xs-4 col-sm-3 col-md-2 center-block">
            <i class="<?=$skill['icon']?>"></i>
            <p><?=$name?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="row top-margin-lg">
        <h3>Resume</h3>
        <p>See my resume for education and work histories</p>
        <a href="Resume_Janelle.pdf"><span class="glyphicon glyphicon-list-alt"></span></a>
      </div>
    </div>

    <!--
      First divider image
    -->
    <div class="bgimg-2">
      <div class="img-label">Acadia National Park, ME</div>
    </div>

    <!--
      Projects panel
    -->
    <a id="project-anchor"></a>
    <div class="content-panel" id="project-panel">
      <h3>Sample Web Projects</h3>

      <div class="row ">
        <!--Output projects using json data-->
        <?php foreach($projects as $title=>$project): ?>
          <div class="col-xs-12 col-sm-6 col-md-4 ">
            <div class="proj-label"><?= $title ?></div>
            <div class="proj-title"><?= $project['title'] ?></div>
            <div class="project-box">
              <div class="slide-down-div">
                <div class="row">
                  <div class="justify-r">Link:</div>
                  <div class="justify-l">
                    <a href="<?=$project['link']?>"> <?=$project['linkText']?></a>
                  </div>
                </div>
                <div class="row">
                  <div class="justify-r">Github:</div>
                  <div class="justify-l">
                    <a href="<?=$project['github']?>"> Project Code</a>
                  </div>
                </div>
                <div class="row">
                  <div class="justify-r">Skills: </div>
                  <div class="justify-l"><?=$project['skills']?></div>
                </div>
              </div>
              <img src="<?=$project['img']?>" alt="<?=$project['imgAlt']?>">
            </div>
          </div>
        <?php endforeach; ?>
      </div> <!-- End of project listing row -->

      <div class="top-margin-lg"></div>
      <h3>Other Projects</h3>
      <p>Check out my Github page for more projects!</p>
      <a id="github" href="https://github.com/jonjanelle">
        <i class="devicon-github-plain-wordmark"></i>
      </a>

    </div>

    <!--
      Second divider image
    -->
    <div class="bgimg-3">
      <div class="img-label">Morro Bay, CA</div>
    </div>
    <a id="bio-anchor"></a>

    <!--
      Biography panel
    -->
    <div class=content-panel>
      <h3>Bio</h3>
      <div id="main-bio-panel">
        <div class="bio-panel" id="bio-p1">
          I've always been fascinated by what computer science and mathematics can enable us to create.
          <div class="top-margin-lg"></div>
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p2">
          I began learning about software development in 2001 by taking an independent study course in
          C++ programming with the guidance of my high school's IT specialist. After three years (and
          many, many bad versions of classic arcade games) I was excited to take my skills to the next
          level at the University of Maine.
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p3">
          As an undergraduate I had opportunities learn about algorithms, computer architechture,
          system administration, and a range of powerful mathematical techniques. On the side I worked
          as a UNIX system administrator for the engineering school where I helped maintain networks and
          analyze recruitment data. I also helped prepare tech demonstrations to show touring prospective
          students, the most fun of which was writing software to controll a robotic chess system.
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p4">
          After working as a teaching assistant in an introductory RISC assembly language course, I
          discovered that guiding others to find excitment through technology can be a lot of fun. I'd considered
          the idea of teaching before after being a Big Brothers Big Sisters mentor and tutor, but now I decided to
          pursue it more seriously. I completed my undergraduate degree in mathematics education and began my career
          teaching AP Calculus AB and AP Calculus BC in central Maine for two years.
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p5">
          While teaching I developed an interest in mathematical modeling and data science, so I started spending
          substantial amounts of time exploring the R and Python languages. I began by completing eight courses in
          data science and statistics courses from John Hopkins University delivered via Coursera. This gave me a
          strong foundation in statistical techniques and R programming.
          <div class="top-margin-lg">
            I also taught myself Java to expand the <a href="http://uweschmidt.org/projects/wiimote-whiteboard">WiiMote Whiteboard</a>
            program so that its capabilities more closely resembled those of commercial interactive whiteboards. After constructing a few
            infrared pens from marker cases and polishing software utilties for screen annotation, task switching, and assorted document
            manipulations, several other teachers adopted the platform for their own classrooms.
          </div>
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p6">
          After two years I wanted to take time to hone my data science skills, so I returned to graduate school
          at the University of Maine where I studied on techniques for conducting social science research. The degree
          track was flexible, and I chose to complete it by taking extensive graduate coursework in mathematical
          statistics, Bayesian analysis, differential equations, computational modeling (primarily using R),
          and research design techniques.
          <p>press to proceed</p>
        </div>

        <div class="bio-panel" id="bio-p7">
          After finishing graduate school, I moved to Massachusetts with my wife, Hayley. I am currently working
          as a high school mathematics and computer science teacher, where I teach AP Computer Science A
          in Java, game development using Python, and Calculus I. Teaching continues to be exciting and challenging work,
          but my love of creating with technology continues to push me to develop my mathematical and technological
          abilities through independent projects and graduate coursework. I have been taking graduate courses in mathematics
          and computer science through the Harvard University Extension School for the past three years. This has given me
          the opportunity to learn more about both client and server side web development, discrete mathematics, data structures
          and algorithms, and software development methodologies. <p>I'm excited to keep learning more!</p>
        </div>
      </div>
    </div>

    <!--
      Last image divider. Show first image again
    -->
    <div class="bgimg-1" id="last-img">
      <div class="img-label">Santikhiri, Thailand</div>
    </div>

    <!--
      Contact me panel
    -->
    <a id="contact-anchor"></a>
    <div class="content-panel">
      <div id="conact-panel">
        <h2><span class="glyphicon glyphicon-phone-alt"></span> Get in touch!</h2>
        <div class="row row-centered">
          <a id="email" href="mailto:jonjanelle1@gmail.com"><img class="social-icon" src="email.svg" alt="jonjanelle1@gmail.com"></a>
          <a href="https://github.com/jonjanelle"><img class="social-icon" src="github.svg" alt="Github"></a>
          <a href="https://twitter.com/jon_janelle"><img class="social-icon" src="twitter.svg" alt="Twitter"></a>
          <a href="https://www.linkedin.com/in/jon-janelle-93174763"><img class="social-icon" src="linkedin.svg" alt="LinkedIn"></a>
        </div>

      </div>
    </div>

    <div id="credits">
      <div>Powered by: HTML5, CSS3, Bootstrap, JS, jQuery, PHP</div>
      Created by Jon Janelle, Feb. 2017
    </div>
  </body>
</html>