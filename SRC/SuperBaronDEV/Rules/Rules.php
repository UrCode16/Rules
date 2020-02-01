<?php
namespace SuperBaronDEV\rules; 
use pocketmine\plugin\PluginBase; 
use pocketmine\command\Command;
use pocketmine\command\ComamndSender;
class Rules expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "rules"){
      $sender->sendMessage("§eRules is§6-§71.don't spam    2.don't grief    §73.don't write bad words    4.don't ask for op");
      return false;
    }
    return false;
  }
}
