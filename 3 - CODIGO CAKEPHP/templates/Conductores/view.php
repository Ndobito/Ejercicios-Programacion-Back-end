<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conductore $conductore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Conductores'), ['action' => 'edit', $conductore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Conductor'), ['action' => 'delete', $conductore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conductore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Conductores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nuevo Conductor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conductores view content">
            <h3><?= h($conductore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($conductore->Nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellido') ?></th>
                    <td><?= h($conductore->Apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($conductore->Direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($conductore->Telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($conductore->Genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($conductore->Correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conductore->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identificacion') ?></th>
                    <td><?= $this->Number->format($conductore->identificacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Edad') ?></th>
                    <td><?= $this->Number->format($conductore->Edad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
