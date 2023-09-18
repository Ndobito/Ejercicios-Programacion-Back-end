<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vehiculo> $vehiculos
 */
?>
<div class="vehiculos index content">
    <?= $this->Html->link(__('Nuevo Vehiculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vehiculos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Tipo_de_Vehiculo') ?></th>
                    <th><?= $this->Paginator->sort('Color') ?></th>
                    <th><?= $this->Paginator->sort('Marca') ?></th>
                    <th><?= $this->Paginator->sort('Modelo') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th><?= $this->Paginator->sort('Placa') ?></th>
                    <th><?= $this->Paginator->sort('Chasis') ?></th>
                    <th><?= $this->Paginator->sort('Numero_Motor') ?></th>
                    <th><?= $this->Paginator->sort('Kilometraje') ?></th>
                    <th class="acciones"><?= __('acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehiculos as $vehiculo): ?>
                <tr>
                    <td><?= $this->Number->format($vehiculo->Id) ?></td>
                    <td><?= h($vehiculo->Tipo_de_Vehiculo) ?></td>
                    <td><?= h($vehiculo->Color) ?></td>
                    <td><?= h($vehiculo->Marca) ?></td>
                    <td><?= h($vehiculo->Modelo) ?></td>
                    <td><?= h($vehiculo->Estado) ?></td>
                    <td><?= h($vehiculo->Placa) ?></td>
                    <td><?= h($vehiculo->Chasis) ?></td>
                    <td><?= h($vehiculo->Numero_Motor) ?></td>
                    <td><?= h($vehiculo->Kilometraje) ?></td>
                    <td class="acciones">
                        <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $vehiculo->Id], ['escape' => false, 'title' => __('Vista')]) ?>
                        <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $vehiculo->Id], ['escape' => false, 'title' => __('Editar')]) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['action' => 'delete', $vehiculo->Id], ['escapeTitle' => false, 'escape' => false, 'confirm' => __('¿Seguro que quieres borrar el # {0}?', $vehiculo->Id), 'title' => __('Eliminar')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __(' anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) fuera de {{count}} total')) ?></p>
    </div>
</div>
