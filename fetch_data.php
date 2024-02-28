<?php 
include('connection.php');

$output = array();
$sql = "SELECT * FROM penertiban_sfr";

$totalQuery = mysqli_query($con, $sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'idsfr',
    1 => 'NAMA PENGGUNA',
    2 => 'DINAS',
    3 => 'SUBSERVICE',
    4 => 'LOKASI',
    5 => 'NOMER SPT',
    6 => 'JENIS PELANGGARAN',
    7 => 'TINDAKAN',
    8 => 'STATUS',
    9 => 'TGL OPERASI',
    10 => 'NO ISR TELAH SETELAH PENINDAKAN',
    11 => 'NO SURAT PENINDAKAN',
    12 => 'TANGGAL TINDAKAN',
    13 => 'KETERANGAN',
);

if(isset($_POST['search']['value'])) {
    $search_value = $_POST['search']['value'];
    $sql .= " WHERE `NAMA PENGGUNA` LIKE '%".$search_value."%'";
    $sql .= " OR `DINAS` LIKE '%".$search_value."%'";
    $sql .= " OR `SUBSERVICE` LIKE '%".$search_value."%'";
    $sql .= " OR `LOKASI` LIKE '%".$search_value."%'";
    $sql .= " OR `STATUS` LIKE '%".$search_value."%'";
}

if(isset($_POST['order'])) {
    $column_index = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY ".$columns[$column_index]." ".$order;
} else {
    $sql .= " ORDER BY idsfr DESC";
}

if($_POST['length'] != -1) {
    $start = $_POST['start'];
    $length = $_POST['length'];
    $sql .= " LIMIT ".$start.", ".$length;
}   

$query = mysqli_query($con, $sql);
$count_rows = mysqli_num_rows($query);
$data = array();

while($row = mysqli_fetch_assoc($query)) {
    $sub_array = array();
    // Menambahkan semua kolom dari tabel ke dalam array
    $sub_array[] = $row['idsfr'];
    $sub_array[] = $row['NAMA PENGGUNA'];
    $sub_array[] = $row['DINAS'];
    $sub_array[] = $row['SUBSERVICE'];
    $sub_array[] = $row['LOKASI'];
    $sub_array[] = $row['NOMER SPT'];
    $sub_array[] = $row['JENIS PELANGGARAN'];
    $sub_array[] = $row['TINDAKAN'];
    $sub_array[] = $row['STATUS'];
    $sub_array[] = $row['TGL OPERASI'];
    $sub_array[] = $row['NO ISR TELAH SETELAH PENINDAKAN'];
    $sub_array[] = $row['NO SURAT PENINDAKAN'];
    $sub_array[] = $row['TANGGAL TINDAKAN'];
    $sub_array[] = $row['KETERANGAN'];
    $sub_array[] = '<a href="javascript:void();" data-idsfr="'.$row['idsfr'].'" class="btn btn-info btn-sm editbtn">Edit</a> <a href="javascript:void();" data-idsfr="'.$row['idsfr'].'" class="btn btn-danger btn-sm deleteBtn">Delete</a>';
    $data[] = $sub_array;
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_rows,
    'recordsFiltered' => $total_all_rows,
    'data' => $data,
);

echo json_encode($output);
?>
