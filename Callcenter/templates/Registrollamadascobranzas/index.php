<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrollamadascobranza[]|\Cake\Collection\CollectionInterface $registrollamadascobranzas
 */
?>
<div class="registrollamadascobranzas index content">
    <?= $this->Html->link(__('New Registrollamadascobranza'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registrollamadascobranzas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_llamada') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('contrato_id') ?></th>
                    <th><?= $this->Paginator->sort('callcenter_id') ?></th>
                    <th><?= $this->Paginator->sort('campaña_id') ?></th>
                    <th><?= $this->Paginator->sort('respuesta_id') ?></th>
                    <th><?= $this->Paginator->sort('script_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrollamadascobranzas as $registrollamadascobranza): ?>
                <tr>
                    <td><?= $this->Number->format($registrollamadascobranza->id) ?></td>
                    <td><?= h($registrollamadascobranza->fecha_llamada) ?></td>
                    <td><?= h($registrollamadascobranza->descripcion) ?></td>
                    <td><?= $registrollamadascobranza->has('contrato') ? $this->Html->link($registrollamadascobranza->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $registrollamadascobranza->contrato->id]) : '' ?></td>
                    <td><?= $registrollamadascobranza->has('callcenter') ? $this->Html->link($registrollamadascobranza->callcenter->nombre, ['controller' => 'Callcenters', 'action' => 'view', $registrollamadascobranza->callcenter->id]) : '' ?></td>
                    <td><?= $registrollamadascobranza->has('campaña') ? $this->Html->link($registrollamadascobranza->campaña->nombre, ['controller' => 'Campañas', 'action' => 'view', $registrollamadascobranza->campaña->id]) : '' ?></td>
                    <td><?= $registrollamadascobranza->has('respuesta') ? $this->Html->link($registrollamadascobranza->respuesta->estado, ['controller' => 'Respuestas', 'action' => 'view', $registrollamadascobranza->respuesta->id]) : '' ?></td>
                    <td><?= $registrollamadascobranza->has('script') ? $this->Html->link($registrollamadascobranza->script->titulo, ['controller' => 'Scripts', 'action' => 'view', $registrollamadascobranza->script->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrollamadascobranza->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrollamadascobranza->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrollamadascobranza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrollamadascobranza->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
