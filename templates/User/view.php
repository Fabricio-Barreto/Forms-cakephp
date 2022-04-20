<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('UserName') ?></th>
                    <td><?= h($user->UserName) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserUF') ?></th>
                    <td><?= h($user->UserUF) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserCity') ?></th>
                    <td><?= h($user->UserCity) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserCPF') ?></th>
                    <td><?= h($user->UserCPF) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserNumber') ?></th>
                    <td><?= h($user->UserNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
