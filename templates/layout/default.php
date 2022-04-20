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

$cakeDescription = 'Formulário App';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->css(['reset','bootstrap.css', 'style.css']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header class="cabecalhoPrincipal">
		<div class="containerHeader">

			<nav class="cabecalhoPrincipal-nav float-end">
                <?= $this->Html->link(__('Inicio'), ['action' => 'index'], ['class' => 'cabecalhoPrincipal-nav-link']) ?> 
                <?= $this->Html->link(__('Sobre'), ['action' => 'index'], ['class' => 'cabecalhoPrincipal-nav-link']) ?> 
                <?= $this->Html->link(__('Contato'), ['action' => 'index'], ['class' => 'cabecalhoPrincipal-nav-link']) ?> 

			</nav>
		</div>

	</header>
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
