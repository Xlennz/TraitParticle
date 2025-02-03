<?php

declare(strict_types=1);

namespace Astro\TraitParticle\types;

use pocketmine\player\Player;
use pocketmine\world\particle\FlameParticle;
use vennv\vapm\System;

class Spin extends DefaultTrait {

    protected int $count = 0;
    protected int $cir = 0;
    protected int $time = 0;

    public function __construct(Player $player) {
        parent::__construct($player, "Spin", new FlameParticle(), 0.5);
    }

    public function getAdd() : float {
        return 0.2;
    }

    public function getUnderAdd() : float {
        return -0.2;
    }

    public function onActivate(){
        $this->player->getWorld()->addParticle($this->player->getPosition()->add(0 + $this->getAdd(), 0, 0), $this->particle);
        if($this->cir === 0) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.1), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.3), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.4), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 500);
            $this->cir = 1;
            return;
        }

        if($this->cir === 1) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.1), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.2), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.3), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.4), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 500);
            $this->cir = 2;
            return;
        }

        if($this->cir === 2) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.2), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.3), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.4), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.6), $this->particle);
            }, 500);
            $this->cir = 3;
            return;
        }

        if($this->cir === 3) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.3), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.4), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.6), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.7), $this->particle);
            }, 500);
            $this->cir = 4;
            return;
        }

        if($this->cir === 4) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.4), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.6), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.7), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.8), $this->particle);
            }, 500);
            $this->cir = 5;
            return;
        }

        if($this->cir === 5) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.5), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.6), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.7), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.8), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 0.9), $this->particle);
            }, 500);
            $this->cir = 6;
            return;
        }

        if($this->cir === 6) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.6), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.7), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.8), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 0.9), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 1), $this->particle);
            }, 500);
            $this->cir = 7;
            return;
        }

        if($this->cir === 7) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.7), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.8), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 0.9), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 1), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 1.1), $this->particle);
            }, 500);
            $this->cir = 8;
            return;
        }

        if($this->cir === 8) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.8), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 0.9), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 1), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 1.1), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 1.2), $this->particle);
            }, 500);
            $this->cir = 9;
            return;
        }

        if($this->cir === 9) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 0.9), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 1), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 1.1), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 1.2), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 1.3), $this->particle);
            }, 500);
            $this->cir = 10;
            return;
        }

        if($this->cir === 10) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.1 + $this->getAdd(), 0, 1), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.2 + $this->getAdd(), 0, 1.1), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.3 + $this->getAdd(), 0, 1.2), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.4 + $this->getAdd(), 0, 1.3), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(0.5 + $this->getAdd(), 0, 1.4), $this->particle);
            }, 500);
            $this->cir = 11;
            return;
        }

        if($this->cir === 11) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, 0), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.1), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.2), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.3), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.4), $this->particle);
            }, 500);
            $this->cir = 12;
            return;
        }

        if($this->cir === 12) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.1), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.2), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.3), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.4), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.5), $this->particle);
            }, 500);
            $this->cir = 13;
            return;
        }

        if($this->cir === 13) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.2), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.3), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.4), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.5), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.6), $this->particle);
            }, 500);
            $this->cir = 14;
            return;
        }

        if($this->cir === 14) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.3), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.4), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.5), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.6), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.7), $this->particle);
            }, 500);
            $this->cir = 15;
            return;
        }

        if($this->cir === 15) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.4), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.5), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.6), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.7), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.8), $this->particle);
            }, 500);
            $this->cir = 16;
            return;
        }

        if($this->cir === 16) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.5), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.6), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.7), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.8), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -0.9), $this->particle);
            }, 500);
            $this->cir = 17;
            return;
        }

        if($this->cir === 17) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.6), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.7), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.8), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -0.9), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -1), $this->particle);
            }, 500);
            $this->cir = 18;
            return;
        }

        if($this->cir === 18) {
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.1 + $this->getUnderAdd(), 0, -0.7), $this->particle);
            }, 100);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.2 + $this->getUnderAdd(), 0, -0.8), $this->particle);
            }, 200);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.3 + $this->getUnderAdd(), 0, -0.9), $this->particle);
            }, 300);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.4 + $this->getUnderAdd(), 0, -1), $this->particle);
            }, 400);
            System::setTimeout(function() {
                $this->player->getWorld()->addParticle($this->player->getPosition()->add(-0.5 + $this->getUnderAdd(), 0, -1.1), $this->particle);
            }, 500);
            $this->cir = 0;
            return;
        }
    }
}
