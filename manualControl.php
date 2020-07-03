<?php
require_once("conn.inc.php") ;

$forward= $_POST['forward'];
$left= $_POST['left'];
$right= $_POST['right'];
$back= $_POST['back'];
$stop= $_POST['stop'];




?>
<!DOCTYPE html>

<html>
<head>
<title>Robot Control Panel</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <header> </header>

 <main>
   <div class="all">

   <div class="header" > <a href="RobotControlPanel.html"> <h2>Robot Control Panel</h2> </a> </div>

   <div class="nav"  >
     <a href="manualControl.html">Manually</a>
     <a href="autoControl.php">Automatically</a>
   </div>

<p>
  <?php
  if ($forward){
    echo "forward";
    echo "<br>";  echo "<br>";
    $sql = "INSERT INTO ManualControl (	RightButton,	LeftButton,	ForwardButton,	BackwordButton, stopButton )VALUES ('','','F','','')";
    if (mysqli_query($connection, $sql)) echo "The Movment Is Recorded Successfully"; }


  else if ($left){
    echo "left";
    echo "<br>";  echo "<br>";
    $sql = "INSERT INTO ManualControl (	RightButton,	LeftButton,	ForwardButton,	BackwordButton, stopButton )VALUES ('','L','','','')";
  if (mysqli_query($connection, $sql)) echo "The Movment Is Recorded Successfully"; }

  else if ($right){
    echo "right";
    echo "<br>";  echo "<br>";
    $sql = "INSERT INTO ManualControl (	RightButton,	LeftButton,	ForwardButton,	BackwordButton, stopButton )VALUES ('R','','','','')";
    if (mysqli_query($connection, $sql)) echo "The Movment Is Recorded Successfully"; }



  else if ($back){
    echo "backward";
    echo "<br>";  echo "<br>";
    $sql = "INSERT INTO ManualControl (	RightButton,	LeftButton,	ForwardButton,	BackwordButton, stopButton )VALUES ('','','','B','')";
    if (mysqli_query($connection, $sql)) echo "The Movment Is Recorded Successfully";   }


  else if ($stop){
    echo "stop";
    echo "<br>";  echo "<br>";
    $sql = "INSERT INTO ManualControl (	RightButton,	LeftButton,	ForwardButton,	BackwordButton, stopButton )VALUES ('','','','','S')";
    if (mysqli_query($connection, $sql)) echo "The Movment Is Recorded Successfully";  }
    ?>
  </p>

  <button  name="GoBack" onclick="window.location.href='manualControl.html'" > Go Back </button>
</div>

</main>


 <footer>
  <p id="copyR">&#169;RobotControlPanel</p>
 </footer>

</body>
</html>
