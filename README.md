# Translation App SDK for PHP

## Introduction

Welcome to the Translation App SDK for PHP! This library provides a seamless integration with our Translation App, allowing you to easily manage translations within your PHP application. Whether you're building a multilingual website or a globalized application, this SDK simplifies the process of handling translations.

## Installation

Install the Translation App SDK using [Composer](https://getcomposer.org/):

```bash
composer require ucraft-com/translation-app-sdk
```

## QueryTranslationItemsValueObject

The `QueryTranslationItemsValueObject` is used for querying translation items. It holds values for specifying the resource, resource ID, language code, and additional options for querying.

### Usage Example

```php
use Uc\TranslationAppSdk\ValueObjects\QueryTranslationItemsValueObject;

// Create a QueryTranslationItemsValueObject instance
$queryObject = new QueryTranslationItemsValueObject(
    'en-US', // locale
    'your_resource', // optional, ex: project_id 
    1, // optional, ex: project id (1)
    'key', // optional, key to search
    ['key' => 'asc'], // optional, or 'updated_at' => 'desc'
    1, // optional, page number
    20, // optional, first n entites
    false, // optional, find all, default false
);

// Accessing properties
$resource = $queryObject->getResource();
$resourceId = $queryObject->getResourceId();
$languageCode = $queryObject->getLanguageCode();
$key = $queryObject->getKey();
$orderBy = $queryObject->getOrderBy();
$page = $queryObject->getPage();
$first = $queryObject->getFirst();
$findAll = $queryObject->getFindAll();
```
# UpsertTranslationItemValueObject

The `UpsertTranslationItemValueObject` is used for upserting translation items. It holds values for specifying the translation value, language code, translation entry ID, resource, resource ID, editor name, and optional parameters.

## Usage Example

```php
use Uc\TranslationAppSdk\ValueObjects\UpsertTranslationItemValueObject;

// Create an UpsertTranslationItemValueObject instance
$upsertObject = new UpsertTranslationItemValueObject(
    'Hello, World!', // value
    'en-US', // locale
    'your_translation_entry_id', // translation entry id (relation)
    'John Doe', // editor name
    'your_resource', // optional, ex: project_id 
    1, // optional, ex: project id (1)
    null, // optional, translation id (when updating, when null: creating)
    ['param1' => 'value1', 'param2' => 'value2'] // optional, some params that may be used
);

// Accessing properties
$resource = $upsertObject->getResource();
$resourceId = $upsertObject->getResourceId();
$translationEntryId = $upsertObject->getTranslationEntryId();
$editorName = $upsertObject->getEditorName();
$value = $upsertObject->getValue();
$languageCode = $upsertObject->getLanguageCode();
$hasTranslationId = $upsertObject->hasTranslationId();
$translationId = $upsertObject->getTranslationId();
$hasParams = $upsertObject->hasParams();
$params = $upsertObject->getParams();
```
# TranslationAppClient

The `TranslationAppClient` is a client class that allows you to interact with RPC methods for managing translations.

## Usage Example

```php
use Uc\TranslationAppSdk\TranslationAppClient;
use Uc\TranslationAppSdk\ValueObjects\UpsertTranslationItemValueObject;
use Uc\TranslationAppSdk\ValueObjects\QueryTranslationItemsValueObject;

// Create a TranslationAppClient instance
$client = new TranslationAppClient($yourTranslationClientInstance);

// Example QueryTranslationItemsValueObject
$queryObject = new QueryTranslationItemsValueObject(
    'en-US',
    'your_resource',
    1,
    'key',
    ['key' => 'asc'],
    1,
    20,
    false,
);

// Example UpsertTranslationItemValueObject
$upsertObject = new UpsertTranslationItemValueObject(
    'Hello, World!',
    'en-US',
    'your_translation_entry_id',
    'John Doe',
    'your_resource', 
    1, 
    null, 
    ['param1' => 'value1', 'param2' => 'value2'] 
);

// Get paginated translations
$paginatedTranslations = $client->getTranslations($queryObject);

// Find all translations without pagination
$allTranslations = $client->findAll($queryObject);

// Upsert a translation item
$upsertedTranslation = $client->upsert($upsertObject);
```
## License

The Translation App SDK for PHP is open-source software licensed under the [MIT License](LICENSE.md).
