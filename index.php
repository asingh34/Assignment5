<!DOCTYPE html>
<html>
<head>
   <title>Home</title>
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" href="sss/sss.css">
</head>
<body class = container>

   <div class = logo>
      <img src="images/roc2.png">
   </div>

     <?php include "inc/nav.inc";?>

      <div class="sizer">
         <div class="slider">
            <img class= "squish" src="images/anant.jpg" alt="anant">
            <img class= "squish" src="images/akshay.jpg" alt="akshay">
            <img class= "squish" src="images/elon.jpg" alt="elon">
         </div>
      </div>

      <div class = intro>
         <p>
            This site contains information on three students from CSC 174 Advanced Front-end Web Design &amp; Development. One of the three is different from the other in terms of their educational background.
         </p>
         <hr>
      </div>

      <nav class = nextIndex>
      <ul>
          <li> <a href = "elon.php">Back</a></li>
          <li> <a href = "anant.php">Next</a></li>
         </ul>
      </nav>


         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

         <script src="sss/sss.min.js"></script>

         <script>
            $('.slider').sss({
               slideShow : true,
               startOn : 0,
               transition : 400,
               speed : 3500,
               showNav : true
            });
      </script>

   <script src="http://code.jquery.com/jquery.js"></script>
   <script src="js/menu-highlighter.js"></script>

</body>
</html>
