
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/classroom.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    
    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>Jam</th> 
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
                <th>Sabtu</th>
                <th>Minggu</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $classroom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <th scope="row"><?php echo e($class->class_starts); ?></th>   
            <?php if($class->day == 'Senin'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            <?php if($class->day == 'Selasa'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            <?php if($class->day == 'Rabu'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            <?php if($class->day == 'Kamis'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td >    </td>
            <?php endif; ?>
            <?php if($class->day == 'Jumat'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            <?php if($class->day == 'Sabtu'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            <?php if($class->day == 'Minggu'): ?>
                <td style="background-color: rgb(63, 106, 216,0.5);"><?php echo e($class->classname); ?></td> 
            <?php else: ?>
                <td>    </td>
            <?php endif; ?>
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <button class="mb-2 mr-2 btn-transition btn btn-outline-info btn-lg btn-block" data-toggle="modal" data-target="#addClass">Tambah Kelas </button>
</div>
</div>
 <!-- Modal -->
<div class="modal fade centered" data-backdrop="false" id="addClass" tabindex="1" aria-labelledby="addClass" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="box-shadow: none;">
        <div class="modal-content mt-5">
            <div class="modal-header">
                <h5 class="modal-title" id="addClass">Tambah Kelas</h5>
            </div>
        <form action="/class/<?php echo e($jadwalSingle->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-7">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Nama Kelas</label><input name="classname" id="classname" placeholder="Kelasmu" type="text" class="form-control"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Guru/Dosen</label><input name="teacher" id="teacher" placeholder="Gurumu" type="text" class="form-control"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Kelas mulai</label><input name="class_starts" id="class_starts" placeholder="Jam mulai" type="time" class="form-control"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group"><label for="examplePassword11" class="">Kelas berakhir</label><input name="class_ends" id="class_ends" placeholder="Jam Berakhir" type="time" class="form-control"></div>
                    </div>
                </div>
                <div class="position-relative form-group"><label for="day" class="">Pilih Hari</label>
                    <select multiple="" type="select" id="day" name="day" class="custom-select">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>    
            </div>
            </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\jadwal_project\Jadwal.7\resources\views/dashboard/jadwal.blade.php ENDPATH**/ ?>