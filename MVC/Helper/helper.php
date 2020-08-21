<?php
namespace Helper;

class Helper
{
    private static function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    public static function verificareDate($testSpot)
    {
        if (!empty($testSpot)) {
            $testSpot = Helper::testInput($testSpot);
            return $testSpot;
        }
    }
}
