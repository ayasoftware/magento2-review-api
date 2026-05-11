<?php
/**
 * Copyright Ayasoftware
 */
namespace Ayasoftware\ReviewApi\Model;

use Ayasoftware\ReviewApi\Api\Data\ReviewSearchResultInterface;
use Magento\Framework\Api\SearchResults;

/**
 * @inheritdoc
 */
class ReviewSearchResult extends SearchResults implements ReviewSearchResultInterface
{
}
