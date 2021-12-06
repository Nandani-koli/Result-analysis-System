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
     iframe{
      background: #212121;
      height: 410px;
      width: 840px;
      border: 1px;
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
     h3{
      color: white;
     }
     td{
      color: white;
      font-size: 30px;
     }
     button{
      background-color: #77ACC1;
     }
   </style>
 </head>
 <body>
     <div id="head">
       <center style="font-size: 20px;"><img src="result2.png" alt="adminlogo" id="adminlogo"><br>WELCOME-ADMIN</center>
     </div>
       <div id="sidebar">
      <ul>
       <a href="upload.php" target="a"><li>Extract PDF</li><a>
        <a href=""><li>Select Table</li></a>
        <a href="adduser.php" target="a"><li>Add User</li></a>
        <a href="deleteuser.php" target="a"><li>Delete User</li></a>
        <a href="index.php"><li>LOGOUT</li></a>
      </ul>
       </div>
   <iframe src="" name="a">  
    </iframe >
 </body>
 </html>