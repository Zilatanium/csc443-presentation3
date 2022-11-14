<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="author" content="Joseph Dlgado" />
  <!-- HTML slidy was developed by Dave Raggett  -->
  <title>SCSU CSC 443: Fall 2022</title>

  <!--  external Cascading Style Sheets for styling all slides -->
  <link rel="stylesheet" type="text/css" media="screen, projection, print" href="scripts/slidy.css" /> <!-- http://www.w3.org/Talks/Tools/Slidy2/styles/slidy.css -->
  <link rel="stylesheet" type="text/css" href="scripts/www-presentation.css"/>
  <link rel="stylesheet" type="text/css" href="scripts/image-transition.css"/>

  <!--  external JavaScript functions for slideshow behavior (slidy) and simplified JavaScript library (jQuery)
        for a variety of uses ("write less. do more."; see jquery.com )-->
  <script src="scripts/slidy.js" charset="utf-8" type="text/javascript"></script> <!-- http://www.w3.org/Talks/Tools/Slidy2/scripts/slidy.js-->
  <script src="scripts/jquery-3.3.1.min.js" charset="utf-8" type="text/javascript"></script> <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
  <script src="scripts/www-presentation.js" charset="utf-8" type="text/javascript"></script>

</head>
<body>
<div class="www-presentation-header"><img src="./images/scsu-logo-compact-blue.png" style="height: 70px;"/></ul><div class="www-presentation-header-text"></div></div>
<div class="slide titlepage">
  <h1 class="title"><br><font color = "#000080"></font></h1>
  <br><br><img class="right-side-image" src="./images/Joe.jpg"/>

  <p class="date">CSC 443: Presentation 3</p>
  <p class="author"><a href="mailto:Delgadoj11@southernct.edu?subject=CSC443">Joseph Delgado</a>
  Computer Science Department Senior <br><font color = "#8080FF" style="text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Southern Connecticut State University</font></p>
  <button id="view-fullscreen" onclick="goFullscreen">*</button>
  <!-- https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API/Guide -->
  <script type="text/javascript">
    (function goFullscreen() {
        var viewFullScreen = document.getElementById("view-fullscreen");
        if (viewFullScreen) {
            viewFullScreen.addEventListener("click", function () {
                var docElm = document.documentElement;
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                }
                else if (docElm.msRequestFullscreen) {
                    docElm = document.body; //overwrite the element (for IE)
                    docElm.msRequestFullscreen();
                }
                else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                }
                else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                }
            }, false);
        }

        var cancelFullScreen = document.getElementById("cancel-fullscreen");
        if (cancelFullScreen) {
            cancelFullScreen.addEventListener("click", function () {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
                else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
                else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                }
                else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }, false);
        }

        var fullscreenState = document.getElementById("fullscreen-state");
        if (fullscreenState) {
            document.addEventListener("fullscreenchange", function () {
                fullscreenState.innerHTML = (document.fullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("msfullscreenchange", function () {
                fullscreenState.innerHTML = (document.msFullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("mozfullscreenchange", function () {
                fullscreenState.innerHTML = (document.mozFullScreen)? "" : "not ";
            }, false);

            document.addEventListener("webkitfullscreenchange", function () {
                fullscreenState.innerHTML = (document.webkitIsFullScreen)? "" : "not ";
            }, false);
        }
    })();
    </script>
</div>

<div class="section slide level1" id="2.1">
  <br><br><br>
  <h1>2.1: My <i>Peer Review Feedback</i></h1>
  <ul class="incremental">
    <a href="http://167.99.253.247/csc443/delgadoj11/Assignment4_Delgado/">Link to Feedback Table</a>
    <li>Biggest Feedback was the main function of my website</li>
    <li>What did I want the website to actually do for the user</li>
    <li>"Is your ThemePark going to have more of a blog theme or a calculator theme 
      for deciding on what the best PC build would be?
    </li>
    <li>Another feedback was the design of the website</li>
    <li>Was I going to use a framework or something like bootstrap to help me design this website?</li>

</div>

<div class="section slide level1" id="2.2">
  <br><br><br>
  <h1>2.2: <i>Response to the feedback</i></h1>
  <ul class="incremental">
    <li>I want to do a more blog type website to determine the best overall computer per budget range</li>
    <li>Split into 4 main budget range: $500, $1000, $1500, $2000</li>
    <li>I originally didn't use bootstrap in my original proposal site but I'll take that advice now and use it</li>
    <li>I would enjoy any feedback on a design I could reference to for this type of website</li>
  </ul>
</div>

<div class="section slide level1" id="2.3">
  <br><br><br>
  <h1>2.3: <i>Navigate to your ThemePark through the CSC 443 Theme Park</i></h1>
  <ul class="incremental">
    <a href="https://167.99.253.247/csc443/themepark/" target="_blank">ThemePark Portal Link</a>
  </ul>
</div>

<div class="section slide level1" id="2.4">
  <br><br><br>
  <h1>2.4: <i>Describe your ThemePark Area</i></h1>
  <a href="https://167.99.253.247/csc443/delgadoj11/Computer-Theme-Park/">My Theme Park Link</a>
  <ul class="incremental">
    <li>Have a small gallery of computers at the top</li>
    <li>Small discussion about what the website is about</li>
    <li>Have the main icons for the computer clickable to bring you to the section</li>
    <li>Each section is going to have the specific specification and budget</li>
  </ul>
</div>

<div class="section slide level1" id="2.5">
  <br><br><br>
  <h1>2.5 <i>Discuss your plans or questions you have for each of the following:</i></h1>
  <ul class="incremental">
    <li>HTML - Going to use PHP more specifically for server sided rendering</li>
    <li>CSS - Going to use Bootstrap and custom CSS to style the page</li>
    <li>JavaScript - Running the image gallery and more</li>
    <li>PHP - Using PHP to handle server-sided rendering and things like current cost (not sure yet)</li>
    <li>Client-Side Interactive Content - The gallery is going to be interactive (slide through images)</li>
    <li>Client-Side Dynamic Content - Maybe determine a cost range?</li>      
    <li>Server-Side Dynamic Content - Be able to input new computer specifications</li>
    <li>Server-Side Interactive Content - N/a</li>
    <li>Data-Driven Dynamic Content - N/a</li>
  </ul>
</div>
<div class="section slide level1" id="2.6">
  <br><br><br>
  <h1>2.6 <i>Show how visitors could navigate to your team members' themepark areas from your area</i></h1>
  <ul class="incremental">
    <p>At the end, there will be a section with all my team member's themepark links and a small summary of their site</p>
  </ul>
</div>

<div class="section slide level1" id="2.7">
  <br><br><br>
  <h1>2.7 <i>Feedback?</i></h1>
    <a href="https://southernct.blackboard.com/webapps/discussionboard/do/message?action=list_messages&course_id=_77203_1&nav=discussion_board_entry&conf_id=_103679_1&forum_id=_130159_1&message_id=_2156989_1">Link to Our Discussion Board</a>
    <p>Please send me any feedback at Team 1's assignments & presentation board at the link above!</p>    
</div>

</ul>
</div>
</body>
</html>
