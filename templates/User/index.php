<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $user
 */
?>
<div class="index content">
    <div class="mb-4">
        <?= $this->Html->link(__('Adicionar'), ['action' => 'add'], ['class' => 'btn btn-success float-end']) ?> 
        <h3><?= __('Usuários') ?></h3>
    </div>
    <div>
        <table class="table table-striped">
            <thead">
                <tr>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('id')?></th>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('Nome') ?></th>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('UF') ?></th>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('Cidade') ?></th>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('CPF') ?></th>
                    <th class="text-center texto-th"><?= $this->Paginator->sort('Numero') ?></th>
                    <th class="text-center texto-th"><p class="float-end mb-0"><?= __('Ações') ?></p></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $user): ?>
                <tr>
                    <td class="text-center texto-td"><?= $this->Number->format($user->id) ?></td>
                    <td class="text-center texto-td"><?= h($user->UserName) ?></td>
                    <td class="text-center texto-td"><?= h($user->UserUF) ?></td>
                    <td class="text-center texto-td"><?= h($user->UserCity) ?></td>
                    <td class="text-center texto-td"><?= h($user->UserCPF) ?></td>
                    <td class="text-center texto-td"><?= h($user->UserNumber) ?></td>
                    <td class="text-center texto-td">
                        <div class="float-end">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning']) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger'], ['confirm' => __('Você tem certeza que quer deletar # {0}?', $user->id)]) ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
    </div>
</div>
