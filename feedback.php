<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <style>
    body {
        text-align:center;
        margin-top:150px;
      font-family: Arial, sans-serif;
      background-color:#1A5F7A;
    }

    h2 {
      text-align: center;
      color:white;
    }

    form {
      max-width: 400px;
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

    textarea {
      width: 90%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
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
    input[type="text"],input[type="email"]
    {
      width: 90%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"]:hover {
      background-color:red;
    }
    label{
           color:black;
           margin-top:10px;
    }
   .mmahesh {
    background-color:violet;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: all 0.3s ease;
  }
  
  .mmahesh:hover {
    background-color:blue;
    transform: scale(1.1);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }
  </style>
</head>
<body>

<h2>Feedback Form</h2>
<form action="feed.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="feedback">Feedback:</label>
  <textarea id="feedback" name="feedback" rows="4" required></textarea>

  <a href="feedback.php"><button class="mmahesh" onclick="ojasvi()">Submit Feedback</button></a>
<script>
  function ojasvi()
  {
    alert("successfully submitted");
  }
  </script>
</form>

</body>
</html>
