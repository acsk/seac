<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Editar Usuário
        </div>

        <div class="card-body">

          <form
            method="post"
            action="<?php echo e(route('user.update', ['user' => $user->id])); ?>">

            <div class="form-group">
              <label for="name">Nome do Usuário</label>

              <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  value="<?php echo e($user->name); ?>" />

                <?php if($errors->has('name')): ?>
                  <?php echo e($errors->first('name')); ?>

                <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="email">E-Mail</label>

              <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value="<?php echo e($user->email); ?>" />

                <?php if($errors->has('email')): ?>
                  <?php echo e($errors->first('email')); ?>

                <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="password">Senha</label>

              <input
                  type="password"
                  class="form-control"
                  name="password"
                  id="password"
                  value="<?php echo e($user->password); ?>" />

                <?php if($errors->has('password')): ?>
                  <?php echo e($errors->first('password')); ?>

                <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirmação de Senha</label>

              <input
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  id="password_confirmation"
                  value="<?php echo e($user->password); ?>" />

                <?php if($errors->has('password_confirmation')): ?>
                  <?php echo e($errors->first('password_confirmation')); ?>

                <?php endif; ?>
            </div>

            <?php echo csrf_field(); ?>

            <div class="d-flex justify-content-between align-items-center">
              <a href="<?php echo e(route('user.index')); ?>" class="btn btn-light">
                Voltar
              </a>

              <button type="submit" class="btn btn-success">
                Atualizar
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/seac/releases/1/resources/views/admin/user/show.blade.php ENDPATH**/ ?>