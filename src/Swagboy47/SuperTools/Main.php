<?php

namespace Swagboy47\SuperTools;

use pocketmine\command\Command;
use pocketmine\player;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\inventory;
use pocketmine\inventory\PlayerInventory;
use pocketmine\block\GoldOre;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\block\IronOre;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\level\Explosion;
use pocketmine\block\Block;

class Main extends PluginBase implements Listener{
public function onEnable(){
@mkdir($this->getDataFolder());
$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML, array());
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
    switch($cmd->getName()) {
      case "SuperTools":
         if($args[0] == "allow" and $sender->isOp()){
           if(isset($args[1]){
           $player = $this->getServer()->getPlayer($args[1]);
			if($player === null){
				$sender->sendMessage("Can't find player " . $args[1]);
				return true;
			}
			else{
			  $this->config->set($player->getName());
			  $sender->sendMessage("player" . $args[1] . "is now allowed to use SuperTools");
			}
         }
         }
			 if($args[0] == "disallow" and $sender->isOp()){
            if(isset($args[1])){
               if(!$this->config->exists($player->getName())){
                 $sender->sendMessage($args[1] . "is not even allowed to use the SuperTools");
               }
                  elseif($this->config->exists($player->getName())){
                    $this->config->remove($player->getName());
                 $sender->sendMessage($args[1] . "is disallowed to use the SuperTools");
                  }
            }
			 }
    }
  }
   
      public function onBreak(BlockBreakEvent $event){
      $player = $event->getPlayer();
      $item = $event->getItem();
      $block = $event->getBlock()->getID()
      $helmet =  $player->getInventory()->getHelmet->getID();
      $drops = $block->getDrops($item);
    if($helmet == 298 and $item->isPickaxe){
    	$block1 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block3 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $entity->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	$block2 = $block->getLevel()->getBlockIdAt($block->x +1, $block->y, $block->z);
    	if($block1 = $block){
    		$block->getLevel()->setBlockIdAt($block1->x, $block1->y, $block1->z, 0);
    		$block->getLevel()->dropItem($block1->x, $block1->y, $block1->z, $drops);
    		
    	}
      
      
    }
        
        
  
  
    
  
                  
          
           
           
          
