<?php
// クラス名、ファイル名は規約に従って付ける必要がある
class SamplePluginViewEventListener extends BcViewEventListener {
    // イベントの登録
    public $events = [
        'SamplePlugin.Home.beforeRender',
        'SamplePlugin.Home.beforeRenderFile',
        'SamplePlugin.Home.afterRenderFile',
        'SamplePlugin.Home.afterRender',
        'SamplePlugin.Home.beforeLayout',
        'SamplePlugin.Home.afterLayout',
    ];

    public function samplePluginHomeBeforeRender(CakeEvent $event) {
       //pr("ViewEventListener::BeforeRender");
       //pr($event->data[0]);
    }

    public function samplePluginHomeBeforeRenderFile(CakeEvent $event) {
       //pr("ViewEventListener::BeforeRenderFile");
       //pr($event->data[0]);
    }

    public function samplePluginHomeAfterRenderFile(CakeEvent $event) {
       //pr("ViewEventListener::AfterRenderFile");
       //pr($event->data[0]);
    }

    public function samplePluginHomeAfterRender(CakeEvent $event) {
       //pr("ViewEventListener::AfterRender");
       //pr($event->data[0]);
    }

    public function samplePluginHomeBeforeLayout(CakeEvent $event) {
       //pr("ViewEventListener::BeforeLayout");
       //pr($event->data[0]);
    }

    public function samplePluginHomeAfterLayout(CakeEvent $event) {
       //pr("ViewEventListener::AfterLayout");
       //pr($event->data[0]);
    }
}
?>