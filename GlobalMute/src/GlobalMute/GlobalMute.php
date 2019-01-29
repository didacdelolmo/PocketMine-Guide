<?php

namespace GlobalMute;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class GlobalMute extends PluginBase {

    /** @var bool */
    private $globalMute = false;

    public function onEnable() {
        $server = $this->getServer();
        $server->getPluginManager()->registerEvents(new GlobalMuteListener($this), $this);
        $server->getCommandMap()->register("globalmute", new GlobalMuteCommand($this));
        $this->getLogger()->info(TextFormat::AQUA . "GlobalMute has been enabled!");
    }

    public function onDisable() {
        $this->getLogger()->info(TextFormat::AQUA . "GlobalMute has been disabled!");
    }

    /**
     * @return bool
     */
    public function getGlobalMute(): bool {
        return $this->getGlobalMute();
    }

    /**
     * @param bool $bool
     */
    public function setGlobalMute(bool $bool = true): void {
        $this->globalMute = $bool;
    }

}