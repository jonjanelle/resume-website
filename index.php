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
  <!-- Font awesome for circle and down arrows -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link rel="stylesheet" href="styles/styles.css">

  <title>Jon Janelle - Selected Projects</title>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" id="top">
  <nav class="navbar navbar-custom navbar-fixed-top" id="main-nav" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#top">
          <span class="glyphicon glyphicon-home"></span>
        </a>
      </div>

      <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-left">
          <li class="hidden"><a href="#top"></a></li>
          <li><a href="#top">Home</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#project">Projects</a></li>
          <li><a href="#bio">Bio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- /.container -->
  </nav>

<!--<a id="top"></a>-->
<div class="scroll-img bgimg-1" id="first-img">
  <div class="dark-strip">
    <h1 id="main-title" class="text-shadow-dark">Jon Janelle</h1>
    <p class="text-medium">Software Engineer and Educator</p>
    <p>jonjanelle1@gmail.com</p>
    <a href="#skills" class="btn btn-circle page-scroll">
      <i class="fa fa-angle-double-down animated"></i>
    </a>
  </div>
</div>

<!--Skills panel-->
<a id="skills"></a>
<div class="content-panel" id="skills-panel">
  <div class="section-title text-shadow-lightest">Skills</div>
  <p>I have experience with many programming languages and frameworks, and
    I'm always eager to learn more!</p>
    <br>
    <div class="row row-centered">
      <?php foreach($skills as $name=>$skill): ?>
        <div class="col-xs-3 col-sm-2 col-md-1 center-block">
          <div class="skill">
            <i class="<?=$skill['icon']?>"></i>
            <p><?=$name?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="row top-margin-lg">
      <div class="section-title text-shadow-lightest">Resume</div>
      <p>See my resume for education and work histories</p>
      <a href="downloads/Resume_Janelle.pdf"><span class="glyphicon glyphicon-list-alt"></span></a>
    </div>


  </div>
  <!-- End of skills panel -->

  <!--
  First divider image
-->
<div class="bgimg-2">
  <div class="img-label">Acadia National Park, ME</div>
</div>

<!--
Projects panel
-->
<a id="project"></a>
<div class="content-panel" id="project-panel">
  <div class="section-title text-shadow-lightest">Sample Projects</div>

  <div class="row ">
    <?php foreach($projects as $title=>$project): ?>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="proj-label"><?= $title ?></div>
        <div class="proj-title"><?= $project['title'] ?></div>
        <div class="project-box">
          <div class="slide-down-div">
            <div class="row">
              <div class="col col-md-12"><span class="green">Link:</span></div>
              <div class="col col-md-12">
                <a href="<?=$project['link']?>"> <?=$project['linkText']?></a>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-12"><span class="green">Github:</span></div>
              <div class="col col-md-12">
                <a href="<?=$project['github']?>"> Project Code</a>
              </div>
            </div>
            <div class="row">
              <div class="col col-md-12 green"><span class="green">Skills:</span></div>
              <div class="col col-md-12"><?= $project['skills'] ?></div>
            </div>
          </div>
          <img src="<?= $project['img'] ?>" alt="<?= $project['imgAlt'] ?>">
        </div>
      </div>
    <?php endforeach; ?>
  </div> <!-- End of project listing row -->

  <div class="top-margin-lg"></div>
  <div class="section-title text-shadow-lightest">Other Projects</div>
  <p>Check out my Github page for more projects!</p>
  <a id="github" href="https://github.com/jonjanelle">
    <i class="devicon-github-plain-wordmark"></i>
  </a>
  <div class="row top-margin-lg">
    <div class="section-title text-shadow-lightest">Competitive Coding</div>
    <p>I'm active in several competitive coding communities including
      <a href="https://www.hackerrank.com/jonjanelle1">HackerRank</a>,
      <a href="https://codefights.com/profile/figlet_newton">CodeFights</a>,
      and <a href="https://projecteuler.net">Project Euler</a>
    </p>
  </div>
</div>
<!-- End of project panel-->

<!--
Second divider image
-->
<div class="bgimg-3">
  <div class="img-label">Morro Bay, CA</div>
</div>
<a id="bio"></a>

