<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Item Message</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Cakes_n_more.css">
  </head>
  <body>
    <?php
    include 'navbar.php';
    $pc = $_REQUEST['productCode'];
    $img = $_REQUEST['img'];
    $target_Path = "C:/wamp/www/apps/Cakes_n_more/images/";
    $target_Path = $target_Path.basename( $_FILES['img']['name'] );
    move_uploaded_file( $_FILES['img']['tmp_name'], $target_Path );
    $img_name = $_FILES['img']['name'];

    $link = mysql_connect("localhost","root","");

    mysql_select_db("cakes_n_more",$link);



     if(!($pc == "" and $img == "")) {
       # code...
       mysql_query("insert into products values ('".$pc."','".$img_name."','')");
       $n = mysql_affected_rows();
       if (!($n == 0)) {
         # code...
         echo "<div class='alert alert-dismissible alert-success'>
           <button type='button' class='close' data-dismiss='alert'>&times;</button>
           <strong>Success!</strong> Product uploaded <a href='#' class='alert-link'>Go to product list</a>.
         </div>";

         echo "<img src='images/".$_FILES['img']['name']."' alt='Uploaded product' class='uploadedProduct'>";
       }
       else {
         # code...
         echo "<div class='alert alert-dismissible alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>Oh snap!</strong> The product was not added <a href='#' class='alert-link'>try submitting again</a>.
              </div>";
       }
     }
     else {
       # code...
       echo "<div class='alert alert-dismissible alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <strong>Oh snap!</strong> The product was not added <a href='#' class='alert-link'>try submitting again</a>.
            </div>";
     }
    mysql_close($link);
     ?>

     <!-- All Js Scripts here -->
     <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
