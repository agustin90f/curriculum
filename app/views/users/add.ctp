<?php
echo $this->Form->create();
echo $this->Form->inputs(array(
'legend' => 'Signup', 'email', 'username', 'first_name', 'last_name',
'password'
));
echo $this->Form->end('Submit');
echo $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'));
?>