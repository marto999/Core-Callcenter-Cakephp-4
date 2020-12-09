<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operadora $operadora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $operadora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $operadora->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Operadoras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="operadoras form content">
            <?= $this->Form->create($operadora) ?>
            <fieldset>
                <legend><?= __('Edit Operadora') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
