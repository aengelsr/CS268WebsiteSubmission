
<?php require_once 'connect.php';?>


<?php

// getting all values from the HTML form
     if(isset($_POST['create-user']))
     {
         $email = $_POST['email'];
         $pass = $_POST['pass'];
     }
 
    
     // using sql to create a data entry query
     $sql = "INSERT INTO users (id, email, pass) VALUES ('0', '$email', '$pass')";
 
     // send query to the database to add values and confirm if successful
     $rs = mysqli_query($con, $sql);
     if($rs)
     {
        echo "<script>
        var confirmAlert = confirm('User created successfully!');
        if (confirmAlert == true) {
            // Redirect to a different page
            window.location.href = 'http://localhost:8080/CS268Website-1/create-user.php';
        } else {
            window.location.href = 'http://localhost:8080/CS268Website-1/create-user.php';
        }
      </script>";
     }


     
  
    // close connection
    mysqli_close($con);

    ?>
