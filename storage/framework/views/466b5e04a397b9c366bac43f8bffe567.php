<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Siswa</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('siswa.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="no_pendaftaran">No Pendaftaran</label>
                                <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" class="form-control datepicker" id="tanggal_lahir"
                                    name="tanggal_lahir" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="agama_id">Agama</label>
                                <select class="form-control" id="agama_id" name="agama_id" required>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen</option>
                                    <option value="3">Katholik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Budha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nilai_ind">Nilai IND</label>
                                <input type="number" class="form-control" id="nilai_ind" name="nilai_ind" required>
                            </div>

                            <div class="form-group">
                                <label for="nilai_ipa">Nilai IPA</label>
                                <input type="number" class="form-control" id="nilai_ipa" name="nilai_ipa" required>
                            </div>

                            <div class="form-group">
                                <label for="nilai_mtk">Nilai MTK</label>
                                <input type="number" class="form-control" id="nilai_mtk" name="nilai_mtk" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>

</body>

</html><?php /**PATH /Users/farezaharumputri/Desktop/1 SEMESTER 7/PPAW/PTS/resources/views/siswa/create.blade.php ENDPATH**/ ?>