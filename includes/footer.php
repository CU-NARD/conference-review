<!-- include this file at the end of every file you create -->

<html>
    <head>
        <!-- bootstrap and theme css min file, and font awesome cdn -->
        <link rel="stylesheet" href="assets/css/lux.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- some style elements which typing into assets/css/styles.css were causing problems -->
        <style>
            .fa {
                padding: 20px;
                font-size: 30px;
                width: 50px;
                text-align: center;
                text-decoration: none;
            }
            .list-inline-item {
                color: white;
            }
        </style>
    </head>
    <body>
    <!-- basic footer; if you want to modify, just modify the links(<a href = "">) -->
    <div class="footer-basic bg-primary">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                <li class="list-inline-item"><a href="https://github.com/" class="fa fa-github"></a></li>
                <li class="list-inline-item"><a href="https://google.com/" class="fa fa-google"></a></li>
                <li class="list-inline-item"><a href="https://youtube.com/" class="fa fa-youtube"></a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#section-1">Home</a></li>
                <li class="list-inline-item"><a href="#section-5">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="https://www.gnu.org/licenses/gpl-3.0.en.html">Privacy Policy</a></li>
            </ul>
            <p class="copyright">NARD © 2019</p>
        </footer>
    </div>
    </body>
</html>