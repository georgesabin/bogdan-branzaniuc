<?php
namespace View;

session_start();
include_once '../inc/header.php';
include_once '../Helper/helper.php';
include_once '../Model/product.php';
include_once '../Controller/controller.php';
use Controller\ManipulateProduct;
use Helper\Helper;
use Model\Product;
?>
<div class="sticky-top p-3 bg-info d-flex justify-content-center" style="background-color:gray">
<h4><?php echo "you have " . count($_SESSION['shopping cart']) . " " . "articles added in your cart" ?></h4>
<?php echo Helper::actionButton("shoppingCartView.php", "see shopping cart", "POST", "See your Shopping Cart"); ?>
</div>
<br>
<br>
<br>
<div class='container'>

<?php
$productConn = new Product;
$inventar = new ManipulateProduct($productConn);

$inventar->showProduct();
if (isset($_POST["productId"])) {
    $_SESSION['shopping cart'][] = ["id" => $_POST["productId"], "quantity" => $_POST["quantity"], "color" => $_POST["color"], "model" => $_POST["model"]];

    $alyasSession = $_SESSION['shopping cart'];
    foreach ($alyasSession as $value) {
        $quantities[] = $value['quantity'];
        unset($value['quantity']);
        $value = $value['id'] . "," . $value['color'] . "," . $value['model'];
        $session[] = $value;

    }
    $strings = array_combine($session, $quantities);
    array_unique($strings);
    //var_dump($strings);
    $sessionTest = [];
    foreach ($strings as $key => $value) {
        $arr = explode(',', $key);
        //var_dump($arr);
        $value = [$arr[0], $value, $arr[1], $arr[2]];
        $keys = ["id", "quantity", "color", "model"];
        $value = array_combine($keys, $value);
        $sessionTest[] = $value;
    }

    $_SESSION['shopping cart'] = $sessionTest;

}
