<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h1>Belajar PHP Dasar</h1>
    <button type="button">Klik Saya</button>
    <?php echo "Hello World"; ?>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama"> <br>
        <label>Tanggal Lahir: </label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"> <br>
        <label>Pekerjaan: </label>
        <select name="selection" id="selection">
        <option value="bengkel">Mekanik</option>
        <option value="jagaWarung">Sales</option>
        <option value="jukir">Parking Attendant</option>
        </select> <br>
        <input type="submit" value="Kirim">
    </form>
    <?php
    echo '<br>';
    echo 'Selamat Datang ' . $_POST['nama']; 
    echo '<br>';
    $tanggal_sekarang = new DateTime();
    $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
    $selisih = date_diff($tanggal_lahir, $tanggal_sekarang);
    echo "Umur Anda: " . $selisih->y . " tahun, " . $selisih->m . " bulan, dan " . $selisih->d . " hari.";

    echo '<br>';
    $pajak = 0.12;
    if (isset($_POST['selection'])) {
    $selectedValue = $_POST['selection'];
    switch ($selectedValue) {
        case 'bengkel':
            $gaji = 2000000;
            break;
        case 'jagaWarung':
            $gaji = 1500000;
            break;
        case 'jukir':
            $gaji = 2500000;
            break;
        default:
            echo "belom milih";
            break;
        }
        $thp = $gaji - ($gaji * $pajak);
        echo "Pekerjaan: " . $selectedValue . "<br>";
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    } else {
        echo "belom submit";
    }
    ?>
</body>

</html>