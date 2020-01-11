<?php
namespace SuperBaronDEV\rules; 
use pocketmine\plugin\PluginBase; 
class Rules expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "rules"){
      $sender->sendMessage("§ePravidla jsou-");
      return false;
    }
    return false;
  }
}
