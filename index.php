<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Bangun Datar</title>
    <style>
        body{
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        form{
            width: 400px;
            margin:auto;
        }
        form select,
        form button,
        form input{
            border-radius: 10px;
            border:1px solid grey;
            width:100%;
            box-sizing: border-box;
            margin:10px 0px;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1>Hitung Luas Bangun Datar</h1>
    <form action="hitung_rumus.php" method="POST">
        <select name="rumus" id="">
            <option value="segitiga">Segitiga</option>
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br>
        <input type="text" name="tinggi" placeholder="Masukan tinggi">
        <br>
        <input type="text" name="lebar" placeholder="Masukan Lebar">
        <br>
        <input type="text" name="alas" placeholder="Masukan Alas">
        <br>
        
        <input type="text" name="panjang" placeholder="Masukan panjang">
        <br>
        <input type="text" name="jari_jari" placeholder="Masukan Jari Jari">
        <br>
        <button>HITUNG</button>

    </form>
</body>
</html>