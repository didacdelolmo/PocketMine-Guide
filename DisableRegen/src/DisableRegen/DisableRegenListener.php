<?php

declare(strict_types=1);

namespace DisableRegen;


use pocketmine\event\entity\EntityRegainHealthEvent;
use pocketmine\event\Listener;

class DisableRegenListener implements Listener {

    /**
     * @param EntityRegainHealthEvent $event
     */
    public function onRegainHealth(EntityRegainHealthEvent $event): void {
        if($event->getRegainReason() === EntityRegainHealthEvent::CAUSE_EATING) {
            $event->setCancelled();
        }
    }

}