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
$form .='<input type="text" name="db"/>';
$form .='<input type="submit">';
$form .='</form>';
return $form ;
}
}

$form = new Form('POST','database.php',);

echo $form->build();
