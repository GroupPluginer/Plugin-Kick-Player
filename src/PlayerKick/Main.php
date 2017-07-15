<?php

namespace PlayerKick;
 
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\text\TextFormat as Color;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
 }

 public function onKick(PlayerKickEvent $event){
 $player = $event->getPlayer();
 $name = $event->getName();
  
   $player->setKickMessage(Color::RED."ﺮﻓﺮﻴﺴﻟﺍ ﺮﻣﺍﻭﺍ ﻞﺒﻘﺗ ﻡﺪﻌﻟ ﻦﻣﺩﻻﺍ ﻞﺒﻗ ﻦﻣ ﻙﺩﺮﻃ ﻢﺗ ﺪﻘﻟ");
  }
}
