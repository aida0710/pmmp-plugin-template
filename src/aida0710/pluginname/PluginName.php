<?php

declare(strict_types = 1);

namespace aida0710\plugin_name;

use pocketmine\plugin\PluginBase;

class PluginName extends PluginBase {
    /**
     * @return void
     */
    protected function onEnable(): void {
        $this->getLogger()->info('プラグインを読み込みました'); //PMMPの公式では非推奨の為、動作確認ができ次第削除してください。
    }

    /**
     * @return void
     */
    protected function onDisable(): void {
        $this->getLogger()->info('プラグインを停止しました'); //PMMPの公式では非推奨の為、動作確認ができ次第削除してください。
    }

}
