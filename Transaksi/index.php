<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Tour</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('foto.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        h2 {
            text-align: center;
            color: #fff;
            padding: 20px;
            margin: 0;
            background-color: rgba(0, 64, 128, 0.8);
            border-bottom: 2px solid #ddd;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.7); /* Latar belakang semi-transparan (tingkat transparansi diatur dengan nilai 0.7) */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #004080;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        input[type="submit"] {
            background-color: #004080;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #00254a;
        }
    </style>
</head>

<body>
    <h2>Formulir Pemesanan Cozy Tour & Travel</h2>

    <form action="proses.php" method="post">
        <label for="nama">Nama Penumpang:</label>
        <input type="text" name="nama" required>

        <label for="nomor">Nomor Telepon:</label>
        <input type="text" name="nomor" required>

        <label for="kelas">Kelas Perjalanan (pajak 10%):</label>
        <select name="kelas" required>
            <option value=""></option>
            <option value="entry">Entry (Rp 300.000/orang)</option>
            <option value="medium">Medium (Rp 500.000/orang)</option>
            <option value="high">High (Rp 750.000/orang)</option>
        </select>

        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
        <select name="jenis_kendaraan" required>
            <option value=""></option>
            <option value="Medium Bus">Medium Bus</option>
            <option value="Big Bus">Big Bus</option>
            <option value="Elf canter">Elf Canter</option>
        </select>

        <label for="jumlah_orang">Jumlah Penumpang:</label>
        <input type="number" name="jumlah_orang" required>

        <input type="submit" value="Pesan Tour" name="submit">
    </form>
</body>

</html>
