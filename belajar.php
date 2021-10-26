<?php
$nama_barang = array("Brokoli", "kangkung", "Labu", "Jagung", "Bawang", "Kubis", "Wumpa", "Mutfruit");
$nomor = array(1, 2, 3, 4, 5, 6, 7, 8);
$berat = array(2, 3, 4, 0.5, 0.3, 0.8, 1, 0.04);
?>

<!DOCTYPE html>
<html style="background-color:#222222;">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 

    <style>
        *{
            font-family: 'Quicksand', sans-serif;
            color: white;
        }
    </style>
    
</head>
<body>

<h2 style="Color:#FF0075">Toko Sayur Pak Joy </h2>

    <table class="father" border='1' style="border-radius:10px;">
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Berat(kg)</td>
            <td>Berat(g)</td>
            <td>Berat(mg)</td>
            <td>Berat(liter)</td>
        </tr>

        <?php for ($i=0; $i < 8; $i++) { ?>
        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
            <td> <?php echo "-"; ?> </td>
        </tr>

        <?php } ?>   


    </table>
</body>
</html> 
