<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User List</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h1>User List</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $fp = fopen('users.csv', 'r');
      while (($data = fgetcsv($fp)) !== false) {
        echo "<tr>";
        echo "<td>{$data[0]}</td>";
        echo "<td>{$data[1]}</td>";
        echo "<td><img src='uploads/{$data[2]}' width='100'></td>";
        echo "</tr>";
      }
      fclose($fp);
      ?>
    </tbody>
  </table>
</body>
</html>
