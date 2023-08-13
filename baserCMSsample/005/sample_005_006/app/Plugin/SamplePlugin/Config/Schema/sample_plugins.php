<?php
class SamplePluginsSchema extends CakeSchema {

	public $name = 'SamplePlugins';

	public $file = 'sample_plugins.php';

	public $connection = 'default';

	public function before($event = []) {
		return true;
	}

	public function after($event = []) {
	}

	public $sample_plugins = [
		'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary'],
		'name' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 50],
		'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'modified' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'indexes' => ['PRIMARY' => ['column' => 'id', 'unique' => 1]],
		'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci']
	];

}
