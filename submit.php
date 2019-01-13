<?php require_once('includes/nav_rest.php')?>

<html>
    <head>
        <title>Submit your paper</title>
        <!-- This is the css for the theme I have used in this page, you can find it in the directory below -->
        <link rel="stylesheet" href="assets/css/flatly.min.css">
        <!-- Google fonts cdn -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
         <!--Icons css  -->
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <!-- jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!-- Custom CSS file. Do your modifications here -->
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
            <div class="register-photo">
                <div class="form-container">
                    <form method="post">
                        <h2 class="text-center">Submit Paper</h2><small class="form-text text-muted">Enter paper title:</small>
                        <div class="form-group"><input class="form-control" type="text" name="paper_title" placeholder="Enter paper title"></div> <small class="form-text text-muted">Enter the name of the authors:</small>
                        <div class="form-group">
                            <div class="table">
                                <table class=" table table-bordered" id="dynamic_authorName">
                                <tr>
                                    <td> <input class="form-control" type="text" name="author_name[]" placeholder="Enter Author name"> </td>
                                    <td><button class="btn btn-success" name="add_author" id="add_author" type="button">Add Author</button></td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <small class="form-text text-muted">Enter the email id of the authors:</small>
                        <div class="form-group">
                            <div class="table">
                                <table class=" table table-bordered" id="dynamic_authorEmail">
                                <tr>
                                    <td> <input class="form-control" type="email" name="author_email[]" placeholder="Enter Author email"> </td>
                                    <td><button class="btn btn-success" name="add_authorMail" id="add_authorMail" type="button">Add Author email</button></td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <small class="form-text text-muted">Enter contact email id:</small>
                        <div class="form-group"><input class="form-control" type="email" name="contact_email" placeholder="Enter email id"></div><small class="form-text text-muted">Enter keywords here:</small>
                        <div class="form-group"><input class="form-control" type="text" name="keyword" placeholder="Enter Keywords"></div><small class="form-text text-muted">Enter abstract for the paper:</small>
                        <div
                            class="form-group"><textarea class="form-control"></textarea></div><small class="form-text text-muted">Attach your file here:</small>
                <div class="form-group"><input type="file"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Submit Paper</button></div>
                </form>
            </div>
        </div>
        <!-- javascript CDN -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
<script>  
 $(document).ready(function(){  
      var i = 1;
      var j = 1;  
      $('#add_author').click(function(){  
           i++;  
           $('#dynamic_authorName').append('<tr id="row'+i+'"> <td> <input class="form-control" type="text" name="author_name[]" placeholder="Enter Author name"> </td> <td> <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td> </tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#add_authorMail').click(function(){  
           j++;  
           $('#dynamic_authorEmail').append('<tr id="row'+j+'"> <td> <input class="form-control" type="email" name="author_email[]" placeholder="Enter Author email"> </td> <td> <button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">Remove</button></td> </tr>');  
      });   
   /* $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      }); */
 });  
 </script>
 <?php require_once('includes/footer.php')?>