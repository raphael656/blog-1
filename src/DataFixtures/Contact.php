<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $Contacts = new \App\Entity\Contact();
        $Contacts->setName("dezdeze");
        $Contacts->setFirstname('lal');
        $Contacts->setMessage('msg');
        $Contacts->setNewsletter('le futur');
        $Contacts->setEmail('dezdeze@gmail.com');
        $Contacts->setSujet('sujet');

        $manager-> persist($Contacts);

        $manager->flush();
    }
}
