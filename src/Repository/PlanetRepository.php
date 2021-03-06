<?php

namespace App\Repository;

use App\Entity\Planet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Planet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Planet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Planet[]    findAll()
 * @method Planet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Planet::class);
    }

    public function getAllPlanets($order) {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAllWithSearch(?string $term)
    {
        $qb = $this->createQueryBuilder('p');
        if ($term) {
            $qb->andWhere('p.name LIKE :term')
                ->setParameter('term', '%' . $term . '%');
        }
        return $qb
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
