<?php
include "../layout/header.php";
include "../layout/menu.php";

include "../crud/config.php";

$sql = "SELECT * FROM distributor";
$hasil = $connection->query($sql);
?>



<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = $hasil->fetch_assoc()) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $row['nama_distributor'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['telepon'] ?></td>
                            <td>
                                <a href="" class="btn btn-primary">edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</main>
<?php include "../layout/footer.php"; ?>