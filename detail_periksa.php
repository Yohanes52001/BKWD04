<?php
$result = mysqli_query($mysqli, "SELECT pr.*,p.id as 'id_periksa', o.id as 'id_obat' FROM detail_periksa pr LEFT JOIN periksa d ON (pr.id_periksa=d.id) LEFT JOIN obat p ON (pr.id_obat=o.id) ORDER BY pr.tgl_periksa DESC");
$no = 1;
while ($data = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['id_periksa'] ?></td>
        <td><?php echo $data['id_obat'] ?></td>
        <td>
            <a class="btn btn-success rounded-pill px-3"
            href="index.php?page=periksa&id=<?php echo $data['id'] ?>">
            Ubah</a>
            <a class="btn btn-danger rounded-pill px-3"
            href="index.php?page=periksa&id=<?php echo $data['id'] ?>&aksi=hapus">
            Hapus</a>
        </td>
    </tr>
<?php
}
?>
