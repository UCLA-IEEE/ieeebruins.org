<!DOCTYPE HTML>
<html>
<head>
    <title>IEEE at UCLA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- JQUERY -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>

    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='/public/css/footer.css' />
    <link rel='stylesheet' href='/public/css/style.css' />
    <link rel='stylesheet' href='/public/css/main.css' />
    <link rel='stylesheet' href='/public/css/navbar.css' />

    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>

    <!-- BACKGROUND -->
    <div class='main-billboard'>
       <div class='billboard-content'>
           <div class='billboard-logo'>
             <img src='/public/images/IEEE_full_logo_white.png'/>
             <p class='ucla'>at ucla</p>
           </div>
           <h1 class='billboard-subtext text-center'>Hands-On Engineering</h1>
       </div>
   </div>

   <!-- DESCRIPTION AND MAILING LIST -->
   <div class='container-fluid background-grey'>
    <div class='row description'>
        <div class='col-sm-6 left-column'>
          <h1>ABOUT US</h1>
            <p class = 'aboutus'>IEEE at UCLA is a professional student-run
            engineering organization. We devote our time and
            energy towards bringing hands-on, practical
            experiences to engineering students throughout
            UCLA, as well as create opportunities for students to
            interact with industry professionals and more. Every
            year we lead several projects for our members to
            partipate in Lorem ipsum minimum ed and dolor sit
            amet set ud do labore</p>
        </div>
        <div class='col-sm-6 text-center mailing-title'>
            <h1>JOIN OUR <br/> <span class = 'ieee-blue'> MAILING LIST </span> </h1>
            <h2 class= 'mailing-subtext'>Keep up with all our upcoming events, workshops, and socials.</h2>
            <!-- LINK THE BUTTON TO SOMETHING -->
            <input type= 'text' name= 'email' style='border:none'>
            <input type= 'submit' value= 'Join' class= 'button button-join' >
        </div>
    </div>
</div>

   <!-- EVENTS -->
   <div class= 'container-fluid background-ieee-blue container-padding'>
     <div class= 'row events' style= 'vertical-align:bottom'>
      <div class= 'col-sm-3 events-column'>
        <h1> EVENTS </h1>
          <p class= 'events-subtext'> Here are some upcoming events
           that you will not want to miss out on. Remember to
           save the date!</p>
      </div>
      <div class= 'col-sm-3 bottom-space'>
        <h3> General Meeting </h3><br>
          <h4 style= 'padding-right: 70px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
      <div class= 'col-sm-3 bottom-space'>
        <h3> Boeing Info Session </h3><br>
          <h4 style= 'padding-right: 105px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
      <div class= 'col-sm-3 bottom-space'>
        <h3> OPS Meeting </h3><br>
          <h4 style= 'padding-right: 35px'> Boelter 2417 <br> March 27, 2018 <br> 6:00 PM </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et </p>
      </div>
    </div>
</div>

   <!-- LAB HOURS -->
  <div class='container-fluid background-grey container-pad'>
    <div class= 'row lab-hours'>
      <div class='col-md-9 sheet'>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQCXnPk6lo9JAXysHu7UDFgsCLNRUCfnhYyL2bngyghk5N9UegC2UCv2o0dR6EVldRtgODFRkLibzkg/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
      </div>
      <div class='col-md-3 lab-hours-wrapper text-right'>
        <h1> LAB HOURS </h1>
        <h2> UNIQUE.<br> INNOVATIVE.<br> SUPPORTIVE.</h2>
        <!-- LINK THE BUTTON TO SOMETHING -->
        <button class='button button-lab'>Learn More</button>
      </div>
    </div>
  </div>

   <!-- INSTAGRAM WIDGET -->
 <div class='container-fluid background-white pic-container' style= 'position: relative;'>
   <h1>INSTAGRAM <a href="https://www.instagram.com/ieeebruins/" target= '_blank' class= 'handle'>@ieeebruins</a></h1> <br>
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/officers/jeffrey-chan.jpg">
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/OPS.jpg">
   <img class="slides" src="./public/images/OPS.jpg">

   <button class="instagram-button" onclick="plusDivs(-1)" style= 'position: absolute; left: 60px;'>&#10094;</button>
   <button class="instagram-button" onclick="plusDivs(+1)">&#10095;</button>
 </div>

 <script>
  let slideIndex = 0;
  showDivs(slideIndex);

  function plusDivs(n){
    showDivs(slideIndex+=3);
  }

  function showDivs(n){
    let slides = document.getElementsByClassName("slides");
    if (slideIndex>4){
      slideIndex=0;
    }
    for (let j=0; j<slides.length; j++){
      slides[j].style.display = "none";
    }
    for (let k=slideIndex; k<slideIndex+4; k++){
        slides[k].style.display = "inline-block";
    }
  }
 </script>

   <!-- FOOTER -->
   <?php include('./includes/footer.html'); ?>

</body>
</html>
