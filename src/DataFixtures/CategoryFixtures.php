<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class CategoryFixtures extends Fixture implements FixtureGroupInterface
{
    public const CATEGORY_REFERENCE = 'category';

    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 3; $i++) {
            $category = new Category();
            $category->setName('category ' . $i);
            $manager->persist($category);
        }

        $manager->flush();
        $this->addReference(self::CATEGORY_REFERENCE, $category);
    }

    public static function getGroups(): array
    {
        return ['group2'];
    }
}
