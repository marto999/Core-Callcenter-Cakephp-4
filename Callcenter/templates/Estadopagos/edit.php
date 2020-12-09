<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadopago $estadopago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadopago->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadopago->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estadopagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estadopagos form content">
            <?= $this->Form->create($estadopago) ?>
            <fieldset>
                <legend><?= __('Edit Estadopago') ?></legend>
                <?php
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
