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

        $form .= '<form> <label for="model">choose the model: </label>
        <select name="model" id="modeltype">
        <option value="poker_dek">poker dek</option>
        <option value="cardistry_dek">cardistry dek</option>
        </select>';
        $form .= '<input type="submit" value= "adauga in cos">
        </form>';

        return $form;
    }
    public static function actionButton($action, $name, $method, $lable)
    {
        $button = sprintf('<form class="btn " action="%s" method="%s">', $action, $method);
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
        $form = sprintf('<form action="%s" method="POST">', $actionPage);
        $form .= '<label for="quantity">add/remove quantity: </label>';
        $form .= '<input type="number" id="quantity" name="quantity" min="1" max="100" required>'; //aici se pot face modificari mai user-friendly
        $form .= sprintf('<input type="submit" value="add" name="%s">', $addName);
        $form .= sprintf('<input type="submit" value="remove" name="%s"> </form>', $removeName);
        return $form;
    }
    private static function testInput($data): string
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
    public static function emailForm($actionPage, $name, $method)
    {
        $form = sprintf('<form action="%s" method="%s"', $actionPage, $method);
        $form .= '<lable for="email"> Write your email here: </lable><input type="email" name="email" required><br>';
        $form .= sprintf('<input type="submit" value="Submit email" name="%s"><br>', $name);
        return $form;
    }
    public static function sendEmail($postEmail)
    {
        $to_email = $postEmail;
        $subject = "Simple Email Test via PHP";
        $body = "Hi,nn This is test email send by PHP Script";
        $headers = "From: bbranzaniuc53@gmail.com";
        ini_set('SMTP', 'smtp.gmail.com');
        ini_set('smtp_port', '587');
        ini_set('sendmail_from', 'bbranzaniuc53@gmail.com');
        ini_set('sendmail_path ', '"\"C:\wamp64\sendmail\sendmail.exe\" -t"');
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
    }
}
