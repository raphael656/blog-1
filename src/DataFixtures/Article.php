<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Article extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $Articles = new \App\Entity\Article();

        $Articles->setNom('ELLA');
        $Articles->setSlug('text');
        $Articles->setContent('text');

        $manager-> persist($Articles);

        $manager->flush();

    }
}
