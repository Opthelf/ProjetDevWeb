<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\ConnectedObject;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new User;
        $product->setUsers('visiteur');
        $manager->persist($product);

        

        $manager->flush();
    }
}
