<?php
$prevent = array(
  'header',
  'footer',
  'sidebar'
);
if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];
    $path_page = 'template/' . $page . '.php';

    if (file_exists($path_page) && !in_array($page, $prevent)) {
        require $path_page;
    } else {
        require 'template/index.php';
    }
} else {
  require 'template/index.php';
}
 ?>
