<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Callcenter[]|\Cake\Collection\CollectionInterface $callcenters
 */
?>
<div class="callcenters index content">
    <?= $this->Html->link(__('New Callcenter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Callcenters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($callcenters as $callcenter): ?>
                <tr>
                    <td><?= $this->Number->format($callcenter->id) ?></td>
                    <td><?= h($callcenter->nombre) ?></td>
                    <td><?= h($callcenter->direccion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $callcenter->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $callcenter->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $callcenter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $callcenter->id)]) ?>
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
