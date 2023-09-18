<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Infraccion $infraccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Infraccion'), ['action' => 'edit', $infraccion->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Infraccion'), ['action' => 'delete', $infraccion->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $infraccion->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Infraccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nueva Infraccion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infraccion view content">
            <h3><?= h($infraccion->Id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Infraccion') ?></th>
                    <td><?= h($infraccion->Tipo_Infraccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('N Infraccion') ?></th>
                    <td><?= h($infraccion->N_Infraccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar') ?></th>
                    <td><?= h($infraccion->Lugar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= h($infraccion->Valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($infraccion->Descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($infraccion->Id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($infraccion->Hora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($infraccion->Fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
