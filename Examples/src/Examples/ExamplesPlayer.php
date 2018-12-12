<?php

declare(strict_types=1);

namespace Examples;


use pocketmine\item\Item;
use pocketmine\Player;

class ExamplesPlayer extends Player {

    /** @var Examples */
    private $plugin;

    /**
     * @return Examples
     */
    public function getPlugin(): Examples {
        return $this->plugin;
    }

    /**
     * @param Examples $plugin
     */
    public function setPlugin(Examples $plugin): void {
        $this->plugin = $plugin;
    }

    /**
     * Add baked potatoes to fill all empty slots of a player
     */
    public function fillEmptySlots(): void {
        $inv = $this->getInventory();
        for($i = 0; $i < (36 - count($inv->getContents())); $i++) {
            $inv->addItem(Item::get(Item::BAKED_POTATO));
        }
    }

}