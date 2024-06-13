<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Khodam by Foxiblee</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.jpeg" alt="" width="60" height="48" class="d-inline-block align-text-top">
            <strong>Cek Khodam by Foxiblee</strong>
        </a>
    </div>
</nav>

<div class="card text-center mt-5">
    <div class="card-header">
        CARI TAU KHODAM MU SEKARANG!!!
    </div>
    <div class="card-body">
        <h5 class="card-title">!! Tap Layar 2x Untuk Cek !!</h5>
        <input type="text" name="nama" id="nama"><br><br>
        <button id="checkButton" class="btn btn-primary">CEK SEKARANG</button>
        <button id="resetButton" class="btn btn-secondary ms-2">RESET</button>
        <p class="card-text mt-3">Khodam dari nenek moyang mu adalah <strong id="khodamResult"></strong></p>
    </div>
    <div class="card-footer text-muted">
        Request Nama Khodam di Komen
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlPEf0v2kdtQlP9WPIvtzYtQoIHL7XaYSMRZUJo4oBs25m5M26BOKLB4B38" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG2Y3blP4K8kvQzzF0KOttKYOxxB07whHEtlB2EGmflf5EXk8OHTGn26z6" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#checkButton').click(function() {
            var nama = $('#nama').val();
            $.ajax({
                url: '/get-khodam',
                method: 'POST',
                data: { nama: nama },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    $('#khodamResult').text(data.name);
                },
                error: function(xhr) {
                    if(xhr.status == 400) {
                        alert('Nama tidak boleh kosong.');
                    } else {
                        alert('Error fetching Khodam data.');
                    }
                }
            });
        });

        $('#resetButton').click(function() {
            $('#nama').val('');
            $('#khodamResult').text('');
        });
    });
</script>
</body>
</html>
