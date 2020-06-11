<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['submit'])){
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
  $ids=0;

	$sql = "INSERT INTO customer (fname, lname, email,phone,id)
VALUES ('$fname', '$lname', '$email', '$phone','$ids')";
$ids = $ids+1;

if ($conn->query($sql) === TRUE) {
  echo "Thank you, your response has been recorded";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
</br>
</br>
</br>
 <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><?php echo $fname ?></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Last Name</td>
                        <td><?php echo $lname ?></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Email</td>
                        <td><?php echo $email ?></td>
                     </tr>
                  
				  <tr>
                        <td width = "100">Phone Number</td>
                        <td><?php echo $phone ?></td>
                     </tr>
					 
                   
                  
                    
                  
                  </table>
				  </br>
</br>
</br>
				  <?php
}

?>


 <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "f_name" type = "text" 
                           id = ""></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "l_name" type = "text" 
                           id = ""></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Email</td>
                        <td><input name = "email" type = "email" 
                           id = ""></td>
                     </tr>
                  
				  <tr>
                        <td width = "100">Phone Number</td>
                        <td><input name = "phone" type = "text" 
                           id = ""></td>
                     </tr>
					 
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "submit" type = "submit" id = "add" 
                              value = "Submit">
                        </td>
                     </tr>
                  
                  </table>
               </form>
