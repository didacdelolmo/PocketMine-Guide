<?php


namespace GlobalMute;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class GlobalMuteCommand extends Command {

    /** @var  GlobalMute */
    private $plugin;

    /**
     * GlobalMuteCommand constructor.
     * @param GlobalMute $plugin
     */
    public function __construct(GlobalMute $plugin) {
        $this->plugin = $plugin;
        parent::__construct("globalmute", "Make players able/unable to chat", "Usage: /globalmute", ["gm"]);
        $this->setPermission("globalmute.command");
    }

    /**
     * @param CommandSender $sender
     * @param string $commandLabel
     * @param array $args
     * @return mixed|void
     */
    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if(!$this->testPermission($sender)) {
            return;
        }
        foreach($this->plugin->getServer()->getOnlinePlayers() as $player) {
            if($this->plugin->getGlobalMute()) {
                $this->plugin->setGlobalMute(false);
                $player->sendMessage(TextFormat::AQUA . "GlobalMute has been disabled!");
                return;
            }
            $this->plugin->setGlobalMute();
            $player->sendMessage(TextFormat::AQUA . "GlobalMute has been enabled!");
        }
    }

}