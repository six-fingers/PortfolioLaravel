@extends('base')

@section('content')
<!-- Home Section -->
<div class="col-md-12 spacer" id="home">
  <h1 class="center-middle">Salvatore Seidita</h1>
  <!-- Image -->
  <div class="col-md-3">
    <img class="my-image" src="../images/me.jpg" alt="image of me">
  </div>
  <!-- Intro Sentence -->
  <div class="col-md-9">
    <h4>
      I graduated in April 2017 in Information Technology, studying different subjects like programming languages, computer networks and databases.
      Throughout my previous experience I now have good knowledge of Java and C programming Languages, Networks(CCNA Certifications) and databases. I have worked with Cisco devices.
      I have undertaken practical work experience with Windows, Mac and Linux devices.
      I am able to work with teams of software developer and get hands-on experience of working with a variety of different technologies.
      I love working as part of a team to make sure that customers are happy and that deadlines are met.
    </h4>
  </div>
</div>

<!-- Development Skills -->
<div class="col-md-12 spacer" id="devSkills">
  <h1 class="col-md-12">Development Skills</h1>
  <!-- Skills -->
  <div class="col-md-12">

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="images/skills/angularjs.png" alt="Angular Js">
      <p>Extensive knowledge of this framework coming from 2 years work experience.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/bootstrap.png" alt="Bootstrap">
      <p>I used this to define the general feel and to have a common user friendly interface and layout.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/css.png" alt="Css">
      <p>Style - It's part of the essential Internet toolset.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/git.png" alt="Git">
      <p>Used GitHub very often to keep up to date our repos.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/html.png" alt="Html 5">
      <p>Structure - It's part of the essential Internet toolset.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/javascript.png" alt="Javascript">
      <p>Functionality - It's part of the essential Internet toolset.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/laravel.png" alt="Laravel">
      <p>I used this framework to create and manage the backend data and functional infrastructure.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/mysql.png" alt="MySql">
      <p>Practically full knowledge as I can build very complex queries with ease.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/php.png" alt="Php">
      <p>Two years experience gave me the confidence and knowledge to discover and use every kind of existing function or build custom ones.</p>
    </div>

    <div class="col-md-4 skill-div">
      <img class="skill-logo"src="/images/skills/restful.png" alt="RESTful API">
      <p>I can use existing resources or build my own APIs following the REST architectural pattern.</p>
    </div>

  </div>
</div>

<!-- Contact Me & Linked In -->
<div class="col-md-12 spacer footer" id="contactMe">
  <div class="col-md-12">
    <!-- FORM -->
    <!-- <form class="col-md-8 col-md-offset-2" action="/email">

      <h1>Get in Contact</h1>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name...">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email...">
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" placeholder="Type your message..." rows="5" cols="80"></textarea>
      </div>

      <button type="button" class="btn btn-primary" onclick="send()">Send</button>

    </form> -->

    <!-- NEW FORM -->
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name...">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email...">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" placeholder="Type your message..." rows="5" cols="80"></textarea>
    </div>

    <button type="button" class="btn btn-primary" onclick="post('/email/', {name: 'Johnny Bravo'});">Send "NEEDS TO BE FIXED"</button>

    <a href="/email">try to POST</a>

    <!-- LINKED IN STUFF -->
    <div class="spacer" id=linkedInBasicInfo></div>

  </div>
</div>
@endsection
