<?php

declare(strict_types=1);

namespace Examples;


use pocketmine\plugin\PluginBase;

class Examples extends PluginBase {

    /** @var ExamplesListener */
    private $listener;

    public function onEnable() {
        $this->listener = new ExamplesListener($this);
    }

    /**
     * @return ExamplesListener
     */
    public function getListener(): ExamplesListener {
        return $this->listener;
    }

}