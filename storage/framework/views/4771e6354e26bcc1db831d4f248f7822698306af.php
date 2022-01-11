<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span>
            Usuários
          </span>

          <a href="<?php echo e(route('user.create')); ?>"
            class="btn btn-primary btn-sm">Adicionar Usuário</a>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row">
                    <?php echo e($user->id); ?>

                  </th>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Actions">
                      <a href="<?php echo e(route('user.show', ['user' => $user->id])); ?>"
                        class="btn btn-warning">Editar</a>

                      <a href="<?php echo e(route('user.destroy', ['user' => $user->id])); ?>"
                        class="btn btn-danger">Remover</a>
                    </div>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/seac/releases/1/resources/views/admin/user/index.blade.php ENDPATH**/ ?>