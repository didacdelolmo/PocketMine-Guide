<?php

declare(strict_types=1);

namespace DisableRegen;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class DisableRegen extends PluginBase {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new DisableRegenListener(), $this);
        $this->getLogger()->info(TextFormat::RED . "DisableRegen has been enabled");
    }

    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "DisableRegen has been disabled");
    }

}