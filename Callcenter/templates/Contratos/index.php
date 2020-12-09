<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contratos
 */
?>
<div class="contratos index content">
    <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contratos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('fechainicio') ?></th>
                    <th><?= $this->Paginator->sort('fechafin') ?></th>
                    <th><?= $this->Paginator->sort('estadopago_id') ?></th>
                    <th><?= $this->Paginator->sort('operadora_id') ?></th>
                    <th><?= $this->Paginator->sort('producto_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contratos as $contrato): ?>
                <tr>
                    <td><?= $this->Number->format($contrato->id) ?></td>
                    <td><?= $contrato->has('cliente') ? $this->Html->link($contrato->cliente->nombre, ['controller' => 'Clientes', 'action' => 'view', $contrato->cliente->id]) : '' ?></td>
                    <td><?= h($contrato->fechainicio) ?></td>
                    <td><?= h($contrato->fechafin) ?></td>
                    <td><?= $contrato->has('estadopago') ? $this->Html->link($contrato->estadopago->estado, ['controller' => 'Estadopagos', 'action' => 'view', $contrato->estadopago->id]) : '' ?></td>
                    <td><?= $contrato->has('operadora') ? $this->Html->link($contrato->operadora->nombre, ['controller' => 'Operadoras', 'action' => 'view', $contrato->operadora->id]) : '' ?></td>
                    <td><?= $contrato->has('producto') ? $this->Html->link($contrato->producto->nombre, ['controller' => 'Productos', 'action' => 'view', $contrato->producto->id]) : '' ?></td>
                    <td><?= $contrato->has('user') ? $this->Html->link($contrato->user->nombre, ['controller' => 'Users', 'action' => 'view', $contrato->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)]) ?>
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
