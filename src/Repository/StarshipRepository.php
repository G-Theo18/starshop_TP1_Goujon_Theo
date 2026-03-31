<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Collection de vaisseaux récupérée');

        return [
            new Starship(
                id: 1,
                name: 'USS LeafyCruiser (NCC-0001)',
                class: 'Garden',
                captain: 'Jean-Luc Pickles',
                status: StarshipStatusEnum::IN_PROGRESS,
            ),
            new Starship(
                id: 2,
                name: 'USS Espresso (NCC-1234-C)',
                class: 'Latte',
                captain: 'James T. Quick!',
                status: StarshipStatusEnum::COMPLETED,
            ),
            new Starship(
                id: 3,
                name: 'USS WanderLust (NCC-2024-W)',
                class: 'Delta Tourist',
                captain: 'Kathryn Journeyway',
                status: StarshipStatusEnum::WAITING,
            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}
