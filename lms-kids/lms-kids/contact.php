<?php   
 //connection to database
$connection=mysqli_connect('localhost','root','','lms');
 
 

if(isset($_POST['submit']))  {
	$username = $_POST['username'];
    $email    = $_POST['email'];
     $subject    = $_POST['subject'];
     $message    = $_POST['message'];



    $error = [

        'username'=> '',
        'email'=>'',
        

    ];


    if(strlen($username) < 4){

        $error['username'] = 'Username needs to be longer';


    }

     if($username ==''){

        $error['username'] = 'Username cannot be empty';


    }


     


    if($email ==''){

        $error['email'] = 'Email cannot be empty';


    }

     

    

} 

 $query = "INSERT INTO contact(username,email,subject,message) ";
 $query .= "VALUES ('$username', '$email' ,'$subject' ,'$message')";
    
   $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' );
    
    } else {
     echo "Submitted successfully!!";
   
    
    }
?>