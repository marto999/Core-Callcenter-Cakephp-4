<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Script $script
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Scripts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="scripts form content">
            <?= $this->Form->create($script) ?>
            <fieldset>
                <legend><?= __('Add Script') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('respuesta');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
