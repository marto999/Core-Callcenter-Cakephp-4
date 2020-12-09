<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Callcenter $callcenter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $callcenter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $callcenter->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Callcenters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="callcenters form content">
            <?= $this->Form->create($callcenter) ?>
            <fieldset>
                <legend><?= __('Edit Callcenter') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('direccion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
