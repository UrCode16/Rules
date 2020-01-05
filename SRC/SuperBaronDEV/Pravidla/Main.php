<?php
namespace SuperBaronDEV\pravidla; 
use pocketmine\plugin\PluginBase; 
class Pravidla expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "pravidla"){
      $sender->sendMessage("§ePravidla jsou-");
      return false;
    }
    return false;
  }
}
