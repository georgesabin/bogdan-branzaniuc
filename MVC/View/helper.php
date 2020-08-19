<?php
namespace View;

class Helper
{

    private static function testImput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    public static function verificareDate($testSpot)
    {
        if (!empty($testSpot)) {
            $testSpot = Helper::testImput($testSpot);
            return $testSpot;
        }
    }
}
