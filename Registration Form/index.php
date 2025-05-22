<?php
 include"./db_config.php";
 session_start();
 $error=array();

 if($_SERVER["REQUEST_METHOD"]==="POST"){
        $_SESSION["username"]=filter_var($_POST["username"],FILTER_SANITIZE_STRING);
        $_SESSION["gmail"]=filter_var($_POST["gmail"],FILTER_SANITIZE_EMAIL);
        $_SESSION["userType"]=$_POST["usertype"];
        $pass=$_POST["password"];
        $c_pass=$_POST["confirm_password"];

        $sql= "SELECT email FROM users where email= ? ";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$_SESSION["gmail"]);
        $stmt->execute();
        $stmt->store_result();

    if(!($c_pass===$pass)){
        $error[]="Password Did Not Match";
    }

    if($stmt->num_rows>0)
    {
        $error[]="Email already Exists";
    }
    if(empty($error)){
        $_SESSION["password"]=password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO USERS (name,email,userType,password) VALUES (?,?,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("ssss",$_SESSION["username"],$_SESSION["gmail"],$_SESSION["userType"],$_SESSION["password"]);
        $stmt->execute();
        header("Location:login.php");
    }
 }
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Register</h2>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="space-y-5">
      
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
        <input type="text" id="username" name="username" required
               class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none"/>
      </div>
      
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" name="gmail" required
               class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none"/>
      </div>

      <!-- User Type Dropdown -->
      <div>
        <label for="usertype" class="block text-sm font-medium text-gray-600">User Type</label>
        <select id="usertype" name="usertype" required
                class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none">
          <option value="">Select User Type</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
      
      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none"/>
      </div>
      
      <!-- Confirm Password -->
      <div>
        <label for="confirm_password" class="block text-sm font-medium text-gray-600">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required
               class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none"/>
      </div>
      
      <!-- Submit Button -->
      <button type="submit"
              class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-200">
        Register
      </button>

      <p>Already have a account: <a style="color:blue" href="./login.php">Login</a> </p>
    </form>
    <div style="color:red">
    <?php
            if(!empty($error)){
                foreach($error as $e){
                echo $e."<br>";
            }
        };
    
    
    ?>


</div>
  </div>


</body>
</html>
