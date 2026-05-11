<?php
declare(strict_types=1);

namespace Ayasoftware\ReviewApi\Api;

interface ReviewAggregatorInterface
{
    public function aggregate(\Ayasoftware\ReviewApi\Api\Data\ReviewInterface $review): void;
}
