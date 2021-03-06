<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Respuesta $respuesta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Respuestas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="respuestas form content">
            <?= $this->Form->create($respuesta) ?>
            <fieldset>
                <legend><?= __('Add Respuesta') ?></legend>
                <?php
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
