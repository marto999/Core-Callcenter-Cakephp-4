<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contratos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratos view content">
            <h3><?= h($contrato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $contrato->has('cliente') ? $this->Html->link($contrato->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $contrato->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estadopago') ?></th>
                    <td><?= $contrato->has('estadopago') ? $this->Html->link($contrato->estadopago->id, ['controller' => 'Estadopagos', 'action' => 'view', $contrato->estadopago->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Operadora') ?></th>
                    <td><?= $contrato->has('operadora') ? $this->Html->link($contrato->operadora->id, ['controller' => 'Operadoras', 'action' => 'view', $contrato->operadora->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $contrato->has('producto') ? $this->Html->link($contrato->producto->id, ['controller' => 'Productos', 'action' => 'view', $contrato->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $contrato->has('user') ? $this->Html->link($contrato->user->id, ['controller' => 'Users', 'action' => 'view', $contrato->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contrato->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechainicio') ?></th>
                    <td><?= h($contrato->fechainicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechafin') ?></th>
                    <td><?= h($contrato->fechafin) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contrato->descripcion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Registrollamadascobranzas') ?></h4>
                <?php if (!empty($contrato->registrollamadascobranzas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha Llamada') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Contrato Id') ?></th>
                            <th><?= __('Callcenter Id') ?></th>
                            <th><?= __('Campaña Id') ?></th>
                            <th><?= __('Respuesta Id') ?></th>
                            <th><?= __('Script Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contrato->registrollamadascobranzas as $registrollamadascobranzas) : ?>
                        <tr>
                            <td><?= h($registrollamadascobranzas->id) ?></td>
                            <td><?= h($registrollamadascobranzas->fecha_llamada) ?></td>
                            <td><?= h($registrollamadascobranzas->descripcion) ?></td>
                            <td><?= h($registrollamadascobranzas->contrato_id) ?></td>
                            <td><?= h($registrollamadascobranzas->callcenter_id) ?></td>
                            <td><?= h($registrollamadascobranzas->campaña_id) ?></td>
                            <td><?= h($registrollamadascobranzas->respuesta_id) ?></td>
                            <td><?= h($registrollamadascobranzas->script_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registrollamadascobranzas', 'action' => 'view', $registrollamadascobranzas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registrollamadascobranzas', 'action' => 'edit', $registrollamadascobranzas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrollamadascobranzas', 'action' => 'delete', $registrollamadascobranzas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrollamadascobranzas->id)]) ?>
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
