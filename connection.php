<?php
$username ="root";
$password="";
$server="localhost";
$db="curdprac";

$con = mysqli_connect($server,$username, $password, $db);


if($con){
  //echo"successful";
  ?>
  <script >
     alert('connection successful');
  </script>
  <?php
}else{
  echo"not connection";

}
 ?>
