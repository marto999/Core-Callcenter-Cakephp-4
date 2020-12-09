<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Respuesta $respuesta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Respuesta'), ['action' => 'edit', $respuesta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Respuesta'), ['action' => 'delete', $respuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $respuesta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Respuestas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Respuesta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="respuestas view content">
            <h3><?= h($respuesta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($respuesta->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($respuesta->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Registrollamadascobranzas') ?></h4>
                <?php if (!empty($respuesta->registrollamadascobranzas)) : ?>
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
                        <?php foreach ($respuesta->registrollamadascobranzas as $registrollamadascobranzas) : ?>
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
