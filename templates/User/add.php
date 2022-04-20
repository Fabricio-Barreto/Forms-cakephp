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
            <fieldset >
                <legend><?= __('Adicionar Usuário') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('UF');
                    echo $this->Form->control('Cidade');
                    echo $this->Form->control('CPF');
                    echo $this->Form->control('Número');
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
