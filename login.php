<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
        text-align:center;
        margin-top:200px;
      font-family: Arial, sans-serif;
      background-color:#1A5F7A;
    }

    h2 {
      text-align: center;
      color:white;
    }

    form {
      max-width:400px;
      margin: 0 auto;
      padding: 20px;
      background-color:white;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 3.3);
    }

    label {
      display: block;
      margin-bottom: 5px;
      color:;black
    }

    input[type="text"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color:#fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color:red;
    }
  </style>
</head>
<body>

<h2>Login Form</h2>

<form action="log.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <input type="submit" value="Login">
</form>

</body>
</html>

