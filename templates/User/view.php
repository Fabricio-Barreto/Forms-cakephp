<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="container">
        <div class="">
            <h3 class="mb-3"><?= h($user->UserName) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th class="text-center texto-th"><?= __('Nome') ?></th>
                    <td class="text-center texto-td"><?= h($user->UserName) ?></td>
                </tr>
                <tr>
                    <th class="text-center texto-th"><?= __('UF') ?></th>
                    <td class="text-center texto-td"><?= h($user->UserUF) ?></td>
                </tr>
                <tr>
                    <th class="text-center texto-th"><?= __('Cidade') ?></th>
                    <td class="text-center texto-td"><?= h($user->UserCity) ?></td>
                </tr>
                <tr>
                    <th class="text-center texto-th"><?= __('CPF') ?></th>
                    <td class="text-center texto-td"><?= h($user->UserCPF) ?></td>
                </tr>
                <tr>
                    <th class="text-center texto-th"><?= __('Numero') ?></th>
                    <td class="text-center texto-td"><?= h($user->UserNumber) ?></td>
                </tr>
                <tr>
                    <th class="text-center texto-th"><?= __('Id') ?></th>
                    <td class="text-center texto-td"><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="buttons-form form-add mt-5 button-view">
                <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary p-3 form-button']) ?>
            </div>
        </div>
    </div>
</div>
