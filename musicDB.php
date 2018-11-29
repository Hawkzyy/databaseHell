<?php

  $conn = mysqli_connect('localhost', 'ryan', 'password', 'music');
    if (!$conn) {
      die("Connection Failed: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM Song";
    $result = mysqli_query($conn, $sql);

    // mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Music Database</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/music.css" type="text/css"/>
  <link rel="stylesheet" href="./css/bootstrap.css" type="text/css"/>
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
            <div class="container-fluid row">
                <div class="col-md-5 noshrink">
                    <a class="navbar-brand pull-left" href="">Music Library</a>
                </div>
                <div class="col-md-2">
                    <form class="pull-left" action="http://www.randyconnolly.com" method="get">
                            <div class="input-group">
                                <input class ="form-control" name="search" type="text" placeholder="Search">
                                <div class= "input-group-btn">
                                    <button  type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </nav>
  </header>
  <main>
    <div class="panel-body">
      <div class="pagewidth container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- <h1>Music Library</h1> -->
            <table border = 1>
            <tr>
              <th>Title</th>
              <th>Artist</th>
              <th>Album</th>
              <th>Genre</th>
              <th>Year</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <td>'.$row['title'].'</td>
                    <td>'.$row['artist'].'</td>
                    <td>'.$row['album'].'</td>
                    <td>'.$row['genre'].'</td>
                    <td>'.$row['year'].'</td>
                </table>';
              }
            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
