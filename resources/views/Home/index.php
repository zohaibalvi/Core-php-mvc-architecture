<!DOCTYPE HTML>
<html>
<head>
    <title>About ME</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Core_PHP_MVC/assets/css/aboutme_02.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<style>
  html,
body {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

@import url("https://fonts.googleapis.com/css?family=Special+Elite");

html,
body {
  height: 100%;
  margin: 0;
}

.h2-color {
  color: white;
}

ul.actions li {
  display: inline-block;
  padding: 0 1em 0 0;
  vertical-align: middle;
}

.fa,
.fas {
  color: #e31b6d;
}

body {
  line-height: 1;
}

/* Basic */

@-ms-viewport {
  width: device-width;
}

body {
  -ms-overflow-style: scrollbar;
}

@media screen and (max-width: 480px) {
  html,
  body {
    min-width: 320px;
  }
}

body {
  background: #fff;
}
body.is-loading *,
body.is-loading *:before,
body.is-loading *:after {
  -moz-animation: none !important;
  -webkit-animation: none !important;
  -ms-animation: none !important;
  animation: none !important;
  -moz-transition: none !important;
  -webkit-transition: none !important;
  -ms-transition: none !important;
  transition: none !important;
}

.inner {
  margin: 0 auto;
  max-width: 65em;
}

@media screen and (max-width: 1280px) {
  .inner {
    max-width: 90%;
  }
}

@media screen and (max-width: 980px) {
  .inner {
    max-width: 70%;
  }
}

@media screen and (max-width: 736px) {
  .inner {
    max-width: 85%;
  }
}

/* Type */

body,
input {
  color: #767d85;
  font-family: "Open Sans", Arial, Helvetica, sans-serif;
  font-size: 13pt;
  font-weight: 300;
  line-height: 1.65;
}

em,
i {
  font-style: italic;
}

p {
  margin: 0 0 2em 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #727a82;
  font-weight: 700;
  line-height: 1.5;
  margin: 0 0 1em 0;
}

/* Image */

.image {
  border: 0;
  display: inline-block;
  position: relative;
}
.image.round img {
  border-radius: 100%;
}
.image.left,
.image.right {
  max-width: 40%;
}

.image.fit img {
  width: 100%;
}

/* Flex */

.flex {
  display: -ms-flexbox;
  -ms-flex-wrap: nowrap;
  -ms-flex-pack: justify;
  -ms-flex-align: stretch;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-flex-wrap: nowrap;
  -webkit-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -ms-justify-content: space-between;
  justify-content: space-between;
  -moz-align-items: stretch;
  -webkit-align-items: stretch;
  -ms-align-items: stretch;
  align-items: stretch;
}

.flex.flex-3 .flex-item {
  -ms-flex: 0 1 auto;
  -ms-flex-preferred-size: 30%;
  -moz-flex-basis: 30%;
  -webkit-flex-basis: 30%;
  -ms-flex-basis: 30%;
  flex-basis: 30%;
}

.flex.flex-3 .flex-item.left {
  text-align: right;
}

@media screen and (max-width: 980px) {
  .flex {
    -ms-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  .flex.flex-3 .flex-item {
    -ms-flex-preferred-size: 100%;
    -moz-flex-basis: 100%;
    -webkit-flex-basis: 100%;
    -ms-flex-basis: 100%;
    flex-basis: 100%;
  }

  .flex.flex-3 .flex-item.left {
    text-align: right;
  }
}

/* Wrapper */

.wrapper {
  padding: 6em 0 4em 0;
}

.wrapper h1,
.wrapper h2,
.wrapper h3 {
  color: #25a2c3;
}
@media screen and (max-width: 980px) {
  .wrapper {
    padding: 3em 0 1em 0;
  }
}
@media screen and (max-width: 480px) {
  .wrapper {
    padding: 2em 0 0.1em 0;
  }
}

/* Banner */

#site-landing {
  position: relative;
  height: 100%;
  width: 100%;
  background-color: rgb(30, 30, 30);
  margin-top: -21px;
}
.h1-tag {
  font-size: 32pt;
  line-height: 36pt;
  font-weight: 500;
  color: #fff;
}
.text-align {
  position: absolute;
  top: 38%;
  left: 33%;
}
.Button-align {
  position: absolute;
  top: 56%;
  left: 44%;
  z-index: 2;
  background: transparent;
  color: white;
  height: 8%;
  width: 10%;
  font-size: 17px;
  font-weight: 600;
  border-color: white;
}
.Button-align:hover {
  background: #25a2c3;
  border-color: black;
}
canvas {
  top: 15px;
  height: 850px;
}
#middle-div {
  padding: 6em 0 4em 0;
  text-align: center;
  color: black;
}

/* Main */

#one .inner {
  margin-bottom: 2em;
}

#one .flex-item {
  display: -ms-flexbox;
  -ms-flex-wrap: wrap;
  -ms-flex-pack: justify;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -ms-justify-content: space-between;
  justify-content: space-between;
  -moz-align-items: stretch;
  -webkit-align-items: stretch;
  -ms-align-items: stretch;
  align-items: stretch;
}

#one .flex-item.left div:first-child,
#one .flex-item.right div:first-child {
  padding-top: 1em;
}

#one .flex-item.left div:last-child,
#one .flex-item.right div:last-child {
  -moz-align-self: -moz-flex-end;
  -webkit-align-self: -webkit-flex-end;
  -ms-align-self: -ms-flex-end;
  align-self: flex-end;
}

#one .flex-item.left div p,
#one .flex-item.right div p {
  margin-bottom: 1em;
}

