<?php

namespace App\Controller;

use App\Entity\MyEntity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/")
     */
    public function myAction()
    {
        $entity = new MyEntity();
        $this->em->persist($entity);
        $this->em->flush();

        $count = count($this->em->getRepository(MyEntity::class)->findAll());

        return new Response(sprintf('found %d entities!', $count));
    }
}
