
<style>
 *{
 }
 .wrapper{
    height: 500px;
 }
 .field.input {
    position: relative;
    top: 20px;

 }
 .field.button{
    position: relative;
    top: 20px;
 }
 .link{
    position: relative;
   left: 100px;
 }
.link a{
   margin-top: 20px;
   position: relative;
   left: 0px;
   color: #fff;
   transition: 0.4s;
 }
 .link a:hover{
    color: #0ef;
   
 }

</style>
<?php include_once "header.php"; ?>
<body>
   
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App </header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-dateils">
                 
                    <div  class="field input">
                        <label>Email Adrees</label>
                        <input type="email" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        <i style="color:#fff" class="fas fa-eye"></i>
                    </div>
                   
                  
                </div>
                <div class="field button">
                    <input type="submit" value="contiune to chat">
                </div>
            </form>
       
        </section>
        <div class="link" style="color: #fff;">Already signed up?  <a href="register.php">Signup now</a></div>
    </div>
    <script src="https://kit.fontawesome.com/a76ecab3e0.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/pass-show-hiden.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>