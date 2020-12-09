<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciudade[]|\Cake\Collection\CollectionInterface $ciudades
 */
?>
<div class="ciudades index content">
    <?= $this->Html->link(__('New Ciudade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ciudades') ?></h3>
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
                <?php foreach ($ciudades as $ciudade): ?>
                <tr>
                    <td><?= $this->Number->format($ciudade->id) ?></td>
                    <td><?= h($ciudade->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ciudade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ciudade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ciudade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id)]) ?>
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
