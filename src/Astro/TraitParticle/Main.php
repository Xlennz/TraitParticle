<?php

declare(strict_types=1);

namespace Astro\TraitParticle;

use Astro\TraitParticle\types\DefaultTrait;
use Astro\TraitParticle\types\Spin;
use Astro\TraitParticle\types\Vongtron;
use Astro\TraitParticle\types\Dust;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use vennv\vapm\SampleMacro;
use vennv\vapm\System;
use vennv\vapm\VapmPMMP;

class Main extends PluginBase implements Listener{

    public array $user = [];

    protected function onEnable() : void {
        VapmPMMP::init($this);
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("TraitParticle enabled!");
    }

    public function onQuit(\pocketmine\event\player\PlayerQuitEvent $event) : void {
        $player = $event->getPlayer();
        if(isset($this->user[$player->getName()])) {
            unset($this->user[$player->getName()]);
        }
    }

    public function addUser(Player $player, DefaultTrait $trait, SampleMacro $task) : void {
        $this->user[$player->getName()] = [$trait, $task];
    }

    public function removeUser(Player $player) : void {
        if(isset($this->user[$player->getName()])) {
            unset($this->user[$player->getName()]);
        }
    }

    public function existsDeleteUser(Player $player) : void {
        if(isset($this->user[$player->getName()])) {
            $task = $this->user[$player->getName()][1];
            System::clearInterval($task);
            unset($this->user[$player->getName()]);
        }
    }

    public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $command, string $label, array $args): bool {
        if($command->getName() === "traitparticle") {
            if(!$sender instanceof Player) {
                $sender->sendMessage(TextFormat::RED . "This command can only be used in-game!");
                return false;
            }

            if(!isset($args[0])) {
                $sender->sendMessage(TextFormat::RED . "Usage: /traitparticle help");
                return false;
            }

            if($args[0] === "help") {
                $sender->sendMessage(TextFormat::YELLOW . "TraitParticle Commands:");
                $sender->sendMessage(TextFormat::GREEN . "/traitparticle help - Displays the help menu");
                $sender->sendMessage(TextFormat::GREEN . "/traitparticle list - Lists all available particles");
                $sender->sendMessage(TextFormat::GREEN . "/traitparticle set <particle> - Sets your particle");
                $sender->sendMessage(TextFormat::GREEN . "/traitparticle turn <on/off> - Turns your particle on or off");
                return true;
            }


            if($args[0] === "list") {
                $sender->sendMessage(TextFormat::YELLOW . "Available Particles:");
                $sender->sendMessage(TextFormat::GREEN . "Spin");
                $sender->sendMessage(TextFormat::GREEN . "Circle");
                $sender->sendMessage(TextFormat::GREEN . "firework");
                return true;
            }

            if($args[0] === "set") {
                if(!isset($args[1])) {
                    $sender->sendMessage(TextFormat::RED . "Usage: /traitparticle set <particle>");
                    return false;
                }

                if($args[1] === "spin") {
                    $this->existsDeleteUser($sender);
                    $trait = new Spin($sender);
                    $task = System::setInterval(function() use ($sender) {
                        $trait = $this->user[$sender->getName()][0];
                        $trait->onActivate();
                    }, (int)($trait->getSecond() * 1000));
                    $this->addUser($sender, $trait, $task);
                    $sender->sendMessage(TextFormat::GREEN . "Particle set to ". $trait->getName() ."!");
                    return true;
                }

                if($args[1] === "circle") {
                    $this->existsDeleteUser($sender);
                    $trait = new Vongtron($sender);
                    $task = System::setInterval(function() use ($sender) {
                        $trait = $this->user[$sender->getName()][0];
                        $trait->onActivate();
                    }, (int)($trait->getSecond() * 1000));
                    $this->addUser($sender, $trait, $task);
                    $sender->sendMessage(TextFormat::GREEN . "Particle set to ". $trait->getName() ."!");
                    return true;
                }

                if($args[1] === "firework") {
                    $this->existsDeleteUser($sender);
                    $trait = new Dust($sender);
                    $task = System::setInterval(function() use ($sender) {
                        $trait = $this->user[$sender->getName()][0];
                        $trait->onActivate();
                    }, (int)($trait->getSecond() * 1000));
                    $this->addUser($sender, $trait, $task);
                    $sender->sendMessage(TextFormat::GREEN . "Particle set to ". $trait->getName() ."!");
                    return true;
                }

                $sender->sendMessage(TextFormat::RED . "Particle not found!");
                return false;
            }

            if($args[0] === "turn") {
                if(!isset($args[1])) {
                    $sender->sendMessage(TextFormat::RED . "Usage: /traitparticle turn <on/off>");
                    return false;
                }

                if($args[1] === "off") {
                    $this->removeUser($sender);
                    $sender->sendMessage(TextFormat::GREEN . "Particle turned off!");
                    return true;
                }
            }

            return true;
        }
        return false;
    }
}