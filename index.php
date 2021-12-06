<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
 <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Result Analysis System</title>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  $(window, document, undefined).ready(function() {

      $('.input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
      });
      
      });


    $('#tab1').on('click' , function(){
        $('#tab1').addClass('login-shadow');
       $('#tab2').removeClass('signup-shadow');
    });

    $('#tab2').on('click' , function(){
        $('#tab2').addClass('signup-shadow');
       $('#tab1').removeClass('login-shadow');


    });
</script>
</head>
<body style="background-image: url(result3.gif);"> 
   <div class="container">
     <div class="container p-3 my-3 bg-dark text-white">
        <h1>Govt.Women's polytechnic college,Indore</h1>
        <h2>RESULT ANALYSIS SYSTEM</h2>
        <span style="font-size:40px; cursor:pointer;" onMouseOver="this.style.color='skyblue'"
        onMouseOut="this.style.color='white'" onclick="openNav()">&#9776;Menu</span>
     </div>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="" data-toggle="modal" data-target="#id01">Admin</a>
  <a href="#signup" data-toggle="modal" data-target=".log-sign">Faculty</a>
     </div>
  </div>
  <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
              <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="facultyverify.php" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
              
               <div class="group">
<input required="" class="input" type="text" name="fname"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Username</label></div>
              
              
            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>

           <div class="forgot-link">
            <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
            </div>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-primary btn-block" type="submit">Log In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>   
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" action="facultysignup.php" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="text" name="fname"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">User Name</label></div>

            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="text" name="email"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="password" id="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label></div>
              <em>1-8 Characters</em>
              <div class="group">
 
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block" type="submit">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>

    </div>
  </div>
</div>
<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
        <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
        
        
        <div class="control-group">
              <label class="control-label" for="forpassword"></label>
              <div class="controls">
                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
              </div>
            </div>
          </fieldset>
            </form>   
      </div>
    </div>
  </div>
</div>

  <!--Admin modal-->
  <div class="modal fade bs-modal-sm " id="id01" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <h2>Admin-Login</h2>
     <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" method="post" action="Adminverify.php">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
              
               <div class="group">
<input required="" class="input" type="text" name="uname"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Username</label></div>
              
              
            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="password" name="pass"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-primary btn-block" type="submit">Log In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>   </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>