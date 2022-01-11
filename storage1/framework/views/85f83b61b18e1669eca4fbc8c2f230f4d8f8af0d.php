<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Inserção de Atas
        </div>

        <div class="card-body">

          <form method="post" enctype="multipart/form-data" action="<?php echo e(route('processos.store')); ?>">
            <div class="form-group">
              <label for="name">Nome do Processo</label>

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
              <label for="nameColege">Colegiado</label>

              <select
                class="form-control"
                name="colege"
                id="nameColege">
                <option value='0'>COLEC</option>
                <option value='1'>CONSEP</option>
                <option value='2'>CONSUP</option>
                <option value='3'>NDE</option>
              </select>
            </div>

            <div class="form-group">
              <label for="status">Status</label>

              <select
                class="form-control"
                name="status"
                id="status">
                <option value='0'>Em análise do COLEC</option>
                <option value='1'>Em análise do CONSEP</option>
                <option value='2'>Em análise do CONSUP</option>
                <option value='3'>Em análise do NDE</option>
                <option value='4'>Indeferido</option>
                <option value='5'>Deferido</option>
              </select>
            </div>

            <div class="form-group">
              <label for="openDate">Data de Abertura</label>

              <input
                  type="date"
                  class="form-control"
                  name="openDate"
                  id="openDate"
                  aria-describedby="nameHelp"
                  value="<?php echo e(old('openDate')); ?>" />

                <?php if($errors->has('openDate')): ?>
                  <?php echo e($errors->first('openDate')); ?>

                <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="description">Resumo da Ata</label>

              <textarea
                class="form-control"
                name="description"
                id="description"
                rows="5"
                cols="20"
                placeholder="Resumo da Ata"><?php echo e(old('description')); ?></textarea>

                <?php if($errors->has('description')): ?>
                  <?php echo e($errors->first('description')); ?>

                <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="fileAta">ATA</label>

              <input
                  type="file"
                  class="form-control-file"
                  name="ata"
                  id="fileAta"
                  aria-describedby="nameHelp" />
            </div>

            <?php echo csrf_field(); ?>

            <div class="d-flex justify-content-between align-items-center">
              <a href="<?php echo e(route('home')); ?>" class="btn btn-light">
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




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\seac\resources\views/admin/processos/store.blade.php ENDPATH**/ ?>