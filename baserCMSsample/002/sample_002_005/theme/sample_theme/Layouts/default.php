<?php $this->BcBaser->docType('html5') ?>
<html>
<head>
	<?php $this->BcBaser->charset() ?>
	<?php $this->BcBaser->title() ?>
	<?php $this->BcBaser->css(array('style')) ?>
</head>
<body>
<nav>
    <?php $this->BcBaser->globalMenu(2) ?>
</nav>
	<div id="Wrap" class="clearfix">
		<section id="ContentsBody" class="contents-body">
             <?php $this->BcBaser->content() ?>
        </section>
    </div>
</body>
</html>
