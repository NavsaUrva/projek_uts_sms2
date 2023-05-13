<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

$sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
        INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
$rs = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesanan Pelanggan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">Produk</th>
                                <th scope="col">No.HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Navsa</td>
                                <td>Depok</td>
                                <td>Strawberry</td>
                                <td>0876593589</td>
                                <td>navsa@gmail.com</td>
                                <td>sangat berkualitas</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Urva</td>
                                <td>Jakarta</td>
                                <td>Blueberry</td>
                                <td>08736427982</td>
                                <td>Urva@gmail.com</td>
                                <td>kualitas impor</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ananta</td>
                                <td>Jakarta</td>
                                <td>Lemon,Kiwi</td>
                                <td>073294239424</td>
                                <td>anan100@gmail.com</td>
                                <td>produk selalu freshh</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Syahria</td>
                                <td>Jati Negara</td>
                                <td>Lemon, berry</td>
                                <td>0862846384</td>
                                <td>ssyhariaa@gmail.com</td>
                                <td>produk selalu bagusss</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bhina</td>
                                <td>Bogor</td>
                                <td>Lemon, Kiwi, Berry </td>
                                <td>08199273081</td>
                                <td>sbhina@gmail.com</td>
                                <td>sangat mantapp</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>