<?php
 include 'config.php'; 

  $email  = $_POST['email']; 
 $sql="select * from user_1 where email = '$email'";
 $result=$con->query($sql);
 if ($result->num_rows>0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 
		 $question=$row['sequrity_question'];
		 $answer=$row['answer'];
	 }
 }
 
     
$message = "Answer the security question";
echo "<script type='text/javascript'>alert('$message');
var answer = prompt('$question');
if(answer == '$answer')
{
	alert('User verified.Change your password.');
		location.href = 'SupUserAcc.php';
} else 
{
        alert('Access denied.');
		location.href = 'login.php';
}
</script>";
?>

