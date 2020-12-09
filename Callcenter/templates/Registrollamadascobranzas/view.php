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
            <?= $this->Html->link(__('Edit Registrollamadascobranza'), ['action' => 'edit', $registrollamadascobranza->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registrollamadascobranza'), ['action' => 'delete', $registrollamadascobranza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrollamadascobranza->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registrollamadascobranzas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registrollamadascobranza'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrollamadascobranzas view content">
            <h3><?= h($registrollamadascobranza->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($registrollamadascobranza->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrato') ?></th>
                    <td><?= $registrollamadascobranza->has('contrato') ? $this->Html->link($registrollamadascobranza->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $registrollamadascobranza->contrato->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Callcenter') ?></th>
                    <td><?= $registrollamadascobranza->has('callcenter') ? $this->Html->link($registrollamadascobranza->callcenter->id, ['controller' => 'Callcenters', 'action' => 'view', $registrollamadascobranza->callcenter->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Campaña') ?></th>
                    <td><?= $registrollamadascobranza->has('campaña') ? $this->Html->link($registrollamadascobranza->campaña->id, ['controller' => 'Campañas', 'action' => 'view', $registrollamadascobranza->campaña->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Respuesta') ?></th>
                    <td><?= $registrollamadascobranza->has('respuesta') ? $this->Html->link($registrollamadascobranza->respuesta->id, ['controller' => 'Respuestas', 'action' => 'view', $registrollamadascobranza->respuesta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Script') ?></th>
                    <td><?= $registrollamadascobranza->has('script') ? $this->Html->link($registrollamadascobranza->script->id, ['controller' => 'Scripts', 'action' => 'view', $registrollamadascobranza->script->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrollamadascobranza->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Llamada') ?></th>
                    <td><?= h($registrollamadascobranza->fecha_llamada) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
