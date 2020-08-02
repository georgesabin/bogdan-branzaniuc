<?
class Form{
private $method='';
private $action ='';

public function __construct(string $method, string $action){
    $this->method=$method;
    $this->action=$action;
}

public function preventXSS($x){
    if (!empty($x)) {
        $x = testImput($x);
        return $x;
}
}

public function build():string {

$form='';
$form .= sprintf('<form action="%s" method="%s">', $this->action, $this->method);
$form .='<input type="text" name="db" requierd>';
$form .='<input type="submit" value="submit">';
$form .='</form>';
return $form ;

}
}

$formObject = new Form('POST','index.php');
echo $formObject->build();
if (isset($_POST['db'])){

    $dbName=$formObject->preventXSS($_POST['db']);
    $dbObject=new Database($dbName);
    $dbObject->connectAndCreateDatabase();
    header("Location: index.php?mesaj=Baza de date a fost creata cu succes");
}