@media screen and (max-width: 1280px) {
  #one .flex-item.left div:first-child,
  #one .flex-item.right div:first-child {
    padding-top: 0;
  }

  #one .flex-item.left div p,
  #one .flex-item.right div p {
    margin-bottom: 0;
  }
}

@media screen and (max-width: 980px) {
  #one .flex-item {
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
  }

  #one .flex-item.left br,
  #one .flex-item.right br {
    display: none;
  }

  #one .flex-item.left div:first-child,
  #one .flex-item.right div:first-child {
    padding-top: 0;
  }

  #one .flex-item.left div:last-child,
  #one .flex-item.right div:last-child {
    -moz-align-self: center;
    -webkit-align-self: center;
    -ms-align-self: center;
    align-self: center;
  }

  #one .flex-item.left div p,
  #one .flex-item.right div p {
    margin-bottom: 2em;
  }
}

#one .image.fit {
  margin: 0;
}

@media screen and (max-width: 980px) {
  #one .image.fit {
    margin: 0 auto 2em auto;
    max-width: 60%;
  }
}

@media screen and (max-width: 480px) {
  #one .image.fit {
    margin: 0 auto 2em auto;
    max-width: 90%;
  }
}

/* Footer */

#footer {
  padding: 6em 0 4em 0;
  background: #25a2c3;
  text-align: center;
  color: #c8e7f0;
}

#footer h2 {
  color: #fff;
}

#footer .icon {
  color: #f6755e;
}

#footer a {
  color: #c8e7f0;
  text-decoration: none;
}

#footer ul li {
  padding: 0 2em;
}

#footer .copyright {
  display: inline-block;
  color: #a7d9e7;
  font-size: 0.75em;
  margin: 0 0 2em 0;
  padding: 0;
  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, 0.25);
  padding: 2em 10em;
}

@media screen and (max-width: 980px) {
  #footer {
    padding: 3em 0 1em 0;
  }

  #footer ul li {
    display: block;
    padding: 0.25em 0;
  }
}

@media screen and (max-width: 736px) {
  #footer .copyright {
    padding: 2em 5em;
  }
}
@media screen and (max-width: 480px) {
  #footer {
    padding: 2em 0 0.1em 0;
  }

  #footer ul li {
    font-size: 0.9em;
  }

  #footer ul li .icon:before {
    margin-left: -1em;
  }

  #footer .copyright {
    padding: 2em 0;
  }
}  
</style>
<body>

    <!-- Canvas Banner -->
    <div id="site-landing">
        <div class="content">
            <h1 class='h1-tag text-align'>Hello, I'm <span style="color: #e31b6d;">Syed Zohaib Ali Alvi</span>.<br>
                I'm a full-stack Web developer.
            </h1>
            <ul class="actions">
                <li>
                    <span class="scrolly">
                        <button class="btn btn-info Button-align"> View My Profile</button>
                    </span> 
                </li>
            </ul>
        </div>
    </div>

    <section id="middle-div" class="myDiv">
        <div class="inner-div">
            <h1 style="font-size: 58px;">About Me</h1>
            <ul class="actions">
                <li style=" padding: 0 3em 0 0; width: 15%;"><img style="height: 120px;width: 120px;" src="../assets/images/creativity.png">
                    <p>Creative</p>
                </li>
                <li style=" padding: 0 3em 0 0; width: 15%;"> <img style="height: 120px;width: 120px;" src="../assets/images/developer.png">
                    <p>Web Development</p>
                </li>
                <li style=" padding: 0 3em 0 0; width: 15%;"><img style="height: 120px;width: 120px;" src="../assets/images/github.png">
                    <p> Version Controlling</p>
                </li>
            </ul>
        </div>
        <div class="copyright" style=" border-top: 2px solid rgb(37 162 195);">
        </div>
    </section>

    <!--  -->
    <section id="one" class="wrapper ">
        <div class="inner flex flex-3">
            <div class="flex-item left">
                <div>
                    <h3>Skills</h3>
                    <p>PHP, Python, NodeJS, AWS, Hetzner, SQL , Postgress<br/> Codeigniter, Laravel, Web API’s/Rest API.</p>
                </div>
                <div>
                    <h3>Education</h3>
                    <p>Master in Global Software Development <b>| </b>HOCSHCHULE FULDA, Hessen<br/> Bachelor in Computer Science <b>|</b> KARACHI UNIVERSITY, Karachi, Pakistan</p>
                </div>
            </div>
            <div class="flex-item image fit round">
                <img src="../assets/images/middle-image.png" alt="" />
            </div>
            <div class="flex-item right">
                <div>
                    <h3>Experience</h3>
                    <p>3+ experience in software development and currently I am working at Creativ-Cult Gmbh as a Web Developer.<br /></p>
                </div>
                <div>
                    <h3>Hobbies</h3>
                    <p>Writing,Cooking,Sports and Exercise,Music and football.<br /> </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2>Get In Touch</h2>
            <ul class="actions">
                <li><i class="fas fa-phone-alt"></i> <a href="tel:+49 17634681465">+49 17634681465</a></li>
                <li> <i class="fas fa-envelope"></i><a href="zohaib.alvi22@gmail.com">zohaib.alvi22@gmail.com</a></li>
                <li><i class="fas fa-map-marker"></i> Germany </li>
            </ul>
        </div>
        <div class="copyright">
            &copy; Syed Zohaib Ali Alvi | Full Stack Developer .
        </div>
    </footer>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/aboutme_02.js"></script>
    <script src="../assets/js/polygonizr.min.js"></script>
</body>
</html>
