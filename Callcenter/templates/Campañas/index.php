<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campaña[]|\Cake\Collection\CollectionInterface $campañas
 */
?>
<div class="campañas index content">
    <?= $this->Html->link(__('New Campaña'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Campañas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('operadora_id') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campañas as $campaña): ?>
                <tr>
                    <td><?= $this->Number->format($campaña->id) ?></td>
                    <td><?= h($campaña->nombre) ?></td>
                    <td><?= $campaña->has('operadora') ? $this->Html->link($campaña->operadora->nombre, ['controller' => 'Operadoras', 'action' => 'view', $campaña->operadora->id]) : '' ?></td>
                    <td><?= h($campaña->descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $campaña->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaña->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaña->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaña->id)]) ?>
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
