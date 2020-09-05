<?php
namespace Controller;

use Helper\Helper;

include_once '../inc/header.php';
include_once '../Model/product.php';
include_once '../Helper/helper.php';
class ManipulateProduct
{
    private $productConn;
    public function __construct($productConn)
    {
        $this->productConn = $productConn;
    }
    public function showProduct(): void
    {
        $products = $this->productConn->showProduct();
        foreach ($products as $product) {

            $price = $product['price'];
            $id = $product['id_product'];?>
            <div class="row">
            <div class="class=col-md-4">
           <h5><?php echo "produs:" . $product['name']; ?></h5>
           <?php echo Helper::buildForm($id); ?>
           <h5><?php echo "price: " . $price . $product['currency'] . "</br>"; ?></h5>
           <?php echo $product['in_stock'] == true ? "produsul este in stoc " . "</br>" : " produsul nu este in stoc, comanda va intarzia 4 zile " . "</br>"; ?>
           <?php echo "producator: " . $product['producer'] . "</br>"; ?>
           <?php echo $product['edition'] == 1 ? "Editie limitata" : "Editie nelimitata"; ?>
           </div>

           <div class="col-sm">
           <!-- img1 - dark cardistry dek -->
              <img src=<?php echo $product['img1']; ?> class="img-rounded" width = "100%" alt="test-image1">
           </div>
           <div class="col-sm">
           <!-- img2 - dark poker dek -->
              <img src=<?php echo $product['img2']; ?> class="img-rounded" width = "100%" alt="test-image2">
           </div>
           <div class="col-sm">
           <!-- img3 - red cardistry dek -->
              <img src=<?php echo $product['img3']; ?> class="img-rounded" width = "100%" alt="test-image3">
              </div>
              <div class="col-sm">
           <!-- img4 - red poker dek -->
              <img src=<?php echo $product['img4']; ?> class="img-rounded" width = "100%" alt="test-image4">

            </div>
            </div>

            <?php echo "</br></br>"; ?>


<?php
}
    }
}
