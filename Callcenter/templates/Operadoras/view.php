<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Operadora $operadora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Operadora'), ['action' => 'edit', $operadora->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Operadora'), ['action' => 'delete', $operadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $operadora->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Operadoras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Operadora'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="operadoras view content">
            <h3><?= h($operadora->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($operadora->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($operadora->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Campañas') ?></h4>
                <?php if (!empty($operadora->campañas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Operadora Id') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($operadora->campañas as $campañas) : ?>
                        <tr>
                            <td><?= h($campañas->id) ?></td>
                            <td><?= h($campañas->nombre) ?></td>
                            <td><?= h($campañas->operadora_id) ?></td>
                            <td><?= h($campañas->descripcion) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Campañas', 'action' => 'view', $campañas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Campañas', 'action' => 'edit', $campañas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campañas', 'action' => 'delete', $campañas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campañas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Contratos') ?></h4>
                <?php if (!empty($operadora->contratos)) : ?>
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
                        <?php foreach ($operadora->contratos as $contratos) : ?>
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
