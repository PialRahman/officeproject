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
            <?= $this->Html->link(__('Login'), ['action' => 'login'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List user'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('add'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-180 d-flex justify-content-center align-items-center">
        <div class="users form content col-lg-4 mb-5">
            <?= $this->Form->create() ?>
            <fieldset>
            <h2 class="text-center">Login</h2>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
                 <br>
            </fieldset>
            <?= $this->Form->button(__('Login'),[
    'class' => 'btn btn-danger ps-4 pe-4',
]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
