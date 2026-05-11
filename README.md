### Overview
Currently, Magento 2 does not provide the REST API for the Reviews Extension of the products. 
This module implement WebAPI for product reviews (partially)

Tested compatibility target: Magento Open Source / Adobe Commerce `2.4.8` with PHP `8.3` and `8.4`.

Module allow:
- Get one review 
- Create review with ratings
- Update review with ratings
- Search reviews
- Get product reviews

| Resource | Request method | Description |
| ------------- | ------------- | ------------- | 
| /V1/reviews/:id | GET | Get one review |
| /V1/reviews/:id | PUT | Update review |
| /V1/reviews/:id | DELETE | Delete review |
| /V1/reviews/ | POST | Create review |
| /V1/reviews/ | GET |  Search reviews |
| /V1/products/:sku/reviews | GET | Get product reviews |

[Docs for adding a new review with ratings](docs/api-specs.md)

### Install

To install this module please use composer dependency manager. In Your Magento2 folder please do execute:

```bash
composer require ayasoftware/magento2-review-api
php bin/magento setup:upgrade 
```
