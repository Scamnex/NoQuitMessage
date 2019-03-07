<?php
namespace Scamnex;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as T;
class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info(T::AQUA . "Aktiviert");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onDisable()
    {
        $this->getLogger()->info(T::AQUA . "Deaktiviert");
    }
        public function onQuit (PlayerQuitEvent $e)
    {
        $player = $e->getPlayer();
        $name = $player->getName();
        $e->setQuitMessage("");
    }
    }
    }
}
