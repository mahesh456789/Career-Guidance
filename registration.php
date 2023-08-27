<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
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
      max-width: 420px;
      margin: 0 auto;
      padding: 20px;
      background-color:white;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 2.2);
    }

    label {
      display: block;
      margin-bottom: 5px;
      color:black;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 90%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid black;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color:black;
    }
    label
    {
      color:black;
    }
  </style>
</head>
<body>
<h2>Registration Form</h2>

<form action="reg.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="username" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <input type="submit" value="Register">
</form>
</body>
</html>
