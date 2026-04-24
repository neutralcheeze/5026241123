<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Tooltip BS4</title>

    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000000;
        }
    </style>
</head>

<body>
        <div class="card shadow-lg">
            <div class="card-body text-center p-4">
                <img src="https://ui-avatars.com/api/?name=B+M" class="rounded-circle img-fluid mb-3" alt="">
                <h4 class="card-title">Budi Marianto</h4> 
                <p class="card-text">NIM: 2284750823</p>
                <p class="alert alert-success">Mahasiswa Aktif - Semester 4</p>

                <hr>

                <div class="d-flex justify-content-center pb-3">
                    <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Hapus data mahasiswa permanen!">Hapus</button>
                    <button class="btn btn-outline-info ml-2 mr-1" data-toggle="tooltip" data-placement="right" title="Kirim email ke mahasiswa ini!">Email</button>
                    <button class="btn btn-outline-warning ml-1 mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit biodata mahasiswa!">Edit</button>
                    <button class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Buka Rapor Mahasiswa!">Rapor</button>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>
