<?php 
include('connection.php');

// Menerima data dari POST
$idsfr = $_POST['idsfr']; // Misalnya, ID yang akan diupdate
$namaPengguna = $_POST['nama_pengguna'];
$dinas = $_POST['dinas'];
$subservice = $_POST['subservice'];
$lokasi = $_POST['lokasi'];
$nomerSPT = $_POST['nomer_spt'];
$jenisPelanggaran = $_POST['jenis_pelanggaran']; // Asumsikan input sudah dalam bentuk 'LEGAL' atau 'ILEGAL'
$tindakan = $_POST['tindakan'];
$status = $_POST['status'];
$tglOperasi = $_POST['tgl_operasi']; // Format YYYY-MM-DD
$noISRTelahSetelahPenindakan = $_POST['no_isr_telah_setelah_penindakan'];
$noSuratPenindakan = $_POST['no_surat_penindakan'];
$tanggalTindakan = $_POST['tanggal_tindakan']; // Format YYYY-MM-DD
$keterangan = $_POST['keterangan'];

// Menyiapkan query dengan prepared statement
$sql = "UPDATE `penertiban_sfr` SET 
        `NAMA PENGGUNA` = ?, 
        `DINAS` = ?, 
        `SUBSERVICE` = ?, 
        `LOKASI` = ?, 
        `NOMER SPT` = ?, 
        `JENIS PELANGGARAN` = ?, 
        `TINDAKAN` = ?, 
        `STATUS` = ?, 
        `TGL OPERASI` = ?, 
        `NO ISR TELAH SETELAH PENINDAKAN` = ?, 
        `NO SURAT PENINDAKAN` = ?, 
        `TANGGAL TINDAKAN` = ?, 
        `KETERANGAN` = ? 
        WHERE `idsfr` = ?";

$stmt = mysqli_prepare($con, $sql);

// Mengikat parameter ke statement
mysqli_stmt_bind_param($stmt, "sssssssssssssi", 
    $namaPengguna, 
    $dinas, 
    $subservice, 
    $lokasi, 
    $nomerSPT, 
    $jenisPelanggaran, 
    $tindakan, 
    $status, 
    $tglOperasi, 
    $noISRTelahSetelahPenindakan, 
    $noSuratPenindakan, 
    $tanggalTindakan, 
    $keterangan, 
    $idsfr);

// Menjalankan query
$result = mysqli_stmt_execute($stmt);

if($result) {
    $data = array('status' => 'true');
} else {
    $data = array('status' => 'false');
}

// Menutup statement
mysqli_stmt_close($stmt);

// Meng-echo data sebagai JSON
echo json_encode($data);
?>
