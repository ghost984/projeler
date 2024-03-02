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




</style>
<?php include_once "header.php"; ?>
<body>
   
    <div class="wrapper">
     <selection class="chat-area">
       <header>
       <?php

include_once "php/config.php";
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql) > 0)
{
    $row = mysqli_fetch_assoc($sql);
    
}
?>
        <a href="user.php" class="back-icon"><i style="color: #0ef;" class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo  $row['image'] ?>" alt="">
            <div class="details">
                <span><?php echo $row['fname'] ." ". $row['lname']?></span>
                <p><?php echo $row['status']?></p>
            </div>
      
    
    </header>
    <div class="chet-box">
        
        
    </div>
    <form action="#" class="typing-area" autocomplete="off">
        <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
        <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message"  class="input-Field" placeholder="type a messahe here ...">
        <button><i style="color: #000;" class="fab fa-telegram-plane"></i></button>
    </form>
    </selection> 
    </div>


    <script  src="javascript/chat.js"></script>
    <script src="https://kit.fontawesome.com/a76ecab3e0.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>