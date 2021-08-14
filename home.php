<?php
include ("conn.php");
$sql="select * from customer_table ";
$rows=$db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<style type="text/css">
		table,th,td{
			margin-top:10px;
			margin-left:15%;
			border:5px solid #73e6ff;
			border-collapse: collapse;
			font-size:22px;
			color:#ffad00;
			text-align:center;
		}
		th{
			color: #eb051a;
			font-size:25px;
		}
		.vl {
  border-left: 6px solid green;
  height:512px;
  position: absolute;
  left:73%;
  margin-left: -3px;
  top:143px;
}
body{
	background-image: url("open-banking.jpg");
	 background-repeat: no-repeat;
	  background-size: 100% ;
}
label{
	color:#00e6e6;
}
.header {
  padding:4px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
#numloc{
	color:red;
}
	</style>	
}
</head>
<body>
	<div class="header">
  <h1>Sparks Banking System</h1>
</div>

	<nav class="navbar navbar-expand-sm justify-content-center bg-success navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tranmoney.php">Transaction</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
  </ul>
</nav>

	<table>
		<h1 style=" text-align:center;color:#00ccff;">Customer Table</h1>
	<tr>
		<th>Customerid</th>
		<th>Name</th>
		<th>Email</th>
		<th>Current Balance</th>
	</tr>
	<?php while($row=$rows->fetch_assoc()):?> 
	<tr><td><?php echo $row['customerid']; ?></td>
		<td><?php echo $row['customer_name'];?></td>
		<td><?php echo $row['customer_email'];?></td>
		<td><?php echo $row['customer_balance'];?></td>
	</tr>
	  <?php endwhile; ?>
   </table>
   <div class="vl">
		<script>  

function validate(){
var num=document.myform.amount.value;  
if (isNaN(num)){  
  document.getElementById("numloc").innerHTML="Enter Numeric Positive value only";  
  return false;  
}else if(num==0){
document.getElementById("numloc").innerHTML="Enter Positive value only";  
  return false;  
  } 
  else if(num<0){
  	document.getElementById("numloc").innerHTML="Negative value not accepted";  
  return false;
  } 
}  
</script>

    	<h1 style=" margin-left:20px; margin-top:90px; color:DodgerBlue;">Transfer Money</h1>
    	<form name="myform" onsubmit="return validate()" action="tranmoney.php" method="post" style="border: 5px solid #00ffff;padding:10px; align-items:center;margin-left:14px;">
    		<label>Choose Sender's:</label>
	<?php 
  $sql="select customer_name from customer_table ";
   $rows=$db->query($sql);
	$select='<select name="customer_table">';
	foreach ($rows as $result) {
		foreach ($result as  $val) {
	$select.="<option value='".$val." '>".$val."</option>";
		}
	}
  $select.='</select>';
  echo $select;
	?>
	<br><br><br>
	<label >Choose Receiver's:</label>
	<?php 
 	$sql="select customer_name from customer_table ";
   $rows=$db->query($sql);
	$select='<select name="transfertable">';
	foreach ($rows as $result) {
		foreach ($result as  $val1) {
	$select.="<option value='".$val1." '>".$val1."</option>";
		}
	}
  $select.='</select>';
  echo $select;
	?>
	<br>
	<br>
	<label>Money amount:</label>
	<input type="text" name="amount"><span id="numloc"></span><br>

    <input type="submit" name="submit" value="Submit">
          </form>
    </div>
     <?php include 'footer.php';?>
 </body>
</html>
