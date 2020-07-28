<?
class Form{
private $method='';
private $action ='';
public function __construct($methodType, $action){
    $this->method=$methodType;
    $this->action=$action;
}
public function build():void{
 echo<<<HTML
  <html>

  <form method =  '<?php $method?>'  action= <?php echo $action ?>>
 <!-- fields -->
 <label for="nameID">Nume:</label><br>
 <input type="text" id="nameID" name="numePers" required> <br>

 </html>

HTML;

}
public function preventXSS($x){
    if (!empty($x)) {
        $x = testImput($x);
        return $x;
}
}
}
// numim metoda si action page-ul in instantiere
