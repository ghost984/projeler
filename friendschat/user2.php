<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  class="icon"rel="icon" href="images/chat.ico.png" type="image/x-icon" />
    <link rel="stylesheet" href="chatstyle.css">
    <title>chat</title>
</head>
<style>
 *{
 }
 .wrapper{
    
    
 }
 *{
    color: #fff;
 }
 .logout{
    position: relative;
    left: -40px;
 }
 .search{
    align-items: center;
    position: relative;
    left: 40px;
    top: 5px;
 }
 .details{
    margin: 10px;
    position: relative;
    left: 10px;
 }

.search button i{
    position: relative;
    top: -10px;
}



</style>
<body>
   
    <div class="wrapper">
     <selection class="users">
       <header>
        <div class="content">
            <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
            <div class="details">
                <span>Coding Nepal</span>
                <p>Active Now</p>
            </div>

        </div>
        <a  href="#" class="logout">logout</a>
       </header>
       <div class="search">
        <span class="text" style="color: #000;">Select an user  to start  chat</span>
        <input type="text" placeholder="Enter Name to search...">
        <button><i id="bb" style="color: #000;" class="fas fa-search"></i></button>
       </div>
     </selection>
     <div class="user-list">
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
        <a href="#">
            <div class="content">
                <img src="images/mr-robot-konusu-1200x900.jpg" alt="">
                <div class="details">
                    <span>Coding Nepal</span>
                    <p>This is test message </p>
                </div>
            </div>
        </a>
        <div  class="status-dot"><i id="aa"  class="fas fa-circle"></i></div>
     </div>
       
    </div>
    <script src="https://kit.fontawesome.com/a76ecab3e0.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>