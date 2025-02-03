<?php

declare(strict_types=1);

namespace Astro\TraitParticle\types;

use pocketmine\player\Player;
use pocketmine\world\particle\DustParticle;
use pocketmine\color\Color;
use pocketmine\world\Position;

class Vongtron extends DefaultTrait {

    protected $i = 0;

    public function __construct(Player $player) {
        parent::__construct($player, "Circle", null, 0.04);
    }

    public function onActivate() {
        $this->createCircleParticles($this->getPlayer(), $this->getPlayer()->getPosition()->add(0, 2.5, 0), -0.4);
        $this->createCircleParticles($this->getPlayer(), $this->getPlayer()->getPosition(), 0);
    }

    public function createCircleParticles($player, $pos, $add) {
        $level = $player->getWorld();
        $radius = 0.8 + $add;
        $distance = 0.1;
        $numParticles = round((2 * M_PI * $radius) / $distance);

        $angle = ($this->i / $numParticles) * (2 * M_PI);
        $x = $pos->getX() + $radius * cos($angle);
        $z = $pos->getZ() + $radius * sin($angle);
        $y = $pos->getY();

        $level->addParticle(new Position($x, $y, $z, $level), new DustParticle(new Color(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255))));
        
        $this->i++;
    }
}