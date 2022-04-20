<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="container">
        <div class="form-add ">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Editar Usuário') ?></legend>
                <?php
                    echo $this->Form->control('UserName');
                    echo $this->Form->control('UserUF');
                    echo $this->Form->control('UserCity');
                    echo $this->Form->control('UserCPF');
                    echo $this->Form->control('UserNumber');
                ?>
            </fieldset>
            <div class="buttons-form">
                <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary p-3 form-button']) ?>
                <?= $this->Form->button(__('Confirmar'), ['class' => 'btn btn-success p-3 form-button']) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>
