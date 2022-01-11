<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Adicionar Usuário
        </div>

        <div class="card-body">

          <form
            method="post"
            action="<?php echo e(route('user.store')); ?>">

            <div class="form-group">
              <label for="name">Nome do Usuário</label>

              <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  aria-describedby="nameHelp"
                  placeholder="Nome do Processo"
                  value="<?php echo e(old('name')); ?>" />

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
                  aria-describedby="nameHelp"
                  placeholder="E-mail do Usuário"
                  value="<?php echo e(old('email')); ?>" />

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
                  aria-describedby="nameHelp"
                  placeholder="Password"
                  value="<?php echo e(old('password')); ?>" />

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
                  aria-describedby="nameHelp"
                  placeholder="Passworld"
                  value="<?php echo e(old('password_confirmation')); ?>" />

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
                Cadastrar
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\seac\resources\views/admin/user/store.blade.php ENDPATH**/ ?>