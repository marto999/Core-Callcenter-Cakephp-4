<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrollamadascobranza $registrollamadascobranza
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrollamadascobranza->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrollamadascobranza->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registrollamadascobranzas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrollamadascobranzas form content">
            <?= $this->Form->create($registrollamadascobranza) ?>
            <fieldset>
                <legend><?= __('Edit Registrollamadascobranza') ?></legend>
                <?php
                    echo $this->Form->control('fecha_llamada', ['empty' => true]);
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('contrato_id', ['options' => $contratos]);
                    echo $this->Form->control('callcenter_id', ['options' => $callcenters]);
                    echo $this->Form->control('campaña_id', ['options' => $campañas]);
                    echo $this->Form->control('respuesta_id', ['options' => $respuestas]);
                    echo $this->Form->control('script_id', ['options' => $scripts]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
