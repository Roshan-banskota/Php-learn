<html>
   <body>
   
      <?php
      $today = date('l');
      echo '<h2>'.$today.'<h2>';
      	if($today=='Saturday'|| $today=='Sunday'|| $today=='Monday'){
         echo "WOW It is weekend enjoy it";
      }
         elseif ($today=='friday') {
         	echo "Weekend is coming";
         }
         else{
         echo "its a working day";
        }
      echo "<br>";
      ?>
   
   <?php
   $userlogin=0;
   // zero gives false result and one gives true result
   if($userlogin){
      echo "Please Login";
   }else{
      echo "You are not login!! Please Login";
   }


   ?>
   </body>
   
</html