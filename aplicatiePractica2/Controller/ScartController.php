<?php
namespace controller;

include_once '../Model/ScartModel.php';
include_once '../Helper/helper.php';
use Helper\Helper;

class ShoppingCart
{
    private $shoppingCart = array();
    private $modelSelect;

    public function __construct($session, $modelSelect)
    {
        $this->shoppingCart = $session;
        $this->modelSelect = $modelSelect;
    }

    const currency = " USD ";

    public function showShoppingCart()
    {
        //var_dump($this->shoppingCart);
        //if value[id]&&value[color]&&value[model] aduna cantitatile.

        $total = 0;
        $transport = 10;
        $freeTransportLimit = 200;
        $grandTotal = 0;

        foreach ($this->shoppingCart as $key => $value) {
            $product = $this->modelSelect->getProduct($value['id']);

            $priceQty = $product['price'] * $value['quantity'];
            $vat = round(0.19 * $priceQty, 2);
            //$picture = $product['picture'];
            // product boorstrap
            ?>
<html>
           <div>
            <div><?php echo Helper::actionButton("shoppingCartView.php", "deleteProduct" . $key, "POST", "delete this article from shopping cart"); ?></div>
            <h1><?php echo "product name: " . $product['name'] . "</br>"; ?></h1>
            <h5><?php echo "quantity: " . $value['quantity']; ?></h5>
            <?php echo Helper::addOrRemoveQty("shoppingCartView.php", "add" . $key, "remove" . $key) . "</br>"; ?>
            <?php echo self::currency . "</br>"; ?>
            <?php echo "total price: " . $priceQty . " "; ?>
            <?php echo self::currency . "</br>"; ?>
            <?php echo "vat: " . $vat . " " . self::currency . "</br>"; ?>
            <?php echo "model: " . $value['model'] . "</br>"; ?>
            <?php echo "color type: " . $value['color'] . "</br>"; ?>
            <?php echo $product['edition'] == false ? "unlimited " : " limited "; ?>
            <?php echo " edition " . "</br>"; ?>
            <?php echo $product['in_stock'] == true ? "in stock" . "</br>" : "out of stock (takes 4 more days to deliver)" . "</br>"; ?>
            <?php echo $product['producer'] . "</br></br></br></br></br></br></br>"; ?>
            </div>
</html>
<?php
}
        $total += $priceQty;
        $total <= 200 ? $grandTotal = $total + $transport : $grandTotal = $total;
        $total <= 200 ? $transport = 10 : $transport = 0;
        $totalVat = round(0.19 * $total, 2);
        // final cart boorstrap
        ?>
<html>
        <?php echo "total: " . $total . " " . self::currency . "</br>"; ?>
        <?php echo "Vat: " . $totalVat . " " . self::currency . "</br>"; ?>
        <?php echo $total < 200 ? " the transport fee is $transport" . self::currency . "for orders under $freeTransportLimit" . self::currency . "</br>" : "transport fee: " . $transport = 0 . self::currency . "</br>"; ?>
        <?php echo "grand total: " . $grandTotal . self::currency . "</br>"; ?>
</html>
        <?php
}
    public function calculate()
    {

        foreach ($this->shoppingCart as $key => $value) {
            //delete the whole article
            if (isset($_POST["deleteProduct" . $key])) {
                unset($this->shoppingCart[$key]);
                $this->shoppingCart = array_values($this->shoppingCart);
            }
            //mareste cantitatea
            if (isset($_POST["add" . $key])) {
                $_POST['quantity'] = Helper::verificareDate($_POST['quantity']);
                $this->shoppingCart[$key]['quantity'] += $_POST['quantity'];

                //scade cantitatea
            } elseif (isset($_POST["remove" . $key])) {
                $_POST['quantity'] = Helper::verificareDate($_POST['quantity']);
                $this->shoppingCart[$key]['quantity'] -= $_POST['quantity'];
                //caz red, cantitatea devine 0
                if ($this->shoppingCart[$key]['quantity'] <= $_POST["remove" . $key]) {
                    unset($this->shoppingCart[$key]);
                    $this->shoppingCart = array_values($this->shoppingCart);
                }

            } elseif (isset($_POST["remove"]) && !is_numeric($_POST["remove" . $key])) {
                $_POST["remove" . $key] = 0;

            } elseif (isset($_POST["add"]) && !is_numeric($_POST["add" . $key])) {
                $_POST["add" . $key] = 0;
            }

            $_SESSION['shopping cart'] = $this->shoppingCart;
        } //var_dump($this->shoppingCart);
    }
}
