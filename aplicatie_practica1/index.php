<?php /* a) Creează un fișier PHP (index.php) ce să conțină un formular cu următoarele field-uri:
- text input → nume eveniment
- date input → data start eveniment
- date input → data sfarsit eveniment
- textarea → descriere eveniment
- checkbox-uri → 3-4 nume de persoană care vor participa la
eveniment (vor fi trimise la server sub formă de array)
- button de submit formular
 */
session_start();

setcookie("vizite", 0, time() - 3000);

$count = isset($_COOKIE["vizite"]) ? ++$_COOKIE["vizite"] : 0;

if (isset($_COOKIE["vizite"])) {
    if ($_COOKIE["vizite"] <= 1) {
        echo "Bine ai venit! Nu ne-ai mai vizitat pana acum. ";

    } else {
        echo "Ne-ai mai vizitat de" . $count . "ori!";
    }
}

?>

<html>
<form method="POST" action="salveaza.php" >
 <!-- fields -->
  <label for="evNameId">Event name:</label><br>
  <input type="text" id="evNameId" name="evName" required> <br>

  <label for="evStartId">Event start date:</label><br>
  <input type="date" id="evStartId" name="evStartDate" value="<?php echo date("Y-m-d"); ?>" required><br>

  <label for="evFinishId">Event finish date:</label><br>
  <input type="date" id="evFinishId" name="evFinishDate" required><br><br>

  <label for="descriptionId">Event Description:</label><br>
  <input type="textarea" id="descriptionId" name="eventDescription"required><br><br>

  <!-- name- choeck-boxex -->

  <input type="checkbox" id="pers1" name="persoana[]" value="Scotarlea Ion">
  <label for="pers1">Scotarlea Ion</label><br>

  <input type="checkbox" id="pers2" name="persoana[]" value="Pepenut Cosmin">
  <label for="pers2">Pepenut Cosmin</label><br>

  <input type="checkbox" id="pers3" name="persoana[]" value="Marinel Strasnic">
  <label for="pers3">Marinel Strasnic</label><br>

  <input type="checkbox" id="pers4" name="persoana[]" value="Gogosel Gologan">
  <label for="pers4">Gogosel Gologan</label><br>

  <br>
  <input type="submit" value="Submit">
</form>
</html>
