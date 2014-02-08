<?php
/**
 * Created by PhpStorm.
 * User: Vishwajeet
 * Date: 8/2/14
 * Time: 12:23 AM
 */
function checkIfEmpty($postValue)
{
    if (empty($postValue))
    {
        return false;
    }
    else
    {
        $value = filterInput($postValue);
        return $value;
    }
}

function filterInput($postData)
{
    $data = trim($postData);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $postData;
}
