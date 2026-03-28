<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\Starship;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                id: 1,
                name: 'USS LeafyCruiser (NCC-0001)',
                class: 'Garden',
                captain: 'Jean-Luc Pickles',
                status: 'taken over by Q',
            ),
            new Starship(
                id: 1,
                name: 'USS Espresso (NCC-1234-C)',
                class: 'Latte',
                captain: 'James T. Quick!',
                status: 'repaired',
            ),
            new Starship(
                id: 1,
                name: 'USS WanderLust (NCC-2024-W)',
                class: 'Delta Tourist',
                captain: 'Kathryn Journeyway',
                status: 'under construction',
            ),
        ];

        return $this->json($starships);
    }
}
