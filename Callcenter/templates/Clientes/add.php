<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Add Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('email');
                    echo $this->Form->control('telfconvencional');
                    echo $this->Form->control('telfmovil');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('ciudade_id', ['options' => $ciudades]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
