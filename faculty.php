<?php 
include 'header.html';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <style type="text/css">
    body{
      margin: 0px;
      border: 0px;
    }
     #head{
      background: #191919;
      width: 74%;
      height: 125px;
      color: white;
      margin-left: 215px;
      margin-top: -10px;
     }
     #head:hover{
      color: skyblue;
     }
     #sidebar{
      width: 300px;
      height: 410px;
      background: #323232;
      margin-left: 215px;
      float: left;
     }
     #data{
      background: #212121;
      height: 410px;
      margin-left: 30%;
      margin-right: 12%;
     }
     #adminlogo{
      border-radius: 50%;
      height: 80px;
     }
     ul li{
      padding: 10px;
      border-bottom: 2px solid gray;
      color: white;
     }
     ul li:hover{
       background:#212121; 
       color: skyblue;
     }
   </style>
 </head>
 <body>
     <div id="head">
       <center style="font-size: 20px;"><img src="result2.png" alt="adminlogo" id="adminlogo"><br> 
        <?php 
           session_start();
           echo "WELCOME-".$_SESSION['fname'];
         ?>
      </center>
     </div>
     <div id="sidebar">
      <ul>
       <a href=""><li>Extract PDF</li><a>
        <a href=""><li>Select Table</li></a>
        <a href="index.php"><li>LOGOUT</li></a>
      </ul>
       
     </div>
     <div id="data">
       
     </div>
 </body>
 </html>