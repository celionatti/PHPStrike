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

function getSingleData($data, $dataKey)
{
    if ($data && isset($data->$dataKey)) {
        return $data->$dataKey;
    } else {
        return null;
    }
}

function getCombinedData($data, ...$dataKeys)
{
    if ($data) {
        $combinedData = '';

        foreach ($dataKeys as $dataKey) {
            if (isset($data->$dataKey)) {
                $combinedData .= $data->$dataKey . ' ';
            } else {
                return null; // Return null if any of the keys is not set.
            }
        }

        return trim($combinedData); // Remove trailing space and return the combined data.
    } else {
        return null;
    }
}

// Function to generate an HTML string based on user verification status
function verificationStatus($verificationStatus)
{
    if ($verificationStatus == 1) {
        return '<span style="color: green;">Verified</span>';
    } else {
        return '<span style="color: red;">Not Verified</span>';
    }
}
