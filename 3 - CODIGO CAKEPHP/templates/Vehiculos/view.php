<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Vehiculo'), ['action' => 'edit', $vehiculo->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Vehiculo'), ['action' => 'delete', $vehiculo->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista Vehiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Vehiculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vehiculos view content">
            <h3><?= h($vehiculo->Id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo De Vehiculo') ?></th>
                    <td><?= h($vehiculo->Tipo_de_Vehiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($vehiculo->Color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($vehiculo->Marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($vehiculo->Modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($vehiculo->Estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Placa') ?></th>
                    <td><?= h($vehiculo->Placa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chasis') ?></th>
                    <td><?= h($vehiculo->Chasis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Motor') ?></th>
                    <td><?= h($vehiculo->Numero_Motor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometraje') ?></th>
                    <td><?= h($vehiculo->Kilometraje) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vehiculo->Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
