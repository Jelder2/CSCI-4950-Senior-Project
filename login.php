<div class="menu">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.html">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="game.html">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>

       </div>

    <!-- Body section -->
       <!--SIGNUP FORM-->
    <div class="login-page">
      <div class="form">
        <form action="connect.php" method="post" class="register-form" >
          <input type="text" placeholder="Username" id="Namee"  name="Namee"/> <!---->
          <input type="text" placeholder="Password" id="Passwordd" name="Passwordd"/> <!--placeholder="username"-->
          <input type="text" placeholder="Email" id="Email"   name="Email"/> <!--placeholder="username"-->
          <button type="submit" name="submit">Create</button>
          <p class="message">Already Registered? <a href="#">Login</a></p>
        </form>
        <!--LOGIN FORM-->
        <form action="loginForum.php" method="post" class="login-form">
          <input type="text" placeholder="username"/>
          <input type="text" placeholder="password"/>
          <button>login</button>
          <p class="message">Not Registered? <a href="#">Register</a></p>
        </form>
      </div>
    </div>
    <!--Script to show/hide the login/signup-->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>

    <script>
      $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });
    </script>