<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <style>
        table, th, td {
        border: 1px blue;
        }

        th, td {
            padding: 10px;
        }

        th {
            background-color: #ADD8E6 ;
            color: red;
        }
    </style>
</head>
<body>
    <center>
    <table>
        <tr>
            <th>ID</th><th>Nama</th><th>Brand</th><th>Warna</th><th>Tipe</th><th>Harga</th><th>Details</th>
        </tr>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            $sql = "SELECT * FROM showroom_mobil";
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"; 
                    echo "<td>" . $row["id"] . "</td>";echo "<td>" . $row["nama_mobil"] . "</td>";echo "<td>" . $row["brand_mobil"] . "</td>";echo "<td>" . $row["warna_mobil"] . "</td>";
                    echo "<td>" . $row["tipe_mobil"] . "</td>"; echo "<td>" . $row["harga_mobil"] . "</td>";echo "<td><a href='form_detail_mobil.php?id=" . $row['id'] . "'>Detail</a></td>";
                    echo "</tr>";
                }
            } 
            


            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            else {
                echo "Data tidak ada dalam tabel";
            }
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
            </table>
        </div>
    </center>
</body>
</html>