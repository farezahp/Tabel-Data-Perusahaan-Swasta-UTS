<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-hover tbody tr:hover {
            background-color: #eee;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h4 class="text-center">INFORMASI PENERIMAAN SISWA BARU SMP NEGERI 1
            PERIODE TAHUN AKADEMIK 2022/2023</h4>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ url('/siswa/create') }}" class="btn my-2 btn-primary btn-tambah">Tambah Siswa</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>No Pendaftaran</th>
                        <th>Nama</th>
                        <th>Nilai IND</th>
                        <th>Nilai IPA</th>
                        <th>Nilai MTK</th>
                        <th>Rata-rata</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $key => $student)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $student->no_pendaftaran }}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->nilai_ind }}</td>
                            <td>{{ $student->nilai_ipa }}</td>
                            <td>{{ $student->nilai_mtk }}</td>
                            <td>{{ number_format($student->rata_rata, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>