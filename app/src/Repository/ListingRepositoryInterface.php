<?php

namespace App\Repository;

use App\Entity\Listing;

interface ListingRepositoryInterface
{
    public function findById(int $id): ?Listing;
    public function findByPropertyId(int $propertyId): ?Listing;
    public function findByName(string $name);
    public function findListingPriceNightExpensiveThan(float $price): ?array;
    public function findListingPriceNightBetween(float $priceFrom, float $priceTo): ?array;
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null): ?array;
    public function findAll(): ?array;
    public function save(Listing $listing): ?Listing;
}
