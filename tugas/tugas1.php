<?php
$dataProduk = array(
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        .barang-box {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            font-weight: 500;
        }
        .barang-container {
            display: flex;
           
            justify-content: flex-starta; /* Mengatur agar berbaris ke kanan */
        }
    </style>
</head>
<body>
    <div class="barang-container">

        <?php foreach ($dataProduk as $data): ?>
            <div class="barang-box">\
                
            <b><p><?php echo $data[1]; ?></p> </b>
                <b><p><?php echo $data[0]; ?></p></b> 
                <b><p>Rp<?php echo number_format($data[2], 0, ',', '.'); ?></p></b>
                <b><p><?php echo $data[3] ? 'Stok Tersedia' : 'Stok Habis'; ?></p> </b>
                <?php if ($data[3]): ?>
                    <button>Order</button>
                    <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
