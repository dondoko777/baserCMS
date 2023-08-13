<?php
// クラス名、ファイル名は規約に従って付ける必要がある
class SamplePluginControllerEventListener extends BcControllerEventListener {
    // イベントの登録
    public $events = [
        'SamplePlugin.Home.initialize',
        'SamplePlugin.Home.beforeRender',
        'SamplePlugin.Home.shutdown',
        'Contents.searchIndex',
    ];

    public function samplePluginHomeInitialize(CakeEvent $event) {
        pr("ControllerEventListener::initialize");

        $controller = $event->subject();
        $controller->set('value', 'samplePluginHomeInitialize');

    }

    public function SamplePluginHomeBeforeRender(CakeEvent $event) {
        pr("ControllerEventListener::BeforeRender");

        $controller = $event->subject();
        $controller->set('value', 'SamplePluginHomeBeforeRender');
    }

    public function SamplePluginHomeShutdown(CakeEvent $event) {
        pr("ControllerEventListener::Shutdown");

        $controller = $event->subject();
        $controller->set('value', 'SamplePluginHomeShutdown');
    }

    public function ContentsSearchIndex(CakeEvent $event) {
        pr("ControllerEventListener::SearchIndex");
    }
}
?>