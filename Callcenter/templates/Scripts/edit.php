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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $script->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $script->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Scripts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="scripts form content">
            <?= $this->Form->create($script) ?>
            <fieldset>
                <legend><?= __('Edit Script') ?></legend>
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
