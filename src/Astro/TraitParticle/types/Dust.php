<?php

declare(strict_types=1);

namespace Astro\TraitParticle\types;

use pocketmine\player\Player;
use pocketmine\world\particle\DustParticle;
use pocketmine\color\Color;

function randomFl(float $min, float $max) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

class Dust extends DefaultTrait {

    protected $i = 0;

    public function __construct(Player $player) {
        parent::__construct($player, "Firework", null, 0.01);
    }

    public function onActivate() {
        $this->createDustLine($this->getPlayer());
    }

    private function createDustLine(Player $player) {
        $pos = $player->getPosition();
        $player->getWorld()->addParticle($pos->add(randomFl(-1, 1), randomFl(-1, 1), randomFl(-1, 1)), new DustParticle(new Color(mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255))));
    }
}