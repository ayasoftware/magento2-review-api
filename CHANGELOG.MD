# Changelog

### Unreleased

### Fixed
- Allow partial review updates, including approval requests that only change `review_status`.
- Accept legacy `status_id` input for review approval and rejection requests.

## [1.4.0]

Refactoring, fixes in type hinting. Support for >= PHP 7.1

## [1.3.0]

### Fixed
- Get product reviews - return correct date for `created_at` field.

### Changed/Improved
- Add Rating Id and Percent to RatingVoteInterface

## [1.2.0]

### Fixed
- Fix saving review ratings. Add option to update ratings

### Changed/Improved
- Change RatingVoteInterface, change attribute_code to rating_name, and id to vote_id

## [1.1.0]

### Added
- Added support for ratings

## [1.0.0]
First version
