<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Alteração de Atas
        </div>

        <div class="card-body">

          <form method="post" enctype="multipart/form-data"
            action="<?php echo e(route('processos.update', ['processos' => $processo->id])); ?>">

            <div class="form-group">
              <label for="name">Nome do Processo</label>

              <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  aria-describedby="nameHelp"
                  value="<?php echo e($processo->name); ?>"
                  placeholder="Nome do Processo" />
            </div>

            <div class="form-group">
              <label for="nameColege">Nome do Colegiado</label>

              <select
                class="form-control"
                name="colege"
                id="nameColege">
                <option value='0' <?php echo e(($processo->colege == 0) ? 'selected' : ''); ?>>COLEC</option>
                <option value='1' <?php echo e(($processo->colege == 1) ? 'selected' : ''); ?>>CONSEP</option>
                <option value='2' <?php echo e(($processo->colege == 2) ? 'selected' : ''); ?>>CONSUP</option>
                <option value='3' <?php echo e(($processo->colege == 3) ? 'selected' : ''); ?>>NDE</option>
              </select>
            </div>

            <div class="form-group">
              <label for="status">Status</label>

              <select
                class="form-control"
                name="status"
                id="status">
                <option value='0' <?php echo e(($processo->status == 0) ? 'selected' : ''); ?>>Em análise do COLEC</option>
                <option value='1' <?php echo e(($processo->status == 1) ? 'selected' : ''); ?>>Em análise do CONSEP</option>
                <option value='2' <?php echo e(($processo->status == 2) ? 'selected' : ''); ?>>Em análise do CONSUP</option>
                <option value='3' <?php echo e(($processo->status == 3) ? 'selected' : ''); ?>>Em análise do NDE</option>
                <option value='4' <?php echo e(($processo->status == 4) ? 'selected' : ''); ?>>Indeferido</option>
                <option value='5' <?php echo e(($processo->status == 5) ? 'selected' : ''); ?>>Deferido</option>
              </select>
            </div>

            <div class="form-group">
              <label for="openDate">Data de Abertura</label>

              <input
                  type="date"
                  class="form-control"
                  name="openDate"
                  id="openDate"
                  value="<?php echo e($processo->openDate); ?>"
                  aria-describedby="nameHelp" />
            </div>

            <div class="form-group">
              <label for="description">Resumo da Ata</label>

              <textarea
                class="form-control"
                name="description"
                id="description"
                rows="5"
                cols="20"
                placeholder="Resumo da Ata"><?php echo e($processo->description); ?></textarea>
            </div>

            <div class="form-group">
              <label for="fileAta">ATA</label>

              <input
                  type="file"
                  class="form-control-file"
                  name="ata"
                  id="fileAta"
                  value="<?php echo e($processo->ata); ?>"
                  aria-describedby="nameHelp" />
            </div>

            <?php echo csrf_field(); ?>

            <div class="d-flex justify-content-between align-items-center">
              <a href="<?php echo e(route('home')); ?>" class="btn btn-light">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\seac\resources\views/admin/processos/show.blade.php ENDPATH**/ ?>