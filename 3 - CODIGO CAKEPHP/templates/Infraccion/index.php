<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Infraccion> $infraccion
 */
?>
<div class="infraccion index content">
    <?= $this->Html->link(__('Nueva Infraccion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Infraccion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Tipo_Infraccion') ?></th>
                    <th><?= $this->Paginator->sort('N_Infraccion') ?></th>
                    <th><?= $this->Paginator->sort('Hora') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Lugar') ?></th>
                    <th><?= $this->Paginator->sort('Valor') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion') ?></th>
                    <th class="acciones"><?= __('acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infraccion as $infraccion): ?>
                <tr>
                    <td><?= $this->Number->format($infraccion->Id) ?></td>
                    <td><?= h($infraccion->Tipo_Infraccion) ?></td>
                    <td><?= h($infraccion->N_Infraccion) ?></td>
                    <td><?= h($infraccion->Hora) ?></td>
                    <td><?= h($infraccion->Fecha) ?></td>
                    <td><?= h($infraccion->Lugar) ?></td>
                    <td><?= h($infraccion->Valor) ?></td>
                    <td><?= h($infraccion->Descripcion) ?></td>
                    <td class="acciones">
                        <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $infraccion->Id], ['escape' => false, 'title' => __('Vista')]) ?>
                        <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $infraccion->Id], ['escape' => false, 'title' => __('Editar')]) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['action' => 'delete', $infraccion->Id], ['escapeTitle' => false, 'escape' => false, 'confirm' => __('¿Seguro que quieres borrar el # {0}?', $infraccion->Id), 'title' => __('Eliminar')]) ?>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) fuera de {{count}} total')) ?></p>
    </div>
</div>
