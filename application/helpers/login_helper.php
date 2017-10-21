<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-9-7
 * Time: 下午9:56
 */
function isLoginIn()
{
    if (isset($_SESSION['name']) && isset($_SESSION['username']) && isset($_SESSION['userID'])){
        return true;
    }
    return false;
}

