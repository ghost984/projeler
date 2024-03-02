


<?php 
  session_start();
  if(!isset( $_SESSION['unique_id']))
  {
    header("location: login.php");
  }

?>
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
#bb{
    position: relative;
    top: 0px;
}
#b3{
    position: relative;
    top: -10px;
}
.users .search button.active{
    color: #0ef;
    background: #000;
  
}




</style>
<?php include_once "header.php"; ?>
<body>
   
    <div class="wrapper">
     <selection class="users">
       <header>
        <?php

        include_once "php/config.php";
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0)
        {
            $row = mysqli_fetch_assoc($sql);
            
        }
        ?>
        <div class="content">
            <img src="php/images/<?php echo  $row['image'] ?>" alt="">
            <div class="details">
                <span><?php echo $row['fname'] ." ". $row['lname']?></span>
                <p><?php echo $row['status']?></p>
            </div>

        </div>
        <a  href="login.php" class="logout">logout</a>
       </header>
       <div class="search">
        <span class="text" style="color: #fff;"  >Select an user  to start  chat</span>
        <input type="text" placeholder="Enter Name to search...">
        <button id="b3"><i id="bb" style="color: #0ef;"  class="fas fa-search"></i></button>
       </div>
    
     <div class="user-list">

       

       
     </div>
     </selection>
       
    </div>
    <script src="https://kit.fontawesome.com/a76ecab3e0.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/user.js"></script>
</body>
</html>