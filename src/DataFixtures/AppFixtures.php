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
use App\Entity\Contact;
use App\Entity\UsernameHistory;
use DateTimeImmutable;
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
        // Users
        $users = [];

        $admin = new User();
        $admin->setFullName('Administrateur du Portfolio')
            ->setPseudo('Graphiste')
            ->setEmail('admin@portfolio.fr')
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN'])
            ->setPassword('$2y$13$FWrdGeqhVmVEvLkCVSEiB.BB8KnHCOp6OXMk8.Np2vOGjYLMYP/vq');

        $users[] = $admin;
        $manager->persist($admin);

        for ($i = 0; $i < 10; $i++) {
            $user =  new User();
            $user->setFullName($this->faker->name());
            $user->setPseudo($this->faker->firstName());
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

            // Récupérer toutes les images dans le dossier public
            $images = glob('public/images/*.{jpg,jpeg,png,webp}', GLOB_BRACE);
            $images = array_map(function ($image) {
                return str_replace('public/images/', '', $image);
            }, $images);


            $creation->setImage([$images[$i]]);

            $creation->setCreatedAt($this->faker->DateTime());
            $creation->setIsPublic(mt_rand(0, 1) == 1 ? true : false);


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

        // Username History
        for ($i = 0; $i < 20; $i++) {
            $usernameHistory = new UsernameHistory();
            $user = $users[mt_rand(0, count($users) - 1)];
            $usernameHistory->setUser($user);
            $usernameHistory->setOldPseudo($usernameHistory->getUser()->getPseudo());
            $usernameHistory->setNewPseudo($this->faker->firstName());
            $usernameHistory->getUser()->setPseudo($usernameHistory->getNewPseudo());
            $usernameHistory->setChangedAt(new DateTimeImmutable());

            $manager->persist($usernameHistory);
        }

        //Contact
        for ($i = 0; $i < 5; $i++) {
            $contact = new Contact();
            $contact->setFullName($this->faker->name())
                ->setEmail($this->faker->email())
                ->setSubject('Demande n°' . ($i + 1))
                ->setMessage($this->faker->text());

            $manager->persist($contact);
        }

        $manager->flush();
    }
}
