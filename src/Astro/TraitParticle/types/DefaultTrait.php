<?php

declare(strict_types=1);

namespace Astro\TraitParticle\types;

use pocketmine\player\Player;
use pocketmine\world\particle\Particle;

class DefaultTrait {

    public function __construct(public Player $player, public string $name, public ?Particle $particle, public float $second) {}

    public function getPlayer() : Player {
        return $this->player;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getSecond() : float {
        return $this->second;
    }

    public function getDelay() : float {
        return $this->second;
    }


    public function getParticle() : Particle {
        return $this->particle;
    }

    public function setParticle(Particle $particle) : void {
        $this->particle = $particle;
    }

    public function onActivate() {
        // Override this method
    }
}