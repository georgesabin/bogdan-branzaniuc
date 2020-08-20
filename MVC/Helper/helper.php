<?php
namespace Helper;

class Helper
{
    public static function numberOfProducts($pdo): int
    {
        
        $product = $pdo->query("SELECT * FROM product")->fetchAll();
        return count($product);
    }
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
