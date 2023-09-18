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
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $vehiculo->Id], ['confirm' => __('¿Seguro que quieres borrar el # {0}?', $vehiculo->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Vehiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vehiculos form content">
            <?= $this->Form->create($vehiculo) ?>
            <fieldset>
                <legend><?= __('Editar Vehiculo') ?></legend>
                <?php
                    echo $this->Form->control('Tipo_de_Vehiculo');
                    echo $this->Form->control('Color');
                    echo $this->Form->control('Marca');
                    echo $this->Form->control('Modelo');
                    echo $this->Form->control('Estado');
                    echo $this->Form->control('Placa');
                    echo $this->Form->control('Chasis');
                    echo $this->Form->control('Numero_Motor');
                    echo $this->Form->control('Kilometraje');
                ?>
            </fieldset><br>
            <?= $this->Form->button(__('ENVIAR')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
