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
 * Class TitleValidator - validates review stores
 */
class StoresValidator implements ReviewValidatorInterface
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
     * Check if review has stores set
     *
     * @param ReviewInterface $review
     *
     * @return ValidationResult
     */
    public function validate(ReviewInterface $review): ValidationResult
    {
        $value = (array)$review->getStores();
        $errors = [];

        if (empty($value)) {
            $errors[] = __('"%field" can not be empty.', ['field' => ReviewInterface::STORES]);
        }

        return $this->validationResultFactory->create(['errors' => $errors]);
    }
}
