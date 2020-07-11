<html>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    select the file:
    <input type="file" name="fileName" id="fileIdName"required><br>
    <!-- radio- buttons -->
    <input type="radio" id="dimensiuneFisier" name="proprietati" value="1"required>afisare dimensiune fisier<br>
    <input type="radio" id="tipFisier" name="proprietati" value="2"required>afisare tip fisier<br>
    <input type="radio" id="numeFisier" name="proprietati" value="3"required>afisare nume fisier fara extensie<br>
    <input type="radio" id="extensieFisier" name="proprietati" value="4"required>afisare extensie fisier<br>
    <input type="radio" id="stergereFisier" name="proprietati" value="5"required>Stergere fisier<br><br><br>

    <input type="submit" value="Upload File" name="submit"><br>
    <lable>

</html>
