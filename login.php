<!-- Paste the login page html code here -->
<?php require_once('includes/nav_rest.php'); ?>
<html>
    <head>
        <!-- bootstrap and theme css min file, and font awesome cdn -->
        <link rel="stylesheet" href="assets/css/lux.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS file. Do your modifications here -->
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class = "wrapper container">
            <div class="row">
            <div class ="col-sm-4" style="background-color:#3EA562;">
                    <form method="POST" style="padding-top: 15px">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter your User ID:</label>
                            <input type="text" class="form-control" name="uname" aria-describedby="emailHelp" placeholder="User ID" required>
                            <small id="emailHelp" class="form-text">Your user id here</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pssw" placeholder="Password" required="Password is required">
                        </div>
                        <br>
                            <div class="form-group" >
                                User Type:
                                <input type="radio" name="user"  value="student" required>Student <input type="radio" name="user"  value="Teacher" required>Teacher
                            </div>
                            <button type="submit" class="btn btn-outline-primary" style="margin-left: 35%; margin-bottom: 10px;">Submit</button>
                        <p style="margin-left: 10%">Not registered? <a href="logins.php"><span style="color:orange">Sign Up</span></a>.</p>
                        <p style="margin-left: 10%">Update Data? <a href="updatep.php"><span style="color:orange">Update</span></a>.</p>
                    </form>
                
            </div>
            </div>
        </div>
    </body>
</html>



<?php require_once('includes/footer.php'); ?>