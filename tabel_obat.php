<?php
$result = mysqli_query($mysqli, "SELECT * FROM tabel_obat");
$no = 1;
while ($data = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['nama_obat'] ?></td>
        <td><?php echo $data['kemasan'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td>
            <a class="btn btn-success rounded-pill px-3" href="index.php?page=dokter&id=<?php echo $data['id'] ?>">Ubah</a>
            <a class="btn btn-danger rounded-pill px-3" href="index.php?page=dokter&id=<?php echo $data['id'] ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
<?php
}
?>