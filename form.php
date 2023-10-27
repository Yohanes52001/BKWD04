<?php
$isi = '';
$tgl_awal = '';
$tgl_akhir = '';
if (isset($_GET['id'])) {
    $ambil = mysqli_query($mysqli, "SELECT * FROM poliklinik 
    WHERE id='" . $_GET['id'] . "'");
    while ($row = mysqli_fetch_array($ambil)) {
        $isi = $row['isi'];
        $tgl_awal = $row['tgl_awal'];
        $tgl_akhir = $row['tgl_akhir'];
    }
?>
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<?php
}
?>
