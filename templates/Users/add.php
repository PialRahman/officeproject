<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">>
    
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Log in'), ['action' => 'login'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List user'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('add'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-180 d-flex justify-content-center align-items-center">
        <div class="users form content col-lg-4 mb-5">
            <?= $this->Form->create($user) ?>
            <fieldset>
               <h2 class="text-center">Register</h2>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('phone');
                    echo $this->Form->hidden('token',['value'=>1]);
                    echo $this->Form->hidden('status',['value'=>1]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Register'),[
    'class' => 'btn btn-warning col-lg-12',
]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>










