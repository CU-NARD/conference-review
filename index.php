<!-- I have included the php file for the default nav bar here using a php include statement, you should do the same to reduce time -->
<?php require_once('includes/nav.php'); ?>
<html>
    <head>
        <!-- This is the css for the theme I have used in this page, you can find it in the directory below -->
        <link rel="stylesheet" href="assets/css/flatly.min.css">
        <!-- Google fonts cdn -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
         <!--Icons css  -->
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <!-- Custom CSS file. Do your modifications here -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!-- JQuery and JS CDNs, please DO NOT modify -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <title>Welcome to 2019 NARD Conference</title>
        <!-- style elements for some special elements in these page -->
         <style>
             /* parallax scrolling settings */
             .bgimg{ 
                    position: relative;
                    opacity: 0.70;
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
            }
            .bgimg-1 {
                    height: 500px;
                    background-image: url("assets/img/bg-1.jpg");
            }
            .bgimg-2 {
                    height: 600px;
                    background-image: url("assets/img/artist.jpeg");
            }
            .bgimg-3{
                height: 500px;
                background-image: url("assets/img/cityscape.jpeg");
            }
            .bgimg-4 {
                height: 500px;
                background-image: url("assets/img/photography.jpeg");
            }
            .bgimg-5 {
                height: 500px;
                background-image: url("assets/img/doom.jpg");
            }
        </style>
    </head>
    <body>
        <!-- this being a one page design, has been divided into 5 segements, each containing a parallax image and a  jumbotron -->
        <section id ="section-1">
            <div class="bgimg bgimg-1">
                <div class = "caption">
                    <span class = "border"> WELCOME TO NARDCON 2019</span>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4"> Welcome to NARDCON; the conference organized by NARD, University of Calcutta.  </h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Pellentesque adipiscing commodo elit at imperdiet dui accumsan. Proin libero nunc consequat interdum varius sit amet. Ultrices dui sapien eget mi proin sed libero enim sed. Ut enim blandit volutpat maecenas volutpat. Molestie at elementum eu facilisis. </p>
                </div>
            </div>
        </section>
        <!-- second section -->
        <section id ="section-2">
            <div class = "bgimg bgimg-2">
                <div class = "caption">
                    <span class = "border"> NARDCON ORGANIZERS OF 2019 </span>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">University of Calcutta</h1>
                    <p class="lead">University of Calcutta holds Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Pellentesque adipiscing commodo elit at imperdiet dui accumsan. Proin libero nunc consequat interdum varius sit amet. Ultrices dui sapien eget mi proin sed libero enim sed. Ut enim blandit volutpat maecenas volutpat. Molestie at elementum eu facilisis. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Semper auctor neque vitae tempus quam pellentesque nec. Viverra vitae congue eu consequat ac. Massa enim nec dui nunc mattis. Non diam phasellus vestibulum lorem sed risus ultricies. Augue eget arcu dictum varius duis at consectetur lorem. In hac habitasse platea dictumst quisque sagittis purus sit. </p>
                </div>
            </div>
        </section>
        <!-- third section -->
        <section id ="section-3">
            <div class = "bgimg bgimg-3">
                 <div class = "caption">
                    <span class = "border"> CALL FOR PAPERS </span>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Papers are invited for the following topics</h1>
                    <ul style= "text-align: center;">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Accumsan lacus vel facilisis volutpat</li>
                        <li>Pellentesque adipiscing commodo elit </li>
                        <li>Non diam phasellus vestibulum</li>
                        <li>Augue eget arcu dictum</li>
                        <li>Enim diam vulputate ut pharetra.</li>
                        <li>Eget velit aliquet sagittis id</li>
                    </ul>
                    <p class="lead">Last date of submission is 20th January 2019.</p>
                </div>
            </div>
        </section>
        <!-- fourth section -->
        <section id ="section-4">
            <div class = "bgimg bgimg-4">
                <div class = "caption">
                    <span class = "border"> NARDCON BOARD 2019</span>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Keynote and Cahirs</h1>
                    <ul style= "text-align: center;">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Accumsan lacus vel facilisis volutpat</li>
                        <li>Pellentesque adipiscing commodo elit </li>
                        <li>Non diam phasellus vestibulum</li>
                        <li>Augue eget arcu dictum</li>
                        <li>Enim diam vulputate ut pharetra.</li>
                        <li>Eget velit aliquet sagittis id</li>
                    </ul>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </section>
        <!-- fifth section -->
        <section id ="section-5">
            <div class = "bgimg bgimg-5">
                 <div class = "caption">
                    <span class = "border"> ABOUT NARDCON</span>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Who we are</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </section>
    </body>
</html>
<!-- I have included the php file for the default footer here using a php include statement, you should do the same to reduce time -->
<?php require_once('includes/footer.php'); ?>