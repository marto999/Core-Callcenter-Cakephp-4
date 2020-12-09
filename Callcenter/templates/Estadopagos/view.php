<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadopago $estadopago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estadopago'), ['action' => 'edit', $estadopago->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estadopago'), ['action' => 'delete', $estadopago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadopago->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estadopagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estadopago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estadopagos view content">
            <h3><?= h($estadopago->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($estadopago->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($estadopago->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contratos') ?></h4>
                <?php if (!empty($estadopago->contratos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Fechainicio') ?></th>
                            <th><?= __('Fechafin') ?></th>
                            <th><?= __('Estadopago Id') ?></th>
                            <th><?= __('Operadora Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($estadopago->contratos as $contratos) : ?>
                        <tr>
                            <td><?= h($contratos->id) ?></td>
                            <td><?= h($contratos->cliente_id) ?></td>
                            <td><?= h($contratos->fechainicio) ?></td>
                            <td><?= h($contratos->fechafin) ?></td>
                            <td><?= h($contratos->estadopago_id) ?></td>
                            <td><?= h($contratos->operadora_id) ?></td>
                            <td><?= h($contratos->producto_id) ?></td>
                            <td><?= h($contratos->descripcion) ?></td>
                            <td><?= h($contratos->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contratos', 'action' => 'view', $contratos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contratos', 'action' => 'edit', $contratos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contratos', 'action' => 'delete', $contratos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
