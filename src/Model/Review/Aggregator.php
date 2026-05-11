<?php
declare(strict_types=1);

namespace Ayasoftware\ReviewApi\Model\Review;

use Ayasoftware\ReviewApi\Api\Data\ReviewInterface;
use Ayasoftware\ReviewApi\Api\ReviewAggregatorInterface;
use Ayasoftware\ReviewApi\Model\Converter\Review\ToModel;
use Magento\Review\Model\ResourceModel\Review as ReviewResource;

class Aggregator implements ReviewAggregatorInterface
{
    /**
     * @var ToModel
     */
    private $toModelConverter;

    /**
     * @var ReviewResource
     */
    private $reviewResource;

    /**
     * @param ToModel        $toModelConverter
     * @param ReviewResource $reviewResource
     */
    public function __construct(ToModel $toModelConverter, ReviewResource $reviewResource)
    {
        $this->toModelConverter = $toModelConverter;
        $this->reviewResource = $reviewResource;
    }

    /**
     * @inheirtDoc
     */
    public function aggregate(ReviewInterface $review): void
    {
        $model = $this->toModelConverter->toModel($review);
        $this->reviewResource->aggregate($model);
    }
}
