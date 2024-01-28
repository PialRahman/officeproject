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
            <?= $this->Html->link(__('Login'), ['action' => 'login'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List user'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
           <?= $this->Html->link(__('add'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </aside>
    <div class="column column-80">
       
    </div>
    <?= $this->Form->create($user) ?>
    
  <fieldset>
    <legend>Register</legend>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="" placeholder="Password" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="exampleInputPhone" class="form-label mt-4">Phone</label>
      <input type="text" class="form-control" id="exampleInputPhone" name="" aria-describedby="emailHelp" placeholder="Enter phone">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    </fieldset>
    <?= $this->Form->button(__('Register'),['class'=>'btn btn-warning']) ?>
  <?= $this->Form->end() ?>
</div>
