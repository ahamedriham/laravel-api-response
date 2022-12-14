<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Taxionus\\ResponseBuilder\\ApiCodesHelpers' => $baseDir . '/src/ApiCodesHelpers.php',
    'Taxionus\\ResponseBuilder\\BaseApiCodes' => $baseDir . '/src/BaseApiCodes.php',
    'Taxionus\\ResponseBuilder\\Contracts\\ConverterContract' => $baseDir . '/src/Contracts/ConverterContract.php',
    'Taxionus\\ResponseBuilder\\Contracts\\ExceptionHandlerContract' => $baseDir . '/src/Contracts/ExceptionHandlerContract.php',
    'Taxionus\\ResponseBuilder\\Contracts\\InvalidTypeExceptionContract' => $baseDir . '/src/Contracts/InvalidTypeExceptionContract.php',
    'Taxionus\\ResponseBuilder\\Converter' => $baseDir . '/src/Converter.php',
    'Taxionus\\ResponseBuilder\\Converters\\ArrayableConverter' => $baseDir . '/src/Converters/ArrayableConverter.php',
    'Taxionus\\ResponseBuilder\\Converters\\JsonSerializableConverter' => $baseDir . '/src/Converters/JsonSerializableConverter.php',
    'Taxionus\\ResponseBuilder\\Converters\\ToArrayConverter' => $baseDir . '/src/Converters/ToArrayConverter.php',
    'Taxionus\\ResponseBuilder\\ExceptionHandlerHelper' => $baseDir . '/src/ExceptionHandlerHelper.php',
    'Taxionus\\ResponseBuilder\\ExceptionHandlers\\DefaultExceptionHandler' => $baseDir . '/src/ExceptionHandlers/DefaultExceptionHandler.php',
    'Taxionus\\ResponseBuilder\\ExceptionHandlers\\HttpExceptionHandler' => $baseDir . '/src/ExceptionHandlers/HttpExceptionHandler.php',
    'Taxionus\\ResponseBuilder\\ExceptionHandlers\\ValidationExceptionHandler' => $baseDir . '/src/ExceptionHandlers/ValidationExceptionHandler.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\ArrayWithMixedKeysException' => $baseDir . '/src/Exceptions/ArrayWithMixedKeysException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\ClassNotFound' => $baseDir . '/src/Exceptions/ClassNotFound.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\ConfigurationException' => $baseDir . '/src/Exceptions/ConfigurationException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\ConfigurationNotFoundException' => $baseDir . '/src/Exceptions/ConfigurationNotFoundException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\IncompatibleTypeException' => $baseDir . '/src/Exceptions/IncompatibleTypeException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\IncompleteConfigurationException' => $baseDir . '/src/Exceptions/IncompleteConfigurationException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\InvalidConfigurationElementException' => $baseDir . '/src/Exceptions/InvalidConfigurationElementException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\InvalidConfigurationException' => $baseDir . '/src/Exceptions/InvalidConfigurationException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\InvalidTypeException' => $baseDir . '/src/Exceptions/InvalidTypeException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\MissingConfigurationKeyException' => $baseDir . '/src/Exceptions/MissingConfigurationKeyException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\NotArrayException' => $baseDir . '/src/Exceptions/NotArrayException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\NotBooleanException' => $baseDir . '/src/Exceptions/NotBooleanException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\NotIntegerException' => $baseDir . '/src/Exceptions/NotIntegerException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\NotObjectException' => $baseDir . '/src/Exceptions/NotObjectException.php',
    'Taxionus\\ResponseBuilder\\Exceptions\\NotStringException' => $baseDir . '/src/Exceptions/NotStringException.php',
    'Taxionus\\ResponseBuilder\\ResponseBuilder' => $baseDir . '/src/ResponseBuilder.php',
    'Taxionus\\ResponseBuilder\\ResponseBuilderBase' => $baseDir . '/src/ResponseBuilderBase.php',
    'Taxionus\\ResponseBuilder\\ResponseBuilderServiceProvider' => $baseDir . '/src/ResponseBuilderServiceProvider.php',
    'Taxionus\\ResponseBuilder\\Tests\\BaseApiCodes\\BaseApiCodesTest' => $baseDir . '/tests/phpunit/BaseApiCodes/BaseApiCodesTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Builder\\BuilderTest' => $baseDir . '/tests/phpunit/Builder/BuilderTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Builder\\DummyResponseBuilder' => $baseDir . '/tests/phpunit/Builder/DummyResponseBuilder.php',
    'Taxionus\\ResponseBuilder\\Tests\\Builder\\FactoryTest' => $baseDir . '/tests/phpunit/Builder/FactoryTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Builder\\MakeTest' => $baseDir . '/tests/phpunit/Builder/MakeTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\ArrayTest' => $baseDir . '/tests/phpunit/Converter/ArrayTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\ConverterGetClassesMappingTest' => $baseDir . '/tests/phpunit/Converter/ConverterGetClassesMappingTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\ConverterTest' => $baseDir . '/tests/phpunit/Converter/ConverterTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\Converters\\FakeConverter' => $baseDir . '/tests/phpunit/Converter/Converters/FakeConverter.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\DefaultConfigTest' => $baseDir . '/tests/phpunit/Converter/DefaultConfigTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\ObjectTest' => $baseDir . '/tests/phpunit/Converter/ObjectTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\PrimitivesGetPrimitivesMappingTest' => $baseDir . '/tests/phpunit/Converter/PrimitivesGetPrimitivesMappingTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Converter\\PrimitivesTest' => $baseDir . '/tests/phpunit/Converter/PrimitivesTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\ExceptionHandlerHelper\\ExceptionHandlerHelperTest' => $baseDir . '/tests/phpunit/ExceptionHandlerHelper/ExceptionHandlerHelperTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Exceptions\\InvalidTypeExceptionTest' => $baseDir . '/tests/phpunit/Exceptions/InvalidTypeExceptionTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Localization\\TranslationTest' => $baseDir . '/tests/phpunit/Localization/TranslationTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Models\\TestModel' => $baseDir . '/tests/phpunit/Models/TestModel.php',
    'Taxionus\\ResponseBuilder\\Tests\\Models\\TestModelArrayable' => $baseDir . '/tests/phpunit/Models/TestModelArrayable.php',
    'Taxionus\\ResponseBuilder\\Tests\\Models\\TestModelChild' => $baseDir . '/tests/phpunit/Models/TestModelChild.php',
    'Taxionus\\ResponseBuilder\\Tests\\Models\\TestModelJsonResource' => $baseDir . '/tests/phpunit/Models/TestModelJsonResource.php',
    'Taxionus\\ResponseBuilder\\Tests\\Models\\TestModelJsonSerializable' => $baseDir . '/tests/phpunit/Models/TestModelJsonSerializable.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\AutoConversionTest' => $baseDir . '/tests/phpunit/ResponseBuilder/AutoConversionTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\CustomResponseObjectTest' => $baseDir . '/tests/phpunit/ResponseBuilder/CustomResponseObjectTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\ErrorTest' => $baseDir . '/tests/phpunit/ResponseBuilder/ErrorTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\InternalsTest' => $baseDir . '/tests/phpunit/ResponseBuilder/InternalsTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\MyResponseBuilder' => $baseDir . '/tests/phpunit/ResponseBuilder/MyResponseBuilder.php',
    'Taxionus\\ResponseBuilder\\Tests\\ResponseBuilder\\SuccessTest' => $baseDir . '/tests/phpunit/ResponseBuilder/SuccessTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\TestCase' => $baseDir . '/tests/phpunit/TestCase.php',
    'Taxionus\\ResponseBuilder\\Tests\\Traits\\ApiCodesTests' => $baseDir . '/tests/Traits/ApiCodesTests.php',
    'Taxionus\\ResponseBuilder\\Tests\\Traits\\TestingHelpers' => $baseDir . '/tests/Traits/TestingHelpers.php',
    'Taxionus\\ResponseBuilder\\Tests\\Traits\\TraitsTest' => $baseDir . '/tests/phpunit/Traits/TraitsTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Util\\MergeConfigTest' => $baseDir . '/tests/phpunit/Util/MergeConfigTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Util\\SortByPriTest' => $baseDir . '/tests/phpunit/Util/SortByPriTest.php',
    'Taxionus\\ResponseBuilder\\Tests\\Validator\\ValidatorTest' => $baseDir . '/tests/phpunit/Validator/ValidatorTest.php',
    'Taxionus\\ResponseBuilder\\Type' => $baseDir . '/src/Type.php',
    'Taxionus\\ResponseBuilder\\Util' => $baseDir . '/src/Util.php',
    'Taxionus\\ResponseBuilder\\Validator' => $baseDir . '/src/Validator.php',
);
