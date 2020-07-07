<html>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    select the file:
    <input type="file" name="fileName" id="fileIdName"><br>
    <!-- radio- buttons -->
    <input type="radio" id="dimensiuneFisier" name="proprietati" value="1">afisare dimensiune fisier<br>
    <input type="radio" id="tipFisier" name="proprietati" value="2">afisare tip fisier<br>
    <input type="radio" id="numeFisier" name="proprietati" value="3">afisare nume fisier fara extensie<br>
    <input type="radio" id="extensieFisier" name="proprietati" value="4">afisare extensie fisier<br>
    <input type="radio" id="stergereFisier" name="proprietati" value="5">Stergere fisier<br><br><br>

    <input type="submit" value="Upload File" name="submit"><br>
    <lable>

</html>
