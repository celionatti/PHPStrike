<?php

declare(strict_types=1);

use celionatti\Bolt\Authentication\BoltAuthentication;

/**
 * Title: PhpStrike Framework
 * Author: Celio Natti
 * Year: 2023
 */

function isLoggedIn()
{
    return BoltAuthentication::currentUser();
}

function getSingleData($dataKey)
{
    $user = isLoggedIn();

    if ($user && isset($user->$dataKey)) {
        return $user->$dataKey;
    } else {
        return null;
    }
}

function getCombinedData(...$dataKeys)
{
    $user = isLoggedIn();

    if ($user) {
        $combinedData = '';

        foreach ($dataKeys as $dataKey) {
            if (isset($user->$dataKey)) {
                $combinedData .= $user->$dataKey . ' ';
            } else {
                return null; // Return null if any of the keys is not set.
            }
        }

        return trim($combinedData); // Remove trailing space and return the combined data.
    } else {
        return null;
    }
}