<?php $this->BcBaser->docType('html5') ?>
<html>
<head>
	<?php $this->BcBaser->charset() ?>
	<?php $this->BcBaser->title() ?>
	<?php $this->BcBaser->css(array('style')) ?>
</head>
<body>
	<?php $this->BcBaser->header() ?>
<nav>
    <?php $this->BcBaser->globalMenu(2) ?>
</nav>
	<div id="Wrap" class="clearfix">
		<section id="ContentsBody" class="contents-body">
             <?php $this->BcBaser->content() ?>
        </section>
    </div>
	<?php $this->BcBaser->footer() ?>
</body>
</html>
