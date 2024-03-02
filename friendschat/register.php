<?php include_once "header.php"; ?>
<body>
   
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App 
            </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-dateils">
                    <div id="b2" class="field input">
                        <label>First Name</label>
                        <input  type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div  id="b1" class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div  class="field input">
                        <label>Email Adrees</label>
                        <input type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required>
                        <i style="color:#fff" class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>selecct image</label>
                        <input id="a2" type="file" name="image" required >
                    </div>
                </div>
                <div class="field button">
                    <input type="submit" value="contiune to chat">
                </div>
            </form>
            <div class="link" style="color: #fff;">not yet signed up?  <a href="login.php">login  now</a></div>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/a76ecab3e0.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/pass-show-hiden.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>