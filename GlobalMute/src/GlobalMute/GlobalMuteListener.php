<?php


namespace GlobalMute;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class GlobalMuteListener implements Listener {

    /** @var GlobalMute */
    private $plugin;

    /**
     * GlobalMuteListener constructor.
     * @param GlobalMute $plugin
     */
    public function __construct(GlobalMute $plugin) {
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerChatEvent $event
     */
    public function onChat(PlayerChatEvent $event): void {
        if($this->plugin->getGlobalMute()) {
            $event->setCancelled();
        }
    }

}