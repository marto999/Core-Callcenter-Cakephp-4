<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos form content">
            <?= $this->Form->create($contrato) ?>
            <fieldset>
                <legend><?= __('Add Contrato') ?></legend>
                <?php
                    echo $this->Form->control('cliente_id', ['options' => $clientes]);
                    echo $this->Form->control('fechainicio', ['empty' => true]);
                    echo $this->Form->control('fechafin', ['empty' => true]);
                    echo $this->Form->control('estadopago_id', ['options' => $estadopagos]);
                    echo $this->Form->control('operadora_id', ['options' => $operadoras]);
                    echo $this->Form->control('producto_id', ['options' => $productos]);
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
