<?php
// ここにアップデートしたい処理を記述します。
// $thisはUpdatersControllerです。

// BlogPostモデルを取得
$BlogPost = ClassRegistry::init('Blog.BlogPost');

// 最初の一件を取得する
$first = $BlogPost->find("first");

// nameを変更して保存する
$first['BlogPost']['name'] ='プラグインで更新しました';

$BlogPost->save($first['BlogPost']);