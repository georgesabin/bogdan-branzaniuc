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
        $form .= sprintf('<label for="productId">productId:</label>
        <select name="productId" id="productId">
        <option value="%u">%u</option>
        </select>', $id, $id);
        $form .= '<form> <label for="model">model:</label>
        <select name="model" id="model">
        <option value="poker deck">poker deck</option>
        <option value="cardistry deck">cardistry deck</option>
        </select>';
        $form .= '<input type="submit" value= "adauga in cos">
        </form>';

        return $form;
    }
}
