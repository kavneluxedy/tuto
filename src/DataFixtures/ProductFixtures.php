<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 11; $i++) {
            $product = new Product();
            $product->setName('product ' . $i);
            $product->setPrice(mt_rand(10, 100));
            $product->setCategory(
                $this->getReference(
                    CategoryFixtures::CATEGORY_REFERENCE
                )
            );
            $manager->persist($product);
        }
        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['group1'];
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}
