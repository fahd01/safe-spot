<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Repository\BidRepository;
use App\Entity\Automation;
use App\Entity\BidStatus;

class TwigExtensions extends AbstractExtension {

    private $bidRepository;

    public function __construct(BidRepository $bidRepository) {
      $this->bidRepository = $bidRepository;
    }

    public function getFunctions() {
      return [
        new TwigFunction('getPlacedBids', [$this, 'getPlacedBids']),
        new TwigFunction('getApprovedBids', [$this, 'getApprovedBids']),
      ];
    }

    public function getPlacedBids(Automation $automation): int {
        return $this->bidRepository->count(['automation' => $automation->getId()] );
    }

    public function getApprovedBids(Automation $automation): int {
        return $this->bidRepository->count(['automation' => $automation->getId(), 'status' => BidStatus::Approved->value]);
    }
}