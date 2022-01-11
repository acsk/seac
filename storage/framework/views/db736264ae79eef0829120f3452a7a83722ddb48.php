<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span>
            Listagens de Atas
          </span>

          <a href="<?php echo e(route('processos.create')); ?>"
            class="btn btn-primary btn-sm">Adicionar Ata</a>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Colegiado</th>
                  <th scope="col">Status</th>
                  <th scope="col">Data de Abertura</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Ata</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $processos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $processo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row">
                    <?php echo e($processo->id); ?>

                  </th>

                  <td><?php echo e($processo->name); ?></td>

                  <td>
                  <?php switch($processo->colege):
                      case (0): ?>
                        COLEC
                        <?php break; ?>

                      <?php case (1): ?>
                        CONSEP
                        <?php break; ?>

                      <?php case (2): ?>
                        CONSUP
                        <?php break; ?>

                      <?php case (3): ?>
                        NDE
                        <?php break; ?>
                    <?php endswitch; ?>
                  </td>

                  <td>
                    <?php switch($processo->status):
                      case (0): ?>
                        Em análise do COLEC
                        <?php break; ?>

                      <?php case (1): ?>
                        Em análise do CONSEP
                        <?php break; ?>

                      <?php case (2): ?>
                        Em análise do CONSUP
                        <?php break; ?>

                      <?php case (3): ?>
                        Em análise do NDE
                        <?php break; ?>

                      <?php case (4): ?>
                        INDEFERIDO
                        <?php break; ?>

                      <?php case (5): ?>
                        DEFERIDO
                        <?php break; ?>
                    <?php endswitch; ?>
                  </td>

                  <td><?php echo e($processo->openDate); ?></td>

                  <td><?php echo e(str_limit($processo->description, 150, '...')); ?></td>

                  <td><a href="<?php echo e(asset('/atas/' . $processo->ata)); ?>">Download</a></td>

                  <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Actions">
                      <a href="<?php echo e(route('processos.show', ['processos' => $processo->id])); ?>"
                        class="btn btn-warning">Editar</a>

                      <a href="<?php echo e(route('processos.destroy', ['processos' => $processo->id])); ?>"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/seac/releases/1/resources/views/admin/processos/index.blade.php ENDPATH**/ ?>