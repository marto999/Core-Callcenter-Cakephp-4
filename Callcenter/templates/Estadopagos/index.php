<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadopago[]|\Cake\Collection\CollectionInterface $estadopagos
 */
?>
<div class="estadopagos index content">
    <?= $this->Html->link(__('New Estadopago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estadopagos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estadopagos as $estadopago): ?>
                <tr>
                    <td><?= $this->Number->format($estadopago->id) ?></td>
                    <td><?= h($estadopago->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estadopago->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadopago->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadopago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadopago->id)]) ?>
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
