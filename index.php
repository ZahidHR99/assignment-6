<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 6</title>
</head>

<style>
* {
  box-sizing: border-box;
}

input{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row::after {
  content: "";
  display: table;
  clear: both;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
</style>

<body>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>

<div class="container">
<form action="process.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Name:</label>
    </div>
    <div class="col-75">
        <input type="text" id="name" name="name" required><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    <label for="email">Email:</label><br>
    </div>
    <div class="col-75">
    <input type="email" id="email" name="email" required><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    <label for="email">Password:</label><br>
    </div>
    <div class="col-75">
    <input type="password" id="password" name="password" required><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    <label for="email">Profile Picture:</label><br>
    </div>
    <div class="col-75">
    <input type="file" id="profile_pic" name="profile_pic" accept="image/*" required><br>
    </div>
  </div>

    <div class="row">
        <input type="submit" value="Submit">
    </div>
  </form>
</div>


</body>
</html>