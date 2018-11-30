<?php

$field ='songID';
$sort = 'ASC';
$order = '';

$sql = "SELECT * FROM Song";

if (isset($_GET['sorting'])) {

    if ($_GET['sorting'] == 'ASC') {
      $sort = 'DESC';
      $order = ' &#8595';

    } else {
      $sort = 'ASC';
      $order = ' &#8593';
    }
}

if (isset($_GET['field'])) {

    if ($_GET['field'] == 'title') {
      $field = 'title';

    } else if ($_GET['field'] == 'artist') {
      $field = 'artist';

    } else if ($_GET['field'] == 'album') {
      $field = 'album';

    } else if ($_GET['field'] == 'genre') {
      $field = 'genre';

    } else if ($_GET['field'] == 'year') {
      $field = 'year';

    } else {
      $field = 'songID';
    }

}

$sql = "SELECT * FROM Song ORDER BY $field ASC";

?>
