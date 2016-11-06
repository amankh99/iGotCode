<?php
session_start();
?>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
  <div class="logmod">
  <div class="logmod__wrapper">
    <span class="logmod__close" id="close">Close</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul> 
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform" method="post">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input class="string optional" maxlength="255" id="signInun" name="user" placeholder="Username" type="text" required size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password*</label>
                <input class="string optional" maxlength="255" id="signInpw" name="pass" placeholder="Password" required type="password" size="50" />
                <br><br><select name="type" id="signInty">
                  <option value="">I am a:</option>
                  <option value="consumer">Consumer</option>
                  <option value="elec">Electrician</option>
                  <option value="carp">Carpainter</option>
                  <option value="plum">Plummer</option>
                  <option value="mass">Massager</option>
                  <option value="maid">House worker</option>
                </select>
              </div>
                         </div>
            <span class="simform__actions-sidetext" id="signR"></span>
            <div class="simform__actions">
              <input class="sumbit" id="signInsub" name="commit" type="sumbit" value="Create Account" />
              
            </div> 
          </form>
        </div> 
        
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your Username and password <strong>to log in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform" method="post">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input class="string optional" maxlength="255" name="user" id="loginun" placeholder="Username" type="text" required size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" name="pass" id="loginpw" placeholder="Password" type="password" required size="50" />
                            <span class="hide-password">Show</span>
              </div>
            </div>
           <span class="simform__actions-sidetext" id="logR"></span>
            <div class="simform__actions">
              <input class="sumbit" name="commit" id="loginsub" type="sumbit" value="Log In" />
              
            </div> 
          </form>
        </div> 
        
          </div>
      </div>
    </div>
  </div>
</div>
      <script src="js/index.js"></script>
<script>
 $("#close").on("click",function(e){
      e.preventDefault();
      $("#logged").empty();
  });

    $("#loginsub").on("click",function(e){
        e.preventDefault();
        $.post("login.php",{"u" :  $("#loginun").val(),"p": $("#loginpw").val()},function(data){
            $("#logR").text(data);
            if(data == "Logged in! Redirecting...."){
                window.location.replace("home.php");
            }
        });
    });
    $("#signInsub").on("click",function(e){
        e.preventDefault();
        if($("#signInun").val()=="" || $("#signInpw").val()==""|| $("#signInty").val()=="") $("#signR").html("<br>Enter all the fields.");
        else {
          $.post("signup.php",{"u" :  $("#signInun").val(),"p": $("#signInpw").val(),"t": $("#signInty").val()},function(data){
            $("#signR").html("<br>"+data);
            if(data == "Sign up successful! Redirecting to home page"){
                alert($("#signInty").val());
                //window.location.replace("home.php");
            }
        });
      }
    });
    $("#signInun").on("blur",function(e){
        $.post("check.php",{"u" :  $("#signInun").val(),"p": $("#signInpw").val()},function(data){
            $("#signR").html("<br>"+data);
            if(data=="Username already exists"){
                $("#signInsub").attr("disabled",true);
            } else  $("#signInsub").attr("disabled",false);
        });
    });
</script>
