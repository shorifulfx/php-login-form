<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    margin: 0px;
}

/* Full-width input fields */


input[type=text], input[type=password] {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}



/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 400px;

}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}


.login_box{
    width: 400px;
    margin: auto;
    border: 1px solid skyblue;
    box-sizing: border-box;
    overflow: hidden;
    padding: 20px 20px;

}
.login_box h2{
    text-align: center;

}
.login_box a{
    padding-left: 20px;

}





</style>


</head>
<body>
    <div class="login_box">
        <h2>User Login</h2>
<hr/>
    <form action="/action_page.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        
            <button type="submit">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
    </form>
       <hr/>
        <a href="registration.php">Create an account</a>

    </div>


</body>
</html>