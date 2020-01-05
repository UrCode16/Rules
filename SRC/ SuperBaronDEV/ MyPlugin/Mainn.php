<?php
namespace SuperBaronDEV\myplugin; 
use pocketmine\plugin\PluginBase; 
class MyPlugin expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "pravidla"){
      $sender->sendMessage("§ePravidla jsou-");
      return false;
    }
    return false;
  }
}
