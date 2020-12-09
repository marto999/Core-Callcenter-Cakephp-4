<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campaña $campaña
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Campañas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campañas form content">
            <?= $this->Form->create($campaña) ?>
            <fieldset>
                <legend><?= __('Add Campaña') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('operadora_id', ['options' => $operadoras]);
                    echo $this->Form->control('descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
