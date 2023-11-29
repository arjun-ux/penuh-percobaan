<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <h3>Daftar Category</h3>
    <table id="listCategori" class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Deskripsi</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#listCategori', {
            ajax: 'http://localhost:8000/api/category'
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'description'},
            ]
        });
    </script>
</body>
</html>
