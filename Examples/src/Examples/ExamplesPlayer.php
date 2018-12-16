<?php

declare(strict_types=1);

namespace Examples;


use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

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

    /**
     * @param Item $item
     * @param string $name
     * @param string[] $lore
     */
    public function addCustomItem(Item $item, string $name, array $lore): void {
        $item->setCustomName($name);
        $item->setLore($lore);
        $this->getInventory()->addItem($item);
    }

    /**
     * This is the example in above but with no parameters
     */
    public function addDefaultCustomItem(): void {
        $item = Item::get(Item::MOB_HEAD);
        $item->setCustomName(TextFormat::GOLD . "Default Head");
        $item->setLore([
            TextFormat::DARK_AQUA . "This is a lore example.",
            "", // Empty line
            "Another example"
        ]);
        $this->getInventory()->addItem($item);
    }

}