<?php
   session_start();

   if(empty($_SESSION['username']))
{
    header("location:index.php?pesan=belum_login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--font google poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/style-admin.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar" id="sidebar">
                <h2>Raju<span>Tin</span>
                    <br>Admin Panel
                </h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a style="color: orange;" class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a style="color: orange;" class="nav-link" href="../add-product/">Add Products</a></li>
                    <li class="nav-item"><a style="color: orange;" class="nav-link" href="../manage-product">Manage products</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
                <div class="text-center">
                    <a href="../logout" class="btn btn-secondary mt-5">Logout</a>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9 content">
                <h2 style="margin-top: 30px; margin-bottom: 30px;">Manage Product</h2>
                <!-- Form pencarian -->
                <form action="#" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search product..." name="search_product">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
                <!-- Tombol Sort -->
                <!-- <div class="mb-3">
                    <a href="?sort=tas" class="btn btn-primary">Sort by Tas</a>
                    <a href="?sort=hiasan" class="btn btn-primary">Sort by Hiasan</a>
                    <a href="?sort=pakaian" class="btn btn-primary">Sort by Pakaian</a>
                </div> -->

                <div class="table-responsive">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>ID Product</th>
                                <th>Nama Product</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Gambar Product</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Koneksi ke database
                                include '../koneksi.php';
                                // Query untuk mengambil data product
                                $sql = mysqli_query($koneksi,"SELECT * FROM product");
                                
                                // sort kategori
                                // Penanganan sort by kategori
                                // if(isset($_GET['sort'])) {
                                //     $sort = $_GET['sort'];
                                //     if ($sort == 'kategori') {
                                //         $sql .= " ORDER BY kategori_product";
                                //     } else if ($sort == 'tas' || $sort == 'hiasan' || $sort == 'pakaian') {
                                //         $sql .= " WHERE kategori_product = '$sort'";
                                //     }
                                // }

                                // $result = mysqli_query($koneksi, $sql);

                                while ($row=mysqli_fetch_array($sql)) {
                                    $id_product = $row[0];
                                    $nama_product = $row[1];
                                    $stok_product = $row[2];
                                    $kategori_product = $row[3];
                                    $keterangan_product = $row[4];
                                    $gambar_product = $row[5];
                            ?>
                            <tr>
                                <td><?= $id_product ?></td>
                                <td><?= $nama_product ?></td>
                                <td><?= $stok_product ?></td>
                                <td><?= $kategori_product ?></td>
                                <td><?= $keterangan_product ?></td>
                                <td><img src='../../uploads/<?= $gambar_product?>' alt='TIDAK ADA' width='70' height='90'>
                                </td>
                                <td>
                                    <a style="font-size: 12px;" href="#" class="btn btn-primary">  Edit  </a>
                                    <a  href=hapus-data-product/index.php?id_product=<?php echo $row['id_product']; ?> style="font-size: 12px;" href="#" class="btn btn-danger">Delete</a>
                                    
                                </td>
                            </tr>
                            <?php                 
                                }
                                $koneksi->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>