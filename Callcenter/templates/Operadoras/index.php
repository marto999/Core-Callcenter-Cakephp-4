<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operadora[]|\Cake\Collection\CollectionInterface $operadoras
 */
?>
<div class="operadoras index content">
    <?= $this->Html->link(__('New Operadora'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Operadoras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($operadoras as $operadora): ?>
                <tr>
                    <td><?= $this->Number->format($operadora->id) ?></td>
                    <td><?= h($operadora->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $operadora->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $operadora->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $operadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operadora->id)]) ?>
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
