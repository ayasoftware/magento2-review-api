<?php
/**
 * Copyright Ayasoftware
 */
declare(strict_types=1);

namespace Ayasoftware\ReviewApi\Model\Review\Validator;

use Ayasoftware\ReviewApi\Api\Data\ReviewInterface;
use Ayasoftware\ReviewApi\Validation\ValidationResult;
use Ayasoftware\ReviewApi\Validation\ValidationResultFactory;
use Ayasoftware\ReviewApi\Model\ReviewValidatorInterface;

/**
 * Class TitleValidator - - validates review entity
 */
class ReviewEntityValidator implements ReviewValidatorInterface
{
    /**
     * @var ValidationResultFactory
     */
    private $validationResultFactory;

    /**
     * @param ValidationResultFactory $validationResultFactory
     */
    public function __construct(ValidationResultFactory $validationResultFactory)
    {
        $this->validationResultFactory = $validationResultFactory;
    }

    /**
     * Check if review entity has been set
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult
    {
        $value = (string)$review->getReviewEntity();
        $errors = [];

        if (trim($value) === '') {
            $errors[] = __('"%field" can not be empty.', ['field' => ReviewInterface::REVIEW_ENTITY]);
        }

        return $this->validationResultFactory->create(['errors' => $errors]);
    }
}
