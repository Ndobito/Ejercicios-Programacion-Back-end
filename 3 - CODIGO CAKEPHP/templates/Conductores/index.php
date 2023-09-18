<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conductore> $conductores
 */
?>
<div class="conductores index content">
    <?= $this->Html->link(__('Nuevo Conductor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conductores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('identificacion') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Apellido') ?></th>
                    <th><?= $this->Paginator->sort('Direccion') ?></th>
                    <th><?= $this->Paginator->sort('Telefono') ?></th>
                    <th><?= $this->Paginator->sort('Edad') ?></th>
                    <th><?= $this->Paginator->sort('Genero') ?></th>
                    <th><?= $this->Paginator->sort('Correo') ?></th>
                    <th class="Acciones"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conductores as $conductore): ?>
                <tr>
                    <td><?= $this->Number->format($conductore->id) ?></td>
                    <td><?= $this->Number->format($conductore->identificacion) ?></td>
                    <td><?= h($conductore->Nombre) ?></td>
                    <td><?= h($conductore->Apellido) ?></td>
                    <td><?= h($conductore->Direccion) ?></td>
                    <td><?= h($conductore->Telefono) ?></td>
                    <td><?= $this->Number->format($conductore->Edad) ?></td>
                    <td><?= h($conductore->Genero) ?></td>
                    <td><?= h($conductore->Correo) ?></td>
                    <td class="Acciones">
                        <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $conductore->id], ['escape' => false, 'title' => __('Vista')]) ?>
                        <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $conductore->id], ['escape' => false, 'title' => __('Editar')]) ?>
                         <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['action' => 'delete', $conductore->id], ['escapeTitle' => false, 'escape' => false, 'confirm' => __('¿Seguro que quieres borrar el # {0}?', $conductore->id), 'title' => __('Eliminar')]) ?>
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
