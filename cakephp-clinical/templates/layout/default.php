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

$cakeDescription = 'Clinic Management Sysdtem with cakephp';
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

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Clinical</span>Management</a>
        </div>
        <?php if($logedIn): ?>
        <ul class="left">
            <a><?= $this->HTML->link(__('Patients'), ['controller' => 'patients', 'action' => 'index']) ?></a>
            <a><?= $this->HTML->link(__('Doctors'), ['controller' => 'doctors', 'action' => 'index']) ?></a>
            <a><?= $this->HTML->link(__('Appointments'), ['controller' => 'appointments', 'action' => 'index']) ?></a>
            <a><?= $this->HTML->link(__('Carriers'), ['controller' => 'carriers', 'action' => 'index']) ?></a>
            <a><?= $this->HTML->link(__('Invoices'), ['controller' => 'invoices', 'action' => 'index']) ?></a>

        </ul>


        <div class="right">
            <a><?= $this->HTML->link(__('Manages User'), ['controller' => 'Users', 'action' => 'index']) ?></a>
            <a><?= $this->HTML->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></a>

        </div>

        <?php endif; ?>
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