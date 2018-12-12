<?php

declare(strict_types=1);

namespace Examples;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use pocketmine\event\player\PlayerLoginEvent;

class ExamplesListener implements Listener {

    /** @var Examples */
    private $plugin;

    /**
     * ExamplesListener constructor.
     * @param Examples $plugin
     */
    public function __construct(Examples $plugin) {
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerCreationEvent $event
     */
    public function onCreation(PlayerCreationEvent $event): void {
        $event->setPlayerClass(ExamplesPlayer::class);
    }

    /**
     * @param PlayerLoginEvent $event
     */
    public function onLogin(PlayerLoginEvent $event): void {
        /** @noinspection PhpUndefinedMethodInspection */
        $event->getPlayer()->setPlugin($this->plugin);
    }



}