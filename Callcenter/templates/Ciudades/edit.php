<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciudade $ciudade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ciudade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ciudades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciudades form content">
            <?= $this->Form->create($ciudade) ?>
            <fieldset>
                <legend><?= __('Edit Ciudade') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
