
<?php
/**
 * Created by PhpStorm.
 * User: Dominik Kolesar
 * Date: 5. 12. 2015
 */
?>

<link rel="stylesheet" type="text/css" href="libraries/css/reg-acc.css">






<link rel="stylesheet" href="tab2.css">

<div id="tab">
    <div class="title-page">
        <h1>ACCOUNT SETTINGS</h1>
    </div>
    <div id="formulars"class="group">
        <div id="menu-content">
            <ul id="menu">
                <li><a href="#tab1">REGISTRATION</a></li>
                <li><a href="#tab2">RECOVER PASSWORD</a></li>
            </ul>
        </div>

        <div id="all-tab">
            <div id="tab1" class="tab-content">

                <form class="form" action="" method="post">
                    <ul>
                        <li><input class="input" type="text" placeholder="name" name="name"> </li>
                        <li><input class="input" type="text" placeholder="sure-name" name="sure-name"> </li>
                        <li><input class="input" type="email" placeholder="email" name="email"> </li>
                        <li><input class="input" type="password" placeholder="password" name="password"></li>
                        <li><input class="submit-button"  type="submit" value="REGISTER"></li>
                    </ul>
                </form>
            </div>

            <div id="tab2" class="tab-content">

                <form class="form" action="" method="get">
                    <ul>
                        <li><input class="input" type="email" placeholder="email" name="name"> </li>
                        <li><input class="submit-button"  type="submit" value="RECOVER"></li>
                    </ul>
                </form>

            </div>
        </div>
    </div>
</div>
