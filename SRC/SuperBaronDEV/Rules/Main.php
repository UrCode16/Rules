<?php
namespace SuperBaronDEV\rules; 
use pocketmine\plugin\PluginBase; 
use pocketmine\command\Command;
use pocketmine\command\ComamndSender;
class Rules expands PluginBase{
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "rules"){
      $sender->sendMessage("§eRegeln Sind§6-§71.Nicht Spamen    2.Nicht Griefen    §73.Schreiben Keine Bosen Worter    4.Nicht fragen Nach op oder GM");
      return false;
    }
    return false;
  }
}
