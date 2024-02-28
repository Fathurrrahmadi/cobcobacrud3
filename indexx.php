<?php include('connection.php'); ?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penertiban SFR CRUD Operations</title>
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
</head>

<body>
  <div class="container-fluid mt-5">
    <h2 class="text-center">Penertiban SFR Data Management</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="btnAdd mb-2 text-end">
          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addDataModal">Add New Record</button>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Id SFR</th>
              <th>Nama Pengguna</th>
              <th>Dinas</th>
              <th>Subservice</th>
              <th>Lokasi</th>
              <th>Nomer SPT</th>
              <th>Jenis Pelanggaran</th>
              <th>Tindakan</th>
              <th>Status</th>
              <th>Tgl Operasi</th>
              <th>No ISR Setelah Penindakan</th>
              <th>No Surat Penindakan</th>
              <th>Tanggal Tindakan</th>
              <th>Keterangan</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Add Data Modal -->
  <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addDataModalLabel">Add New Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addDataForm">
            <!-- Add your input fields here -->
            <div class="mb-3">
              <label for="namaPengguna" class="form-label">Nama Pengguna</label>
              <input type="text" class="form-control" id="namaPengguna" name="namaPengguna">
            </div>
            <!-- Add more fields as needed -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        'processing': true,
        'serverSide': true,
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'POST'
        },
        'columns': [
          { 'data': 'idsfr' },
          { 'data': 'NAMA PENGGUNA' },
          { 'data': 'DINAS' },
          // Define more columns as per your need
          {
            'data': null,
            'defaultContent': '<button class="btn btn-info btn-sm editBtn">Edit</button> <button class="btn btn-danger btn-sm deleteBtn">Delete</button>'
          }
        ]
      });

      // Handle form submission for adding data
      $('#addDataForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
          url: 'add_data.php', // Adjust to your PHP file for adding data
          type: 'POST',
          data: formData,
          success: function(response) {
            $('#addDataModal').modal('hide');
            $('#example').DataTable().ajax.reload();
          }
        });
      });

      // Add more JavaScript code for editing and deleting records
    });
  </script>
</body>
</html>
