<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos view content">
            <h3><?= h($producto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($producto->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contratos') ?></h4>
                <?php if (!empty($producto->contratos)) : ?>
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
                        <?php foreach ($producto->contratos as $contratos) : ?>
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
