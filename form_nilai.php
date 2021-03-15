<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>

</head>
<body style="Background-color:green">
<center>
<div class="formulir">
  <div class="part1" style="color:yellow" >
    <form method="GET" action="array_siswa.php">
        Nama Panjang : <input type="text" class="isi" name="nama" value="" size="30"/><br><br>
        Mata Kuliah :
        <select name="matkul" class="isi">
            <option value="ARB">Bahasa Arab</option>
            <option value="ENG">Bahasa Inggris</option>
            <option value="IND">Bahasa Indonesia</option>
            <option value="BDA">Bahasa Daerah</option>
        <select><br><br>
        Nilai UTS/Mid Test : <input type="text" class="isi" name="nilai_uts" value="" size="6" /><br><br>
        Nilai UAS/Final Test : <input type="text" class="isi" name="nilai_uas" value="" size="6" /><br><br>
        Nilai Tugas/Praktikum : <input type="text" class="isi" name="nilai_tugas" value="" size="6"/><br><br>
        <input type="submit" class="button" value="save" name="process"/>
    </form>
  </div>
 </div>
</div>
</center>
</body>
<footer style="color:orange">
<b>@ Copyright: Taufiqur</b>
</footer>
