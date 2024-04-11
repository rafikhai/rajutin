<?php
   session_start();

   if(empty($_SESSION['username']))
{
    header("location:../index.php?pesan=belum_login");
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
                    <li class="nav-item"><a style="color: orange;" class="nav-link" href="../add-product/">Add
                            Products</a></li>
                    <li class="nav-item"><a style="color: orange;" class="nav-link" href="../manage-product/">Manage
                            products</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
                <div class="text-center">
                    <a href="../logout" class="btn btn-secondary mt-5">Logout</a>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9 content">
                <h2 style="margin-top: 30px; margin-bottom: 30px;">Add Product</h2>
                <hr>
                <form id="upload_data_product" action="simpan-data-product/" method="post"
                    enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nama_product" >Nama Produk:</label>
                        
                        <input type=" text" id="nama_product" name="nama_product" class=form-control required>
                    </div>
                    <div class="mb-3">
                        <label for="stok_product" class="form-label">Stok Produk:</label>
                        <input type="number" id="stok_product" name="stok_product" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori_product" class="form-label">Kategori Produksds:</label>
                        <select id="kategori_product" name="kategori_product" class="form-select" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="tas">Tas</option>
                            <option value="pakaian">Pakaian</option>
                            <option value="hiasan">Hiasan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_product" class="form-label">Keterangan Produk:</label>
                        <textarea id="keterangan_product" name="keterangan_product" class="form-control"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Foto Produk:</label>
                        <input name="gambar" type="file" id="gambar" class="form-control" required />
                    </div>
                    <input type="submit" name="proses" value="Add Product" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>