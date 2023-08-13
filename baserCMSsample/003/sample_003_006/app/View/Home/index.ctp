<h1>ホーム</h1>

<p><?php echo h($name);?></p>
<p><?php echo h($email);?></p>

<?php 
echo $this->Form->create('PostSample');
echo $this->Form->input('name', ['label' => '名前']);
echo $this->Form->input('email', ['type' => 'email','label' => 'メールアドレス']);
echo $this->Form->button('Submit', ['type' => 'submit']);
echo $this->Form->end();
?>

