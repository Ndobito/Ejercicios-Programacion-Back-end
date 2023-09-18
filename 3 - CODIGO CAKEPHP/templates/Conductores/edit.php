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
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $conductore->id], ['confirm' => __('¿Seguro que quieres borrar el # {0}?', $conductore->id), 'class' => 'side-nav-item'] ) ?>
            <?= $this->Html->link(__('Lista de Conductores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conductores form content">
            <?= $this->Form->create($conductore) ?>
            <fieldset>
                <legend><?= __('Editar Conductores') ?></legend>
                <?php
                    echo $this->Form->control('identificacion');
                    echo $this->Form->control('Nombre');
                    echo $this->Form->control('Apellido');
                    echo $this->Form->control('Direccion');
                    echo $this->Form->control('Telefono');
                    echo $this->Form->control('Edad');
                    echo $this->Form->control('Genero');
                    echo $this->Form->control('Correo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('ENVIAR')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
