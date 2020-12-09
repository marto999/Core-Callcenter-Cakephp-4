<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ciudade $ciudade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ciudade'), ['action' => 'edit', $ciudade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ciudade'), ['action' => 'delete', $ciudade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ciudade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ciudades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ciudade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ciudades view content">
            <h3><?= h($ciudade->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($ciudade->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ciudade->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clientes') ?></h4>
                <?php if (!empty($ciudade->clientes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Telfconvencional') ?></th>
                            <th><?= __('Telfmovil') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Ciudade Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ciudade->clientes as $clientes) : ?>
                        <tr>
                            <td><?= h($clientes->id) ?></td>
                            <td><?= h($clientes->nombre) ?></td>
                            <td><?= h($clientes->email) ?></td>
                            <td><?= h($clientes->telfconvencional) ?></td>
                            <td><?= h($clientes->telfmovil) ?></td>
                            <td><?= h($clientes->direccion) ?></td>
                            <td><?= h($clientes->ciudade_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>
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
