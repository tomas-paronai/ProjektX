<?php
/**
 * Created by PhpStorm.
 * User: Matus Kacmar
 * Date: 8. 12. 2015
 * Time: 17:08
 */
if($_SESSION['username'] != "admin") {
    die();
}
?>
<link rel="stylesheet" type="text/css" href="libraries/css/admin-panel.css">
<aside class="side-nav">
<nav class="admin-nav">
    <ul>
        <li><a href="?page=private/pageSettings&settings=users">Users</a></li>
        <li><a href="?page=private/pageSettings&settings=statistics">Statistics</a></li>
    </ul>
</nav>
</aside>
<div class="admin-panel">
    <?php
    if(isset($_GET['settings'])) {
        $settings = $_GET['settings'];
    }
    else {
        $settings = "";
    }

    if($settings == "" || $settings == "statistics") {
        include 'view/pages/private/statistics.php';
    }
    else {
        $fileName = $settings . '.php';
        include_once ('view/pages/private/' . $fileName);
    }
    ?>
</div>
