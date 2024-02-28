<?php 
include('connection.php');

// Menerima data dari $_POST
$namaPengguna = $_POST['nama_pengguna'];
$dinas = $_POST['dinas'];
$subservice = $_POST['subservice'];
$lokasi = $_POST['lokasi'];
$nomerSPT = $_POST['nomer_spt'];
$jenisPelanggaran = $_POST['jenis_pelanggaran'];
$tindakan = $_POST['tindakan'];
$status = $_POST['status'];
$tglOperasi = $_POST['tgl_operasi'];
$noISRTelahSetelahPenindakan = $_POST['no_isr_telah_setelah_penindakan'];
$noSuratPenindakan = $_POST['no_surat_penindakan'];
$tanggalTindakan = $_POST['tanggal_tindakan'];
$keterangan = $_POST['keterangan'];

// Menyiapkan query untuk memasukkan data ke dalam tabel penertiban_sfr
$sql = "INSERT INTO `penertiban_sfr` (`NAMA PENGGUNA`, `DINAS`, `SUBSERVICE`, `LOKASI`, `NOMER SPT`, `JENIS PELANGGARAN`, `TINDAKAN`, `STATUS`, `TGL OPERASI`, `NO ISR TELAH SETELAH PENINDAKAN`, `NO SURAT PENINDAKAN`, `TANGGAL TINDAKAN`, `KETERANGAN`) VALUES ('$namaPengguna', '$dinas', '$subservice', '$lokasi', '$nomerSPT', '$jenisPelanggaran', '$tindakan', '$status', '$tglOperasi', '$noISRTelahSetelahPenindakan', '$noSuratPenindakan', '$tanggalTindakan', '$keterangan')";

$query = mysqli_query($con, $sql);
$lastId = mysqli_insert_id($con);

// Mengecek apakah query berhasil
if ($query == true) {
    $data = array('status' => 'true');
    echo json_encode($data);
} else {
    $data = array('status' => 'false');
    echo json_encode($data);
}
?>
