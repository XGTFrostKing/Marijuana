<!DOCTYPE html>
<html lang="en">
<head>
   
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>

<body>
    <div class="box">
    <div class="singup-login-box">
        
    <?php
        include("dbconn.php");  ?>

        <div class="login-header">
            
           
            <header>
                <a href="signin.php"> <img src="back.png"
                    style="width: 35px; 
                    height: 35px;
                    position: absolute;
                    top: 10;
                    left: 600px;
                    margin: 10px;">
                </a>
                Sign up
                
            </header>
        </div>

        <div class="input-box">
        
           
                
            <input type="text" class="input-field" id= "fullname" placeholder="fullname" autocomplete="off"  maxlength="50" required>
        </div>

        <div class="input-box">
          <input type="text" class="input-field" id="email" placeholder="Email" autocomplete="off"  maxlength="50" required>
      </div>

      <div class="input-box">
        <input type="number" class="input-field" id="age"  placeholder="Age" autocomplete="off"  max="2" required>
    </div>

        <div class="input-box">
            <input type="password" class="input-field" id= "password" placeholder="Password" autocomplete="off" maxlength="20" required>
        </div>
      
        

      
      

        <div class="input-submit">
            <button type="submit" value="Sign in">Sign In </button>

        </div>
        <div class="sign-up-link">
            <p>Already have an account? <a href="signin.php">Sign in</a></p>
        </div>
        
    </div>
    

 
    
</div>
<script>
    document.getElementById('age').addEventListener('input', function() {
        
        let age = this.value;

        age = age.replace(/\D/g, '');

   
        if (age.length > 2) {
            age = age.slice(0, 2);
        }

        this.value = age;
    });
</script>



</body>
</html>