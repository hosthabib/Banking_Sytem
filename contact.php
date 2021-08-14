<?php 
include ("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      .header {
  padding:4px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
        #frmContact {
  border-top: green 3px solid;
    background:#00ffcc;
  padding: 10px;
}

#frmContact div {
  margin-bottom:10px;
}

#frmContact div label {
  margin: 5px 0px 0px 5px;    
  color: #49615d;
}

.demoInputBox {
  padding: 10px;
  border: #a5d2ca 1px solid;
  border-radius: 4px;
  background-color: #FFF;
  width:98%;
  margin-top:5px;
}

.error {
  background-color: #FF6600;
    padding: 8px 10px;
    color: #FFFFFF;
    border-radius: 4px;
    font-size: 0.9em;
}

.success {
  background-color: #c3c791;
  padding: 8px 10px;
  color: #FFFFFF;
  border-radius: 4px;
    font-size: 0.9em;
}

.info {
  font-size: .8em;
  color: #FF6600;
  letter-spacing: 2px;
  padding-left: 5px;
}

.btnAction {
  background-color: #82a9a2;
    padding: 10px 40px;
    color: #FFF;
    border: #739690 1px solid;
  border-radius: 4px;
}

.btnAction:focus {
  outline:none;
}
.column-right
{
    margin-right:14px;
}
.contact-row
{
    display: inline-block;
    width: 32%;
}
@media all and (max-width: 550px) {
    .contact-row {
        display: block;
        width: 100%;
    }
}

    </style>
</head>
<body>
        <div class="header">
  <h1>Sparks Banking System</h1>
</div>
<form id="frmContact" action="" method="post">
    <div id="mail-status"></div>
    <h2 style="text-align:center;">Contact Us</h2>
    <div class="contact-row column-right">
        <label style="padding-top: 20px;">Name</label> 
        <span id="userName-info" class="info"></span><br/> 
        <input type="text" name="userName" id="userName"
            class="demoInputBox">
    </div>
    <div class="contact-row column-right">
        <label>Email</label> <span id="userEmail-info" class="info"></span><br />
        <input type="text" name="userEmail" id="userEmail"
            class="demoInputBox">
    </div>
    <div class="contact-row">
        <label>Phone</label> <span id="subject-info" class="info"></span><br />
        <input type="text" name="subject" id="subject"
            class="demoInputBox">
    </div>
    <div>
        <label>Message</label> <span id="content-info" class="info"></span><br />
        <textarea name="content" id="content" class="demoInputBox"
            rows="3"></textarea>
    </div>
    <div style="text-align:center">
        <input type="submit" value="Send" name="send" class="btnAction" />
    </div>
</form>
<?php if(isset($_POST['send']))
{    
     $Username=$_POST['userName'];
     $email=$_POST['userEmail'];
     $phoneno=$_POST['subject'];
     $msg=$_POST['content'];
    if ($Username!="" && $email!="" && $phoneno!="" && $msg!="") 
     {
          $query="INSERT INTO contact VALUES('$Username','$email', '$phoneno','$msg')";
          $data=mysqli_query($db,$query);
          if($data){
               echo "<h2>Thanks for contacting Us...</h2>";
                    }
     }
     else
     {
          echo "All fiels are required";
     }
}
?>
<?php include 'footer.php';?>
</body>
</html>
