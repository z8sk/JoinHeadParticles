<?php

namespace Zloki\JoinHeadParticles;

use pocketmine\world\particle\HeartParticle;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener
{
    public function onEnable():void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function join(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        
        $player->getWorld()->addParticle($player->getPosition()->add(0, 1, 0), new HeartParticle());

        $player->getWorld()->addParticle($player->getPosition()->add(0, 1, 0), new HeartParticle());

        $player->getWorld()->addParticle($player->getPosition()->add(0, 1, 0), new HeartParticle());

        $player->getWorld()->addParticle($player->getPosition()->add(0, 1, 0), new HeartParticle());
    }
}