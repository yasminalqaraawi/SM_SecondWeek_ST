<?php require_once("conn.inc.php") ; ?>
<!DOCTYPE html>
<html>
<head>
<title>Robot Auto Control</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <header> <a href="RobotControlPanel.html"> <h2>Robot Control Panel</h2> </a> </header>

 <main>
   <div class="all">
   <div class="nav">
      <a href="manualControl.html">Manually</a>
      <a href="autoControl.php">Automatically</a>
    </div>
   <div class="label"><h2> Welcome To Your Auto Robot Control Panel</h2>  </div>
   </div>

<div id="formAndMap" style="justify-content: space-around;">
<div id="autoForm">
  <form method="post">
  <label id="rightLabel"> Right </label>
  <input type="text" name="rightInput" id="rightValue" value=" meters to the Right"  >
  <br>
  <label id="forwardLabel"> Forward </label>
  <input   type="text" name="forwardInput"  id="forwardValue" value=" meters Forward"  >
  <br>
  <label id="leftLabel"> Left </label>
  <input type="text" name="leftInput"   id="leftValue" value=" meters to the Left"  >
   <br>
  <input type="submit" id="saveButton" name="save"  value="save">
  </form>

  <input type="button"  id="startButton" name="start" value="start" onclick="startButton()" >
 <p style="font-size:14px;"> NOTE: If you want to save and start drawing the dis, click start then save. </p>


  <script>

  function startButton(){
    var leftInput = document.getElementById("leftValue").value*5;
    var rightInput = document.getElementById("rightValue").value*5;
    var forwardInput = document.getElementById("forwardValue").value*5;

    document.getElementById("robotStart").style.border = "solid red";
    document.getElementById("robotStart").style.hieght = "5px";
    document.getElementById("robotStart").style.width = "5px";
    document.getElementById("startlabel").innerHTML="start";

    document.getElementById("rightArrow").style.height = "0px" ;
    document.getElementById("rightArrow").style.width = rightInput+"px" ;
    document.getElementById("rightArrow").style.border = "solid #006400";

    document.getElementById("leftArrow").style.height = "0px" ;
    document.getElementById("leftArrow").style.width = leftInput+"px" ;
    document.getElementById("leftArrow").style.border = "solid #006400";

    document.getElementById("forwardArrow").style.height = forwardInput+"px" ;
    document.getElementById("forwardArrow").style.width = "0px" ;
    document.getElementById("forwardArrow").style.border = "solid #006400";
   }

  </script>


</div>

<div id="canvas" style="background-color:MintCream; height: 400px; width: 400px; border: solid gold; ">
<div style="margin: auto; width: 50%; padding: 10px;">

<div style="margin: 10px;" id="rightArrow"> </div>
<div  style="margin: 10px;" id="forwardArrow"> </div>

<div id="leftandstart" style="display: flex;">
  <div  style="margin: 10px;" id="leftArrow"></div>
  <div  style="margin: 10px;" id="robotStart"> </div>
  <div id="startlabel">
</div>

</div>
</div>
</div>

<?php
$right= $_POST['rightInput'];
$left=$_POST['leftInput'];
$forward = $_POST['forwardInput'];
$save=$_POST['save'];
$delete=$_POST['delete'];
  ?>

<div  id="divTable">
  <table id="distanceTable">
    <tr id="tableHeader">
      <th > Right </th>
      <th> Left </th>
      <th> forward </th>
    </tr>
<?php if($save){ ?>
    <tr>
      <td> <?php echo $right;  ?> </td>
      <td> <?php echo $left;  ?> </td>
      <td> <?php echo $forward;  ?> </td>
    </tr>
  <?php
  $sql = "INSERT INTO AutoControl (	RightDis,	LeftDis,	ForwardDis) VALUES ($right,$left,$forward)";
  $result = mysqli_query($connection, $sql);
}
?>
  </table>
</div>
</div>


 </main>


  <footer>
   <p id="copyR">&#169;RobotControlPanel</p>
  </footer>

 </body>
 </html>
