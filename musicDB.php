<?php
session_start();

try {

  include_once(checksession.php);

} catch(PDOException $e) {
  die($e -> getMessage());
}
// $con = mysqli_connect("localhost", "root", "root", "northwind");
//   if (!$con)
//     die("Failed: ".mysqli_connect_error());
//
//   $result = mysqli_query($con, "SELECT * FROM shippers");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Music Database</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="music.css">
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <header>
  </header>
  <main>
    <div class="panel-body">
      <div class="pagewidth container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Music Library</h1>
            <table border = 1>
              <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Duration</th>
                <th>Year</th>
              </tr>
                <td>Song1</td>
                <td>Artist Name</td>
                <td>Rock</td>
                <td>5:00</td>
                <td>1996</td>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
