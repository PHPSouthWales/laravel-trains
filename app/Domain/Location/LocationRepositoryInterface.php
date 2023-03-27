<?php

declare(strict_types=1);

namespace App\Domain\Location;

interface LocationRepositoryInterface
{
    public function findByPostcode(string $postcode): Location;
}