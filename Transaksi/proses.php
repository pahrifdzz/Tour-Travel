<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Biaya Perjalanan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('foto2.jpg'); /* Replace 'foto.jpg' with your image file */
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background-color: rgba(0, 64, 128, 0.8); /* Dark blue form with some transparency */
            padding: 20px;
            border-radius: 0 0 10px 10px; /* Adjusted border-radius for bottom corners */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
            top: -20px;
            z-index: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .total-cost {
            font-weight: bold;
            color: red; /* Red color for total cost */
        }

        h3 {
            text-align: center;
            font-size: 70px; /* Change to desired size */
            color: red; /* Red color for heading */
            margin: 20px 0;
        }

        p {
            color: #fff;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST")
        if ($_POST["submit"]) {
            $nama = $_POST["nama"];
            $nomor = $_POST["nomor"];
            $kelas = $_POST["kelas"];
            $jumlah_orang = $_POST["jumlah_orang"];
            $jenis_kendaraan = $_POST["jenis_kendaraan"];
            $biaya_per_orang = 0;

            switch ($kelas) {
                case 'entry':
                    $biaya_per_orang = 300000;
                    break;

                case 'medium':
                    $biaya_per_orang = 500000;
                    break;

                case 'high':
                    $biaya_per_orang = 750000;
                    break;

                default:
                    // Default if kelas is not valid
                    break;
            }

            $total_biaya = $biaya_per_orang * $jumlah_orang;

            // Calculate tax (10%)
            $tax_percent = 10;
            $tax_amount = ($total_biaya * $tax_percent) / 100;

            // Update total cost with tax
            $total_biaya += $tax_amount;
        ?>

        <table>
            <tr>
                <th>Detail Biaya Perjalanan</th>
                <th></th>
            </tr>
            <tr>
                <td>Nama Penumpang:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>Nomor Telepon:</td>
                <td><?= $nomor; ?></td>
            </tr>
            <tr>
                <td>Kelas Perjalanan:</td>
                <td><?= ucfirst($kelas); ?></td>
            </tr>
            <tr>
                <td>Jenis Kendaraan:</td>
                <td><?= ($jenis_kendaraan); ?></td>
            </tr>
            <tr>
                <td>Jumlah Penumpang:</td>
                <td><?= $jumlah_orang; ?></td>
            </tr>
            <tr>
                <td>Biaya Per Orang:</td>
                <td>Rp <?= number_format($biaya_per_orang, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Pajak (<?= $tax_percent; ?>%):</td>
                <td>Rp <?= number_format($tax_amount, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="total-cost">Total Biaya:</td>
                <td class="total-cost">Rp <?= number_format($total_biaya, 0, ',', '.'); ?></td>
            </tr>
        </table>
        
        <?php
        }
        ?>
        
        
        <p>Terima kasih telah menggunakan layanan kami.</p>
    </div>
</body>

</html>
