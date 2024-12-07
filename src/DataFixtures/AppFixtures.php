<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;

use App\Entity\Like;
use App\Entity\Tool;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Category;
use App\Entity\Creation;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create("fr_FR");
    }


    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // Users
        $users = [];

        $admin = new User();
        $admin ->setFullName('Administrateur du Portfolio')
            ->setPseudo(null)
            ->setEmail('admin@portfolio.fr')
            ->setRoles(['ROLE_USER','ROLE_ADMIN'])
            ->setPassword('password');

        $users[] = $admin;
        $manager->persist($admin);
        
        for ($i = 0; $i < 10; $i++) {
            $user =  new User();
            $user->setFullName($this->faker->name());
            $user->setPseudo(mt_rand(0, 1) === 1 ? $this->faker->firstName() : null);
            $user->setEmail($this->faker->email());
            $user->setRoles(["ROLE_USER"]);
            $user->setPlainPassword("password");

            $users[] = $user;
            $manager->persist($user);
        }

        // Category
        $categories = [];
        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->setName($this->faker->word());

            $categories[] = $category;
            $manager->persist($category);
        }

        // Tool
        $tools = [];
        for ($i = 0; $i < 20; $i++) {
            $tool = new Tool();
            $tool->setName($this->faker->word());
            $tool->setDescription(mt_rand(0, 1) === 1 ? $this->faker->sentence() : null);
            $tool->setReference(mt_rand(0, 1) === 1 ? $this->faker->url() : null);

            $tools[] = $tool;
            $manager->persist($tool);
        }

        // Creation
        $creations = [];
        for ($i = 0; $i < 10; $i++) {
            $creation = new Creation();
            $creation->setName($this->faker->word());
            $creation->setDescription(mt_rand(0, 1) === 1 ? $this->faker->sentence() : null);
            $creation->setImage(mt_rand(0, 1) === 1 ? $this->faker->url() : null);
            $creation->setCreatedAt($this->faker->DateTime());


            for ($k = 0; $k <= mt_rand(5, 15); $k++) {
                $creation->addTool($tools[mt_rand(0, count($tools) - 1)]);
            }

            for ($k = 0; $k <= mt_rand(0, 3); $k++) {
                $creation->addCategory($categories[mt_rand(0, count($categories) - 1)]);
            }

            $creations[] = $creation;
            $manager->persist($creation);
        }

        // Like
        for ($i = 0; $i < 50; $i++) {
            $like = new Like;
            $like->setCreation($creations[mt_rand(0, count($creations) - 1)]);
            $like->setUser($users[mt_rand(0, count($users) - 1)]);


            $manager->persist($like);
        }

        // Comment
        for ($i = 0; $i < 50; $i++) {
            $comment = new Comment();
            $comment->setContentComment($this->faker->sentence());
            $comment->setCreation($creations[mt_rand(0, count($creations) - 1)]);
            $comment->setUser($users[mt_rand(0, count($users) - 1)]);


            $manager->persist($comment);
        }

        $manager->flush();
    }
}