<!--
Biography panel
-->
<div class=content-panel>
  <div class="section-title text-shadow-lightest">Bio</div>
  <div id="main-bio-panel">
    <div class="bio-panel" id="bio-p1">
      I've always been fascinated by what computer science and mathematics can enable us to create.
      <div class="top-margin-lg"></div>
      <p>press to proceed</p>
    </div>

    <div class="bio-panel" id="bio-p2">
      <div class="bio-page-num">2/4</div>
      As an undergraduate I had opportunities learn about algorithms, computer architechture,
      system administration, and a range of powerful mathematical techniques in pursuit of a computer engineering
      degree. On the side I worked as a C++ developer and Unix system administrator where I helped maintain networks, analyze recruitment data,
      and develop software to drive a robotic chess system that was used as a demonstration for touring prospective engineering students.
      <div class="top-margin-lg">
        After serving as a teaching assistant in an introductory RISC assembly language course, I
        discovered that guiding others to find excitment in science, technology, and mathematics is an immensely
        rewarding experience. After completing two years of my computer engineering program, I shifted my focuses to mathematics
        and secondary education so that I could seek a position as a high-school STEM teacher.
      </div>
      <p>press to proceed</p>
    </div>

    <div class="bio-panel" id="bio-p3">
      <div class="bio-page-num">3/4</div>
      While teaching I continued studing mathematics, primarily statistics and data science, which led me to spend
      substantial amounts of time analyzing data using R and Python languages. As part of my learning process, I completed
      an eight-course series in data science and statistics from John Hopkins University delivered via Coursera, which gave me a
      strong foundation in statistical techniques and R programming.
      <div class="top-margin-lg">
        I was interested to explore ways in which data science might be applied in the social sciences, so after two years as a teacher
        I enrolled in a graduate program at the University of Maine where I studied on techniques for conducting research in mathematics education.
        The degree track was flexible, and my path involved extensive graduate coursework in mathematical statistics, Bayesian analysis, differential
        equations, computational modeling (primarily using R), discrete mathematics, and experimental design techniques.
      </div>
      <p>press to proceed</p>
    </div>

    <div class="bio-panel" id="bio-p4">
      <div class="bio-page-num">4/4</div>
      I moved to Massachusetts with my wife, Hayley, after finishing my graduate degree, where I spent three more as a high school mathematics and computer science teacher.
      Teaching was challenging and rewarding work, but my desire to advance my mathematical and software development skills persisted. I starting taking graduate courses in
      mathematics and computer science through the Harvard University Extension School at night and during the summers, which culminated in the completion of graduate
      certificate programs in Computer Programming and Software Engineering. This coursework greatly strengthed my knowledge of data structures, algorithms, database systems,
      client and server side web application development, software testing, graph theory, and software design methodologies. It was a difficult decision, but I decided to leave
      education to follow my passion for software development.
      <div class="top-margin-lg">
        I now work as a software engineer for Nextgengolf where I utilize a Ruby-on-Rails, PostgeSQL, React, SASS, and ES6 stack to create
        software to support many different facets of the golf industry. My personal and professional goals now center around improve my command of
        techniques for data mining and analysis and machine learning, and I'm excited to keep learning more!
      </div>
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
<a id="contact"></a>
<div class="content-panel">
  <div id="conact-panel">
    <h2><span class="glyphicon glyphicon-phone-alt"></span> Get in touch!</h2>
    <div class="row row-centered">
      <a id="email" href="mailto:jonjanelle1@gmail.com"><img class="social-icon" src="images/email.svg" alt="jonjanelle1@gmail.com"></a>
      <a href="https://github.com/jonjanelle"><img class="social-icon" src="images/github.svg" alt="Github"></a>
      <a href="https://twitter.com/jon_janelle"><img class="social-icon" src="images/twitter.svg" alt="Twitter"></a>
      <a href="https://www.linkedin.com/in/jon-janelle-93174763"><img class="social-icon" src="images/linkedin.svg" alt="LinkedIn"></a>
    </div>

  </div>
</div>

<div id="credits">
  <div>Powered by: HTML5, CSS3, Bootstrap, JS, jQuery, PHP</div>
  Modified: Feb. 2018
</div>

<script src="scripts/scripts.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</body>
</html>
