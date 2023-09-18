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
            <?= $this->Html->link(__('Lista de Infracciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="infraccion form content">
            <?= $this->Form->create($infraccion) ?>
            <fieldset>
                <legend><?= __('Agregar Infraccion') ?></legend>
                <?php
                    echo $this->Form->control('Tipo_Infraccion');
                    echo $this->Form->control('N_Infraccion');
                    echo $this->Form->control('Hora');
                    echo $this->Form->control('Fecha');
                    echo $this->Form->control('Lugar');
                    echo $this->Form->control('Valor');
                    echo $this->Form->control('Descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('ENVIAR')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
