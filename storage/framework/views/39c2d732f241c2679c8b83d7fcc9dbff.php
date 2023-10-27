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

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <a href="<?php echo e(url('/siswa/create')); ?>" class="btn my-2 btn-primary btn-tambah">Tambah Siswa</a>
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
                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($student->no_pendaftaran); ?></td>
                            <td><?php echo e($student->nama); ?></td>
                            <td><?php echo e($student->nilai_ind); ?></td>
                            <td><?php echo e($student->nilai_ipa); ?></td>
                            <td><?php echo e($student->nilai_mtk); ?></td>
                            <td><?php echo e(number_format($student->rata_rata, 2)); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html><?php /**PATH /Users/farezaharumputri/Desktop/1 SEMESTER 7/PPAW/PTS/resources/views/siswa/index.blade.php ENDPATH**/ ?>