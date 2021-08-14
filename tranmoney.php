<?php
session_start();
include ("conn.php");
$sql="select * from transfer_table ";
$rows=$db->query($sql);
if (isset($_POST['submit'])) {
	$sn=$_POST['customer_table'];
	$rn=$_POST['transfertable'];
	$amt=$_POST['amount'];
	$sql="SELECT customer_balance from customer_table WHERE customer_name='$sn'";
   $rows=$db->query($sql);
   foreach($rows as $obj){
        if ( $amt<=$obj["customer_balance"]) {
   	      $sql="UPDATE customer_table SET customer_balance=customer_balance+$amt WHERE customer_name='$rn' " ;
          $rows=$db->query($sql);
          $sql4="UPDATE transfer_table SET customer_balance=customer_balance+$amt WHERE customer_name='$rn' " ;
          $rows4=$db->query($sql4);
          $sql1="SELECT customer_balance from customer_table WHERE customer_name='$rn'";
          $rows1=$db->query($sql1);
          foreach ($rows1 as $obj) {
          	echo $obj["customer_balance"];
          }
          $sql2="UPDATE customer_table SET customer_balance=customer_balance-$amt WHERE customer_name='$sn'";
          $rows2=$db->query($sql2);
          $sql3="SELECT customer_balance from customer_table WHERE customer_name='$sn'";
          $rows3=$db->query($sql3);
          foreach ($rows3 as $obj1) {
          	echo $obj1["customer_balance"];
          }
          header('location:home.php'); 
   } 
    else{ echo ('<script type ="text/JavaScript">;  
     alert("Insufficient Balance");
     window.location.href="home.php"; 
     echo </script>');
    }
}
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body{
	background-image: url("open-banking.jpg");
	 background-repeat: no-repeat;
	  background-size: 100% ;
}
		.header {
  padding:4px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size:20px;
}
		table,th,td{
			margin-top:10px;
			margin-left:24%;
			border:5px solid #73e6ff;
			border-collapse: collapse;
			font-size:22px;
			color:#00ff00;
			text-align:center;
		}
		th{
			color: #eb051a;
			font-size:25px;
		}
		a{  margin-top:50px;
			margin-left:20px;
		}
	</style>
</head>
<body>
	<div class="header">
  <h1>Sparks Banking System</h1>
</div>
<a href="home.php" class="btn btn-warning">Back</a>
	<table>
		<h1 style=" text-align:center;color:#00ccff;">Transaction Table</h1>
	<tr>
		<th>Customerid</th>
		<th>Name</th>
		<th>Email</th>
		<th>Transaction Money</th>
	</tr>
	<?php while($row=$rows->fetch_assoc()):?> 
	<tr><td><?php echo $row['customerid']; ?></td>
		<td><?php echo $row['customer_name'];?></td>
		<td><?php echo $row['customer_email'];?></td>
		<td><?php echo $row['customer_balance'];?></td>
	</tr>
	  <?php endwhile; ?>
   </table>
</body>
<?php include 'footer.php';?>
</html>
