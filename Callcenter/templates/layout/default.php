<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Callcenter';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
   
   
    <?= $this->Html->meta('telf') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Call</span>Center</a>
        </div>
        <div class="top-nav-links">

        <?php if($user):?>
            <?php if ($user->role_id=='1'): ?>

        <?=$this->Html->link("Users ",['controller' => 'Users','action' => 'index'])?>
            <?=$this->Html->link("Roles ",['controller' => 'Roles','action' => 'index'])?>
            <?=$this->Html->link("Operadoras ",['controller' => 'Operadoras','action' => 'index'])?>
            <?=$this->Html->link("Callcenters ",['controller' => 'Callcenters','action' => 'index'])?>
            <?=$this->Html->link("Campañas ",['controller' => 'Campañas','action' => 'index'])?>
            <?=$this->Html->link("Ciudades ",['controller' => 'Ciudades','action' => 'index'])?>
            <?=$this->Html->link("Clientes ",['controller' => 'Clientes','action' => 'index'])?>
            <?=$this->Html->link("Contratos ",['controller' => 'Contratos','action' => 'index'])?>
            <?=$this->Html->link("Registros Llamadas ",['controller' => 'Registrollamadascobranzas','action' => 'index'])?>
            <?=$this->Html->link("Reportes ",['controller' => 'Pages','action' => 'report'])?>
            <?=$this->Html->link("Respuestas ",['controller' => 'Respuestas','action' => 'index'])?>
            <?=$this->Html->link("Productos ",['controller' => 'Productos','action' => 'index'])?>
            <?=$this->Html->link("Estados Pagos ",['controller' => 'Estadopagos','action' => 'index'])?>
            <?=$this->Html->link("Scripts ",['controller' => 'Scripts','action' => 'index'])?>
            <?=$this->Html->link("Logout ($user->email) ",['controller' => 'Users','action' => 'logout'])?>
            <?= 'ADMIN';?>
        <?php elseif($user->role_id=='2'): ?>
            
            <?=$this->Html->link("Campañas ",['controller' => 'Campañas','action' => 'index'])?>
            <?=$this->Html->link("Clientes ",['controller' => 'Clientes','action' => 'index'])?>
            <?=$this->Html->link("Contratos ",['controller' => 'Contratos','action' => 'index'])?>
            <?=$this->Html->link("Reportes ",['controller' => 'Pages','action' => 'report'])?>
            <?=$this->Html->link("Registros Llamadas ",['controller' => 'Registrollamadascobranzas','action' => 'index'])?>
            <?=$this->Html->link("Logout ($user->email) ",['controller' => 'Users','action' => 'logout'])?>
            <?= 'USER';?>
            <?php endif?>

        <?php endif?> 
        
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
