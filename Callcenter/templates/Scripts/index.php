<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Script[]|\Cake\Collection\CollectionInterface $scripts
 */
?>
<div class="scripts index content">
    <?= $this->Html->link(__('New Script'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Scripts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scripts as $script): ?>
                <tr>
                    <td><?= $this->Number->format($script->id) ?></td>
                    <td><?= h($script->titulo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $script->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $script->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $script->id], ['confirm' => __('Are you sure you want to delete # {0}?', $script->id)]) ?>
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
