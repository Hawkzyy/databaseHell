<?php

  $conn = mysqli_connect('localhost', 'ryan', 'password', 'music');
    if (!$conn) {
      die("Connection Failed: ".mysqli_connect_error());
    }

    // mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Music Database</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" href="/css/nav.css" type="text/css"/>
  <link rel="stylesheet" href="/css/music.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <script type="text/javascript" src="/js/music.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
                <div class="col-md-4 noshrink">
                  <div class="logoFont">
                    <a class="navbar-brand pull-left" href="musicDB.php?field=songID">Music Library</a>
                  </div>
                </div>
                <div class="col-md-3">
                  <form class="pull-left">
                          <div class="input-group">
                              <input class ="form-control" name="search" type="text" placeholder="Search" onsubmit="searchBar();">
                              <div class= "input-group-btn">
                                  <button type="text" class="btn btn-primary">
                                      <span class="glyphicon glyphicon-search"></span>
                                  </button>
                              </div>
                          </div>
                      </form>
                </div>
                <div class="col-md-5">
                  <ul class="nav navbar-nav pull-right">
                  <li><a href="#"><span class="glyphicon glyphicon-upload"></span> Add Track</a></li>
                </ul>
                </div>
        </nav>
  </header>
  <main>
    <div class="panel-body">
      <div class="pagewidth container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div>
            <table>
            <tr>
              <th><!--Numbers --></th>
              <th><a href="musicDB.php?field=title">Title</a></th>
              <th><a href="musicDB.php?field=artist">Artist</a></th>
              <th><a href="musicDB.php?field=album">Album</a></th>
              <th><a href="musicDB.php?field=genre">Genre</a></th>
              <th><a href="musicDB.php?field=year">Year</a></th>
            </tr>
            <?php

            include('search.php');

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_array($result)) {
                echo '
                <tr>
                    <td onclick="cellLink()">'.$row['songID'].'</td>
                    <td onclick="cellLink()">'.$row['title'].'</td>
                    <td onclick="cellLink()">'.$row['artist'].'</td>
                    <td onclick="cellLink()">'.$row['album'].'</td>
                    <td onclick="cellLink()">'.$row['genre'].'</td>
                    <td onclick="cellLink()">'.$row['year'].'</td>
                </tr>';

              }
            }

            ?>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
