<?php
namespace Helper;

class Helper
{

    public static function buildForm($id): string
    {
        $form = '<form action="../View/index.php" method=POST> <label for="color">color:</label>
        <select name="color" id="color">
        <option value="red">red</option>
        <option value="dark">dark</option>
        </select>';
        $form .= '<label for="quantity">quantity:</label>
        <select name="quantity" id="quantity">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        </select>';
        $form .= sprintf('<input type="hidden" name="productId" value="%u">', $id);

        $form .= '<form> <label for="model">model:</label>
        <select name="model" id="model">
        <option value="poker deck">poker deck</option>
        <option value="cardistry deck">cardistry deck</option>
        </select>';
        $form .= '<input type="submit" value= "adauga in cos">
        </form>';

        return $form;
    }
    public static function actionButton($action, $name, $method, $lable)
    {
        $button = sprintf('<form action="%s" method="%s">', $action, $method);
        $button .= sprintf(' <button type="submit" name="%s" formaction="%s">%s</button>', $name, $action, $lable);
        $button .= '</form>';
        return $button . "</br>";
    }
    public static function noDouble(array $brutSession): array
    {
        foreach ($_SESSION['shopping cart'] as $value) {

        }
    }
    public static function addOrRemoveQty($actionPage, $addName, $removeName)
    {
//-/+ , cu optiunea de input manual, in caz ca magazinul vinde o scobitoare si clientul vrea 100 de scobitori.
        $form = sprintf('<form action="%s">', $actionPage);
        $form .= '<label for="quantity">Quantity (between 1 and 5):</label>';
        $form .= '<input type="number" id="quantity" name="quantity" min="1" max="100">';
        $form .= sprintf('<input type="submit" value="add" name="%s" >', $addName);
        $form .= sprintf('<input type="submit" value="remove" name="$s" ></form>', $removeName);
        return $form;
    }
}
