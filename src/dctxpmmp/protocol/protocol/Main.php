<?php

declare(strict_types=1);

namespace dctxpmmp\protocol\protocol;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onPacketReceive(DataPacketReceiveEvent $event): void {
		$player = $event->getPlayer();
		$pk = $event->getPacket();
		if(!$pk instanceof LoginPacket) return;
			if(ProtocolInfo::CURRENT_PROTOCOL ==  && ProtocolInfo::CURRENT_PROTOCOL == 465 && ProtocolInfo::CURRENT_PROTOCOL == 471){
				if(ProtocolInfo::CURRENT_PROTOCOL == 440 or ProtocolInfo::CURRENT_PROTOCOL == 448){
					if($pk->protocol >= 437 && $pk->protocol <= 441){
						$pk->protocol = ProtocolInfo::CURRENT_PROTOCOL;
					}else{
						$pk->protocol = $pk->protocol;
					}
				}
				if(ProtocolInfo::CURRENT_PROTOCOL == 465){
					if($pk->protocol >= 437 && $pk->protocol <= 448){
						$pk->protocol = ProtocolInfo::CURRENT_PROTOCOL;
					}
				}
			}else{
				$pk->protocol;
			}
	     }

}
