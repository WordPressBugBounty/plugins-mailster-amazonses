<?php

namespace Mailster\Aws3;

$mapping = array(
	'Mailster\\Aws3\\Aws\\data\\sts\\2011-06-15\\smoke.json' => __DIR__ . '/Aws/data/sts/2011-06-15/smoke.json.php',
	'Mailster\\Aws3\\Aws\\data\\sts\\2011-06-15\\paginators-1.json' => __DIR__ . '/Aws/data/sts/2011-06-15/paginators-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sts\\2011-06-15\\api-2.json' => __DIR__ . '/Aws/data/sts/2011-06-15/api-2.json.php',
	'Mailster\\Aws3\\Aws\\data\\sts\\2011-06-15\\endpoint-tests-1.json' => __DIR__ . '/Aws/data/sts/2011-06-15/endpoint-tests-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sts\\2011-06-15\\endpoint-rule-set-1.json' => __DIR__ . '/Aws/data/sts/2011-06-15/endpoint-rule-set-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sesv2\\2019-09-27\\paginators-1.json' => __DIR__ . '/Aws/data/sesv2/2019-09-27/paginators-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sesv2\\2019-09-27\\api-2.json' => __DIR__ . '/Aws/data/sesv2/2019-09-27/api-2.json.php',
	'Mailster\\Aws3\\Aws\\data\\sesv2\\2019-09-27\\endpoint-rule-set-1.json' => __DIR__ . '/Aws/data/sesv2/2019-09-27/endpoint-rule-set-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sesv2\\2019-09-27\\endpoint-tests-1.json' => __DIR__ . '/Aws/data/sesv2/2019-09-27/endpoint-tests-1.json.php',
	'Mailster\\Aws3\\Aws\\data\\sdk-default-configuration.json' => __DIR__ . '/Aws/data/sdk-default-configuration.json.php',
	'Mailster\\Aws3\\Aws\\data\\aliases.json'              => __DIR__ . '/Aws/data/aliases.json.php',
	'Mailster\\Aws3\\Aws\\data\\endpoints.json'            => __DIR__ . '/Aws/data/endpoints.json.php',
	'Mailster\\Aws3\\Aws\\data\\grandfathered-services.json' => __DIR__ . '/Aws/data/grandfathered-services.json.php',
	'Mailster\\Aws3\\Aws\\data\\endpoints_prefix_history.json' => __DIR__ . '/Aws/data/endpoints_prefix_history.json.php',
	'Mailster\\Aws3\\Aws\\data\\manifest.json'             => __DIR__ . '/Aws/data/manifest.json.php',
	'Mailster\\Aws3\\Aws\\data\\partitions.json'           => __DIR__ . '/Aws/data/partitions.json.php',
	'Mailster\\Aws3\\Aws\\Api\\Validator'                  => __DIR__ . '/Aws/Api/Validator.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\XmlParser'          => __DIR__ . '/Aws/Api/Parser/XmlParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\QueryParser'        => __DIR__ . '/Aws/Api/Parser/QueryParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\Crc32ValidatingParser' => __DIR__ . '/Aws/Api/Parser/Crc32ValidatingParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\EventParsingIterator' => __DIR__ . '/Aws/Api/Parser/EventParsingIterator.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\AbstractParser'     => __DIR__ . '/Aws/Api/Parser/AbstractParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\Exception\\ParserException' => __DIR__ . '/Aws/Api/Parser/Exception/ParserException.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\RestJsonParser'     => __DIR__ . '/Aws/Api/Parser/RestJsonParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\PayloadParserTrait' => __DIR__ . '/Aws/Api/Parser/PayloadParserTrait.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\JsonParser'         => __DIR__ . '/Aws/Api/Parser/JsonParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\MetadataParserTrait' => __DIR__ . '/Aws/Api/Parser/MetadataParserTrait.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\DecodingEventStreamIterator' => __DIR__ . '/Aws/Api/Parser/DecodingEventStreamIterator.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\AbstractRestParser' => __DIR__ . '/Aws/Api/Parser/AbstractRestParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\JsonRpcParser'      => __DIR__ . '/Aws/Api/Parser/JsonRpcParser.php',
	'Mailster\\Aws3\\Aws\\Api\\Parser\\RestXmlParser'      => __DIR__ . '/Aws/Api/Parser/RestXmlParser.php',
	'Mailster\\Aws3\\Aws\\Api\\ErrorParser\\AbstractErrorParser' => __DIR__ . '/Aws/Api/ErrorParser/AbstractErrorParser.php',
	'Mailster\\Aws3\\Aws\\Api\\ErrorParser\\JsonParserTrait' => __DIR__ . '/Aws/Api/ErrorParser/JsonParserTrait.php',
	'Mailster\\Aws3\\Aws\\Api\\ErrorParser\\RestJsonErrorParser' => __DIR__ . '/Aws/Api/ErrorParser/RestJsonErrorParser.php',
	'Mailster\\Aws3\\Aws\\Api\\ErrorParser\\XmlErrorParser' => __DIR__ . '/Aws/Api/ErrorParser/XmlErrorParser.php',
	'Mailster\\Aws3\\Aws\\Api\\ErrorParser\\JsonRpcErrorParser' => __DIR__ . '/Aws/Api/ErrorParser/JsonRpcErrorParser.php',
	'Mailster\\Aws3\\Aws\\Api\\ApiProvider'                => __DIR__ . '/Aws/Api/ApiProvider.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\QuerySerializer' => __DIR__ . '/Aws/Api/Serializer/QuerySerializer.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\RestSerializer' => __DIR__ . '/Aws/Api/Serializer/RestSerializer.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\QueryParamBuilder' => __DIR__ . '/Aws/Api/Serializer/QueryParamBuilder.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\Ec2ParamBuilder' => __DIR__ . '/Aws/Api/Serializer/Ec2ParamBuilder.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\JsonBody'       => __DIR__ . '/Aws/Api/Serializer/JsonBody.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\RestJsonSerializer' => __DIR__ . '/Aws/Api/Serializer/RestJsonSerializer.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\RestXmlSerializer' => __DIR__ . '/Aws/Api/Serializer/RestXmlSerializer.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\XmlBody'        => __DIR__ . '/Aws/Api/Serializer/XmlBody.php',
	'Mailster\\Aws3\\Aws\\Api\\Serializer\\JsonRpcSerializer' => __DIR__ . '/Aws/Api/Serializer/JsonRpcSerializer.php',
	'Mailster\\Aws3\\Aws\\Api\\StructureShape'             => __DIR__ . '/Aws/Api/StructureShape.php',
	'Mailster\\Aws3\\Aws\\Api\\MapShape'                   => __DIR__ . '/Aws/Api/MapShape.php',
	'Mailster\\Aws3\\Aws\\Api\\Shape'                      => __DIR__ . '/Aws/Api/Shape.php',
	'Mailster\\Aws3\\Aws\\Api\\AbstractModel'              => __DIR__ . '/Aws/Api/AbstractModel.php',
	'Mailster\\Aws3\\Aws\\Api\\Service'                    => __DIR__ . '/Aws/Api/Service.php',
	'Mailster\\Aws3\\Aws\\Api\\DateTimeResult'             => __DIR__ . '/Aws/Api/DateTimeResult.php',
	'Mailster\\Aws3\\Aws\\Api\\ListShape'                  => __DIR__ . '/Aws/Api/ListShape.php',
	'Mailster\\Aws3\\Aws\\Api\\ShapeMap'                   => __DIR__ . '/Aws/Api/ShapeMap.php',
	'Mailster\\Aws3\\Aws\\Api\\TimestampShape'             => __DIR__ . '/Aws/Api/TimestampShape.php',
	'Mailster\\Aws3\\Aws\\Api\\Operation'                  => __DIR__ . '/Aws/Api/Operation.php',
	'Mailster\\Aws3\\Aws\\Api\\DocModel'                   => __DIR__ . '/Aws/Api/DocModel.php',
	'Mailster\\Aws3\\Aws\\Sts\\StsClient'                  => __DIR__ . '/Aws/Sts/StsClient.php',
	'Mailster\\Aws3\\Aws\\Sts\\RegionalEndpoints\\Configuration' => __DIR__ . '/Aws/Sts/RegionalEndpoints/Configuration.php',
	'Mailster\\Aws3\\Aws\\Sts\\RegionalEndpoints\\Exception\\ConfigurationException' => __DIR__ . '/Aws/Sts/RegionalEndpoints/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\Sts\\RegionalEndpoints\\ConfigurationProvider' => __DIR__ . '/Aws/Sts/RegionalEndpoints/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\Sts\\RegionalEndpoints\\ConfigurationInterface' => __DIR__ . '/Aws/Sts/RegionalEndpoints/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\Sts\\Exception\\StsException'    => __DIR__ . '/Aws/Sts/Exception/StsException.php',
	'Mailster\\Aws3\\Aws\\MonitoringEventsInterface'       => __DIR__ . '/Aws/MonitoringEventsInterface.php',
	'Mailster\\Aws3\\Aws\\Exception\\CommonRuntimeException' => __DIR__ . '/Aws/Exception/CommonRuntimeException.php',
	'Mailster\\Aws3\\Aws\\Exception\\InvalidJsonException' => __DIR__ . '/Aws/Exception/InvalidJsonException.php',
	'Mailster\\Aws3\\Aws\\Exception\\UnresolvedApiException' => __DIR__ . '/Aws/Exception/UnresolvedApiException.php',
	'Mailster\\Aws3\\Aws\\Exception\\InvalidRegionException' => __DIR__ . '/Aws/Exception/InvalidRegionException.php',
	'Mailster\\Aws3\\Aws\\Exception\\CryptoPolyfillException' => __DIR__ . '/Aws/Exception/CryptoPolyfillException.php',
	'Mailster\\Aws3\\Aws\\Exception\\CryptoException'      => __DIR__ . '/Aws/Exception/CryptoException.php',
	'Mailster\\Aws3\\Aws\\Exception\\TokenException'       => __DIR__ . '/Aws/Exception/TokenException.php',
	'Mailster\\Aws3\\Aws\\Exception\\AwsException'         => __DIR__ . '/Aws/Exception/AwsException.php',
	'Mailster\\Aws3\\Aws\\Exception\\IncalculablePayloadException' => __DIR__ . '/Aws/Exception/IncalculablePayloadException.php',
	'Mailster\\Aws3\\Aws\\Exception\\CredentialsException' => __DIR__ . '/Aws/Exception/CredentialsException.php',
	'Mailster\\Aws3\\Aws\\Exception\\UnresolvedSignatureException' => __DIR__ . '/Aws/Exception/UnresolvedSignatureException.php',
	'Mailster\\Aws3\\Aws\\Exception\\MultipartUploadException' => __DIR__ . '/Aws/Exception/MultipartUploadException.php',
	'Mailster\\Aws3\\Aws\\Exception\\UnresolvedEndpointException' => __DIR__ . '/Aws/Exception/UnresolvedEndpointException.php',
	'Mailster\\Aws3\\Aws\\Exception\\EventStreamDataException' => __DIR__ . '/Aws/Exception/EventStreamDataException.php',
	'Mailster\\Aws3\\Aws\\Exception\\CouldNotCreateChecksumException' => __DIR__ . '/Aws/Exception/CouldNotCreateChecksumException.php',
	'Mailster\\Aws3\\Aws\\MultiRegionClient'               => __DIR__ . '/Aws/MultiRegionClient.php',
	'Mailster\\Aws3\\Aws\\Handler\\GuzzleV6\\GuzzleHandler' => __DIR__ . '/Aws/Handler/GuzzleV6/GuzzleHandler.php',
	'Mailster\\Aws3\\Aws\\Handler\\GuzzleV5\\PsrStream'    => __DIR__ . '/Aws/Handler/GuzzleV5/PsrStream.php',
	'Mailster\\Aws3\\Aws\\Handler\\GuzzleV5\\GuzzleStream' => __DIR__ . '/Aws/Handler/GuzzleV5/GuzzleStream.php',
	'Mailster\\Aws3\\Aws\\Handler\\GuzzleV5\\GuzzleHandler' => __DIR__ . '/Aws/Handler/GuzzleV5/GuzzleHandler.php',
	'Mailster\\Aws3\\Aws\\Token\\TokenAuthorization'       => __DIR__ . '/Aws/Token/TokenAuthorization.php',
	'Mailster\\Aws3\\Aws\\Token\\TokenInterface'           => __DIR__ . '/Aws/Token/TokenInterface.php',
	'Mailster\\Aws3\\Aws\\Token\\BearerTokenAuthorization' => __DIR__ . '/Aws/Token/BearerTokenAuthorization.php',
	'Mailster\\Aws3\\Aws\\Token\\RefreshableTokenProviderInterface' => __DIR__ . '/Aws/Token/RefreshableTokenProviderInterface.php',
	'Mailster\\Aws3\\Aws\\Token\\Token'                    => __DIR__ . '/Aws/Token/Token.php',
	'Mailster\\Aws3\\Aws\\Token\\TokenProvider'            => __DIR__ . '/Aws/Token/TokenProvider.php',
	'Mailster\\Aws3\\Aws\\Token\\SsoToken'                 => __DIR__ . '/Aws/Token/SsoToken.php',
	'Mailster\\Aws3\\Aws\\Token\\SsoTokenProvider'         => __DIR__ . '/Aws/Token/SsoTokenProvider.php',
	'Mailster\\Aws3\\Aws\\Token\\ParsesIniTrait'           => __DIR__ . '/Aws/Token/ParsesIniTrait.php',
	'Mailster\\Aws3\\Aws\\Arn\\ArnInterface'               => __DIR__ . '/Aws/Arn/ArnInterface.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\BucketArnInterface'     => __DIR__ . '/Aws/Arn/S3/BucketArnInterface.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\OutpostsArnInterface'   => __DIR__ . '/Aws/Arn/S3/OutpostsArnInterface.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\MultiRegionAccessPointArn' => __DIR__ . '/Aws/Arn/S3/MultiRegionAccessPointArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\AccessPointArn'         => __DIR__ . '/Aws/Arn/S3/AccessPointArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\OutpostsBucketArn'      => __DIR__ . '/Aws/Arn/S3/OutpostsBucketArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\S3\\OutpostsAccessPointArn' => __DIR__ . '/Aws/Arn/S3/OutpostsAccessPointArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\Exception\\InvalidArnException' => __DIR__ . '/Aws/Arn/Exception/InvalidArnException.php',
	'Mailster\\Aws3\\Aws\\Arn\\Arn'                        => __DIR__ . '/Aws/Arn/Arn.php',
	'Mailster\\Aws3\\Aws\\Arn\\ArnParser'                  => __DIR__ . '/Aws/Arn/ArnParser.php',
	'Mailster\\Aws3\\Aws\\Arn\\AccessPointArn'             => __DIR__ . '/Aws/Arn/AccessPointArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\ResourceTypeAndIdTrait'     => __DIR__ . '/Aws/Arn/ResourceTypeAndIdTrait.php',
	'Mailster\\Aws3\\Aws\\Arn\\ObjectLambdaAccessPointArn' => __DIR__ . '/Aws/Arn/ObjectLambdaAccessPointArn.php',
	'Mailster\\Aws3\\Aws\\Arn\\AccessPointArnInterface'    => __DIR__ . '/Aws/Arn/AccessPointArnInterface.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\MonitoringMiddlewareInterface' => __DIR__ . '/Aws/ClientSideMonitoring/MonitoringMiddlewareInterface.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\Exception\\ConfigurationException' => __DIR__ . '/Aws/ClientSideMonitoring/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\ApiCallAttemptMonitoringMiddleware' => __DIR__ . '/Aws/ClientSideMonitoring/ApiCallAttemptMonitoringMiddleware.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\ConfigurationProvider' => __DIR__ . '/Aws/ClientSideMonitoring/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\ConfigurationInterface' => __DIR__ . '/Aws/ClientSideMonitoring/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\ApiCallMonitoringMiddleware' => __DIR__ . '/Aws/ClientSideMonitoring/ApiCallMonitoringMiddleware.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\AbstractMonitoringMiddleware' => __DIR__ . '/Aws/ClientSideMonitoring/AbstractMonitoringMiddleware.php',
	'Mailster\\Aws3\\Aws\\ClientSideMonitoring\\Configuration' => __DIR__ . '/Aws/ClientSideMonitoring/Configuration.php',
	'Mailster\\Aws3\\Aws\\Multipart\\UploadState'          => __DIR__ . '/Aws/Multipart/UploadState.php',
	'Mailster\\Aws3\\Aws\\Multipart\\AbstractUploadManager' => __DIR__ . '/Aws/Multipart/AbstractUploadManager.php',
	'Mailster\\Aws3\\Aws\\Multipart\\AbstractUploader'     => __DIR__ . '/Aws/Multipart/AbstractUploader.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\Partition'             => __DIR__ . '/Aws/Endpoint/Partition.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\EndpointProvider'      => __DIR__ . '/Aws/Endpoint/EndpointProvider.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseFipsEndpoint\\ConfigurationProvider' => __DIR__ . '/Aws/Endpoint/UseFipsEndpoint/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseFipsEndpoint\\ConfigurationInterface' => __DIR__ . '/Aws/Endpoint/UseFipsEndpoint/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseFipsEndpoint\\Exception\\ConfigurationException' => __DIR__ . '/Aws/Endpoint/UseFipsEndpoint/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseFipsEndpoint\\Configuration' => __DIR__ . '/Aws/Endpoint/UseFipsEndpoint/Configuration.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseDualstackEndpoint\\ConfigurationInterface' => __DIR__ . '/Aws/Endpoint/UseDualstackEndpoint/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseDualstackEndpoint\\Exception\\ConfigurationException' => __DIR__ . '/Aws/Endpoint/UseDualstackEndpoint/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseDualstackEndpoint\\ConfigurationProvider' => __DIR__ . '/Aws/Endpoint/UseDualstackEndpoint/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\UseDualstackEndpoint\\Configuration' => __DIR__ . '/Aws/Endpoint/UseDualstackEndpoint/Configuration.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\PatternEndpointProvider' => __DIR__ . '/Aws/Endpoint/PatternEndpointProvider.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\PartitionEndpointProvider' => __DIR__ . '/Aws/Endpoint/PartitionEndpointProvider.php',
	'Mailster\\Aws3\\Aws\\Endpoint\\PartitionInterface'    => __DIR__ . '/Aws/Endpoint/PartitionInterface.php',
	'Mailster\\Aws3\\Aws\\Psr16CacheAdapter'               => __DIR__ . '/Aws/Psr16CacheAdapter.php',
	'Mailster\\Aws3\\Aws\\JsonCompiler'                    => __DIR__ . '/Aws/JsonCompiler.php',
	'Mailster\\Aws3\\Aws\\Crypto\\EncryptionTraitV2'       => __DIR__ . '/Aws/Crypto/EncryptionTraitV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesStreamInterface'      => __DIR__ . '/Aws/Crypto/AesStreamInterface.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesDecryptingStream'     => __DIR__ . '/Aws/Crypto/AesDecryptingStream.php',
	'Mailster\\Aws3\\Aws\\Crypto\\DecryptionTraitV2'       => __DIR__ . '/Aws/Crypto/DecryptionTraitV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AbstractCryptoClientV2'  => __DIR__ . '/Aws/Crypto/AbstractCryptoClientV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Cipher\\Cbc'             => __DIR__ . '/Aws/Crypto/Cipher/Cbc.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Cipher\\CipherBuilderTrait' => __DIR__ . '/Aws/Crypto/Cipher/CipherBuilderTrait.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Cipher\\CipherMethod'    => __DIR__ . '/Aws/Crypto/Cipher/CipherMethod.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MaterialsProvider'       => __DIR__ . '/Aws/Crypto/MaterialsProvider.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MaterialsProviderInterfaceV2' => __DIR__ . '/Aws/Crypto/MaterialsProviderInterfaceV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Polyfill\\AesGcm'        => __DIR__ . '/Aws/Crypto/Polyfill/AesGcm.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Polyfill\\Gmac'          => __DIR__ . '/Aws/Crypto/Polyfill/Gmac.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Polyfill\\ByteArray'     => __DIR__ . '/Aws/Crypto/Polyfill/ByteArray.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Polyfill\\NeedsTrait'    => __DIR__ . '/Aws/Crypto/Polyfill/NeedsTrait.php',
	'Mailster\\Aws3\\Aws\\Crypto\\Polyfill\\Key'           => __DIR__ . '/Aws/Crypto/Polyfill/Key.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesGcmEncryptingStream'  => __DIR__ . '/Aws/Crypto/AesGcmEncryptingStream.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesStreamInterfaceV2'    => __DIR__ . '/Aws/Crypto/AesStreamInterfaceV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesEncryptingStream'     => __DIR__ . '/Aws/Crypto/AesEncryptingStream.php',
	'Mailster\\Aws3\\Aws\\Crypto\\EncryptionTrait'         => __DIR__ . '/Aws/Crypto/EncryptionTrait.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MetadataEnvelope'        => __DIR__ . '/Aws/Crypto/MetadataEnvelope.php',
	'Mailster\\Aws3\\Aws\\Crypto\\DecryptionTrait'         => __DIR__ . '/Aws/Crypto/DecryptionTrait.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MaterialsProviderInterface' => __DIR__ . '/Aws/Crypto/MaterialsProviderInterface.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AesGcmDecryptingStream'  => __DIR__ . '/Aws/Crypto/AesGcmDecryptingStream.php',
	'Mailster\\Aws3\\Aws\\Crypto\\AbstractCryptoClient'    => __DIR__ . '/Aws/Crypto/AbstractCryptoClient.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MaterialsProviderV2'     => __DIR__ . '/Aws/Crypto/MaterialsProviderV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\KmsMaterialsProviderV2'  => __DIR__ . '/Aws/Crypto/KmsMaterialsProviderV2.php',
	'Mailster\\Aws3\\Aws\\Crypto\\KmsMaterialsProvider'    => __DIR__ . '/Aws/Crypto/KmsMaterialsProvider.php',
	'Mailster\\Aws3\\Aws\\Crypto\\MetadataStrategyInterface' => __DIR__ . '/Aws/Crypto/MetadataStrategyInterface.php',
	'Mailster\\Aws3\\Aws\\Retry\\RetryHelperTrait'         => __DIR__ . '/Aws/Retry/RetryHelperTrait.php',
	'Mailster\\Aws3\\Aws\\Retry\\Configuration'            => __DIR__ . '/Aws/Retry/Configuration.php',
	'Mailster\\Aws3\\Aws\\Retry\\Exception\\ConfigurationException' => __DIR__ . '/Aws/Retry/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\Retry\\ConfigurationInterface'   => __DIR__ . '/Aws/Retry/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\Retry\\ConfigurationProvider'    => __DIR__ . '/Aws/Retry/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\Retry\\QuotaManager'             => __DIR__ . '/Aws/Retry/QuotaManager.php',
	'Mailster\\Aws3\\Aws\\Retry\\RateLimiter'              => __DIR__ . '/Aws/Retry/RateLimiter.php',
	'Mailster\\Aws3\\Aws\\Signature\\SignatureV4'          => __DIR__ . '/Aws/Signature/SignatureV4.php',
	'Mailster\\Aws3\\Aws\\Signature\\SignatureInterface'   => __DIR__ . '/Aws/Signature/SignatureInterface.php',
	'Mailster\\Aws3\\Aws\\Signature\\AnonymousSignature'   => __DIR__ . '/Aws/Signature/AnonymousSignature.php',
	'Mailster\\Aws3\\Aws\\Signature\\SignatureProvider'    => __DIR__ . '/Aws/Signature/SignatureProvider.php',
	'Mailster\\Aws3\\Aws\\Signature\\S3SignatureV4'        => __DIR__ . '/Aws/Signature/S3SignatureV4.php',
	'Mailster\\Aws3\\Aws\\Signature\\SignatureTrait'       => __DIR__ . '/Aws/Signature/SignatureTrait.php',
	'Mailster\\Aws3\\Aws\\HashingStream'                   => __DIR__ . '/Aws/HashingStream.php',
	'Mailster\\Aws3\\Aws\\DoctrineCacheAdapter'            => __DIR__ . '/Aws/DoctrineCacheAdapter.php',
	'Mailster\\Aws3\\Aws\\PsrCacheAdapter'                 => __DIR__ . '/Aws/PsrCacheAdapter.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Rule\\AbstractRule'  => __DIR__ . '/Aws/EndpointV2/Rule/AbstractRule.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Rule\\TreeRule'      => __DIR__ . '/Aws/EndpointV2/Rule/TreeRule.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Rule\\ErrorRule'     => __DIR__ . '/Aws/EndpointV2/Rule/ErrorRule.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Rule\\EndpointRule'  => __DIR__ . '/Aws/EndpointV2/Rule/EndpointRule.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Rule\\RuleCreator'   => __DIR__ . '/Aws/EndpointV2/Rule/RuleCreator.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\EndpointV2SerializerTrait' => __DIR__ . '/Aws/EndpointV2/EndpointV2SerializerTrait.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\EndpointProviderV2'  => __DIR__ . '/Aws/EndpointV2/EndpointProviderV2.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Ruleset\\RulesetStandardLibrary' => __DIR__ . '/Aws/EndpointV2/Ruleset/RulesetStandardLibrary.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Ruleset\\RulesetEndpoint' => __DIR__ . '/Aws/EndpointV2/Ruleset/RulesetEndpoint.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Ruleset\\RulesetParameter' => __DIR__ . '/Aws/EndpointV2/Ruleset/RulesetParameter.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\Ruleset\\Ruleset'    => __DIR__ . '/Aws/EndpointV2/Ruleset/Ruleset.php',
	'Mailster\\Aws3\\Aws\\EndpointV2\\EndpointDefinitionProvider' => __DIR__ . '/Aws/EndpointV2/EndpointDefinitionProvider.php',
	'Mailster\\Aws3\\Aws\\WrappedHttpHandler'              => __DIR__ . '/Aws/WrappedHttpHandler.php',
	'Mailster\\Aws3\\Aws\\MockHandler'                     => __DIR__ . '/Aws/MockHandler.php',
	'Mailster\\Aws3\\Aws\\History'                         => __DIR__ . '/Aws/History.php',
	'Mailster\\Aws3\\Aws\\AwsClientInterface'              => __DIR__ . '/Aws/AwsClientInterface.php',
	'Mailster\\Aws3\\Aws\\SesV2\\SesV2Client'              => __DIR__ . '/Aws/SesV2/SesV2Client.php',
	'Mailster\\Aws3\\Aws\\SesV2\\Exception\\SesV2Exception' => __DIR__ . '/Aws/SesV2/Exception/SesV2Exception.php',
	'Mailster\\Aws3\\Aws\\CommandPool'                     => __DIR__ . '/Aws/CommandPool.php',
	'Mailster\\Aws3\\Aws\\DefaultsMode\\ConfigurationInterface' => __DIR__ . '/Aws/DefaultsMode/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\DefaultsMode\\Exception\\ConfigurationException' => __DIR__ . '/Aws/DefaultsMode/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\DefaultsMode\\ConfigurationProvider' => __DIR__ . '/Aws/DefaultsMode/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\DefaultsMode\\Configuration'     => __DIR__ . '/Aws/DefaultsMode/Configuration.php',
	'Mailster\\Aws3\\Aws\\ClientResolver'                  => __DIR__ . '/Aws/ClientResolver.php',
	'Mailster\\Aws3\\Aws\\RetryMiddlewareV2'               => __DIR__ . '/Aws/RetryMiddlewareV2.php',
	'Mailster\\Aws3\\Aws\\RetryMiddleware'                 => __DIR__ . '/Aws/RetryMiddleware.php',
	'Mailster\\Aws3\\Aws\\HashInterface'                   => __DIR__ . '/Aws/HashInterface.php',
	'Mailster\\Aws3\\Aws\\TraceMiddleware'                 => __DIR__ . '/Aws/TraceMiddleware.php',
	'Mailster\\Aws3\\Aws\\CacheInterface'                  => __DIR__ . '/Aws/CacheInterface.php',
	'Mailster\\Aws3\\Aws\\AwsClientTrait'                  => __DIR__ . '/Aws/AwsClientTrait.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\EndpointDiscoveryMiddleware' => __DIR__ . '/Aws/EndpointDiscovery/EndpointDiscoveryMiddleware.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\Exception\\ConfigurationException' => __DIR__ . '/Aws/EndpointDiscovery/Exception/ConfigurationException.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\ConfigurationProvider' => __DIR__ . '/Aws/EndpointDiscovery/ConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\Configuration' => __DIR__ . '/Aws/EndpointDiscovery/Configuration.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\ConfigurationInterface' => __DIR__ . '/Aws/EndpointDiscovery/ConfigurationInterface.php',
	'Mailster\\Aws3\\Aws\\EndpointDiscovery\\EndpointList' => __DIR__ . '/Aws/EndpointDiscovery/EndpointList.php',
	'Mailster\\Aws3\\Aws\\AbstractConfigurationProvider'   => __DIR__ . '/Aws/AbstractConfigurationProvider.php',
	'Mailster\\Aws3\\Aws\\Command'                         => __DIR__ . '/Aws/Command.php',
	'Mailster\\Aws3\\Aws\\Result'                          => __DIR__ . '/Aws/Result.php',
	'Mailster\\Aws3\\Aws\\HandlerList'                     => __DIR__ . '/Aws/HandlerList.php',
	'Mailster\\Aws3\\Aws\\Credentials\\CredentialProvider' => __DIR__ . '/Aws/Credentials/CredentialProvider.php',
	'Mailster\\Aws3\\Aws\\Credentials\\Credentials'        => __DIR__ . '/Aws/Credentials/Credentials.php',
	'Mailster\\Aws3\\Aws\\Credentials\\InstanceProfileProvider' => __DIR__ . '/Aws/Credentials/InstanceProfileProvider.php',
	'Mailster\\Aws3\\Aws\\Credentials\\CredentialsInterface' => __DIR__ . '/Aws/Credentials/CredentialsInterface.php',
	'Mailster\\Aws3\\Aws\\Credentials\\AssumeRoleWithWebIdentityCredentialProvider' => __DIR__ . '/Aws/Credentials/AssumeRoleWithWebIdentityCredentialProvider.php',
	'Mailster\\Aws3\\Aws\\Credentials\\AssumeRoleCredentialProvider' => __DIR__ . '/Aws/Credentials/AssumeRoleCredentialProvider.php',
	'Mailster\\Aws3\\Aws\\Credentials\\EcsCredentialProvider' => __DIR__ . '/Aws/Credentials/EcsCredentialProvider.php',
	'Mailster\\Aws3\\Aws\\AwsClient'                       => __DIR__ . '/Aws/AwsClient.php',
	'Mailster\\Aws3\\Aws\\Configuration\\ConfigurationResolver' => __DIR__ . '/Aws/Configuration/ConfigurationResolver.php',
	'Mailster\\Aws3\\Aws\\ResponseContainerInterface'      => __DIR__ . '/Aws/ResponseContainerInterface.php',
	'Mailster\\Aws3\\Aws\\Waiter'                          => __DIR__ . '/Aws/Waiter.php',
	'Mailster\\Aws3\\Aws\\Sdk'                             => __DIR__ . '/Aws/Sdk.php',
	'Mailster\\Aws3\\Aws\\InputValidationMiddleware'       => __DIR__ . '/Aws/InputValidationMiddleware.php',
	'Mailster\\Aws3\\Aws\\StreamRequestPayloadMiddleware'  => __DIR__ . '/Aws/StreamRequestPayloadMiddleware.php',
	'Mailster\\Aws3\\Aws\\ResultPaginator'                 => __DIR__ . '/Aws/ResultPaginator.php',
	'Mailster\\Aws3\\Aws\\HasMonitoringEventsTrait'        => __DIR__ . '/Aws/HasMonitoringEventsTrait.php',
	'Mailster\\Aws3\\Aws\\CommandInterface'                => __DIR__ . '/Aws/CommandInterface.php',
	'Mailster\\Aws3\\Aws\\ConfigurationProviderInterface'  => __DIR__ . '/Aws/ConfigurationProviderInterface.php',
	'Mailster\\Aws3\\Aws\\ResultInterface'                 => __DIR__ . '/Aws/ResultInterface.php',
	'Mailster\\Aws3\\Aws\\LruArrayCache'                   => __DIR__ . '/Aws/LruArrayCache.php',
	'Mailster\\Aws3\\Aws\\functions'                       => __DIR__ . '/Aws/functions.php',
	'Mailster\\Aws3\\Aws\\RequestCompressionMiddleware'    => __DIR__ . '/Aws/RequestCompressionMiddleware.php',
	'Mailster\\Aws3\\Aws\\EndpointParameterMiddleware'     => __DIR__ . '/Aws/EndpointParameterMiddleware.php',
	'Mailster\\Aws3\\Aws\\HasDataTrait'                    => __DIR__ . '/Aws/HasDataTrait.php',
	'Mailster\\Aws3\\Aws\\Middleware'                      => __DIR__ . '/Aws/Middleware.php',
	'Mailster\\Aws3\\Aws\\PresignUrlMiddleware'            => __DIR__ . '/Aws/PresignUrlMiddleware.php',
	'Mailster\\Aws3\\Aws\\IdempotencyTokenMiddleware'      => __DIR__ . '/Aws/IdempotencyTokenMiddleware.php',
	'Mailster\\Aws3\\Aws\\PhpHash'                         => __DIR__ . '/Aws/PhpHash.php',
	'Mailster\\Aws3\\JmesPath\\Parser'                     => __DIR__ . '/JmesPath/Parser.php',
	'Mailster\\Aws3\\JmesPath\\AstRuntime'                 => __DIR__ . '/JmesPath/AstRuntime.php',
	'Mailster\\Aws3\\JmesPath\\DebugRuntime'               => __DIR__ . '/JmesPath/DebugRuntime.php',
	'Mailster\\Aws3\\JmesPath\\FnDispatcher'               => __DIR__ . '/JmesPath/FnDispatcher.php',
	'Mailster\\Aws3\\JmesPath\\Env'                        => __DIR__ . '/JmesPath/Env.php',
	'Mailster\\Aws3\\JmesPath\\SyntaxErrorException'       => __DIR__ . '/JmesPath/SyntaxErrorException.php',
	'Mailster\\Aws3\\JmesPath\\Lexer'                      => __DIR__ . '/JmesPath/Lexer.php',
	'Mailster\\Aws3\\JmesPath\\JmesPath'                   => __DIR__ . '/JmesPath/JmesPath.php',
	'Mailster\\Aws3\\JmesPath\\TreeInterpreter'            => __DIR__ . '/JmesPath/TreeInterpreter.php',
	'Mailster\\Aws3\\JmesPath\\Utils'                      => __DIR__ . '/JmesPath/Utils.php',
	'Mailster\\Aws3\\JmesPath\\CompilerRuntime'            => __DIR__ . '/JmesPath/CompilerRuntime.php',
	'Mailster\\Aws3\\JmesPath\\TreeCompiler'               => __DIR__ . '/JmesPath/TreeCompiler.php',
	'Mailster\\Aws3\\GuzzleHttp\\Middleware'               => __DIR__ . '/GuzzleHttp/Middleware.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/GuzzleHttp/Exception/ServerException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/GuzzleHttp/Exception/RequestException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/GuzzleHttp/Exception/TransferException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/GuzzleHttp/Exception/GuzzleException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/GuzzleHttp/Exception/TooManyRedirectsException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/GuzzleHttp/Exception/ConnectException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/GuzzleHttp/Exception/InvalidArgumentException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/GuzzleHttp/Exception/ClientException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/GuzzleHttp/Exception/BadResponseException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/GuzzleHttp/Cookie/SessionCookieJar.php',
	'Mailster\\Aws3\\GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/GuzzleHttp/Cookie/CookieJarInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\Cookie\\SetCookie'        => __DIR__ . '/GuzzleHttp/Cookie/SetCookie.php',
	'Mailster\\Aws3\\GuzzleHttp\\Cookie\\CookieJar'        => __DIR__ . '/GuzzleHttp/Cookie/CookieJar.php',
	'Mailster\\Aws3\\GuzzleHttp\\Cookie\\FileCookieJar'    => __DIR__ . '/GuzzleHttp/Cookie/FileCookieJar.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\Proxy'           => __DIR__ . '/GuzzleHttp/Handler/Proxy.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\StreamHandler'   => __DIR__ . '/GuzzleHttp/Handler/StreamHandler.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\HeaderProcessor' => __DIR__ . '/GuzzleHttp/Handler/HeaderProcessor.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/GuzzleHttp/Handler/CurlFactoryInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\EasyHandle'      => __DIR__ . '/GuzzleHttp/Handler/EasyHandle.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\CurlHandler'     => __DIR__ . '/GuzzleHttp/Handler/CurlHandler.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\MockHandler'     => __DIR__ . '/GuzzleHttp/Handler/MockHandler.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\CurlFactory'     => __DIR__ . '/GuzzleHttp/Handler/CurlFactory.php',
	'Mailster\\Aws3\\GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/GuzzleHttp/Handler/CurlMultiHandler.php',
	'Mailster\\Aws3\\GuzzleHttp\\Utils'                    => __DIR__ . '/GuzzleHttp/Utils.php',
	'Mailster\\Aws3\\GuzzleHttp\\RedirectMiddleware'       => __DIR__ . '/GuzzleHttp/RedirectMiddleware.php',
	'Mailster\\Aws3\\GuzzleHttp\\Client'                   => __DIR__ . '/GuzzleHttp/Client.php',
	'Mailster\\Aws3\\GuzzleHttp\\RetryMiddleware'          => __DIR__ . '/GuzzleHttp/RetryMiddleware.php',
	'Mailster\\Aws3\\GuzzleHttp\\HandlerStack'             => __DIR__ . '/GuzzleHttp/HandlerStack.php',
	'Mailster\\Aws3\\GuzzleHttp\\PrepareBodyMiddleware'    => __DIR__ . '/GuzzleHttp/PrepareBodyMiddleware.php',
	'Mailster\\Aws3\\GuzzleHttp\\TransferStats'            => __DIR__ . '/GuzzleHttp/TransferStats.php',
	'Mailster\\Aws3\\GuzzleHttp\\BodySummarizerInterface'  => __DIR__ . '/GuzzleHttp/BodySummarizerInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\ClientInterface'          => __DIR__ . '/GuzzleHttp/ClientInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\ClientTrait'              => __DIR__ . '/GuzzleHttp/ClientTrait.php',
	'Mailster\\Aws3\\GuzzleHttp\\MessageFormatter'         => __DIR__ . '/GuzzleHttp/MessageFormatter.php',
	'Mailster\\Aws3\\GuzzleHttp\\MessageFormatterInterface' => __DIR__ . '/GuzzleHttp/MessageFormatterInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\functions'                => __DIR__ . '/GuzzleHttp/functions.php',
	'Mailster\\Aws3\\GuzzleHttp\\functions_include'        => __DIR__ . '/GuzzleHttp/functions_include.php',
	'Mailster\\Aws3\\GuzzleHttp\\Pool'                     => __DIR__ . '/GuzzleHttp/Pool.php',
	'Mailster\\Aws3\\GuzzleHttp\\BodySummarizer'           => __DIR__ . '/GuzzleHttp/BodySummarizer.php',
	'Mailster\\Aws3\\GuzzleHttp\\RequestOptions'           => __DIR__ . '/GuzzleHttp/RequestOptions.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\UriNormalizer'      => __DIR__ . '/GuzzleHttp/Psr7/UriNormalizer.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\MimeType'           => __DIR__ . '/GuzzleHttp/Psr7/MimeType.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\UriResolver'        => __DIR__ . '/GuzzleHttp/Psr7/UriResolver.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Rfc7230'            => __DIR__ . '/GuzzleHttp/Psr7/Rfc7230.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Header'             => __DIR__ . '/GuzzleHttp/Psr7/Header.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\MessageTrait'       => __DIR__ . '/GuzzleHttp/Psr7/MessageTrait.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\HttpFactory'        => __DIR__ . '/GuzzleHttp/Psr7/HttpFactory.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\FnStream'           => __DIR__ . '/GuzzleHttp/Psr7/FnStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Request'            => __DIR__ . '/GuzzleHttp/Psr7/Request.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\UriComparator'      => __DIR__ . '/GuzzleHttp/Psr7/UriComparator.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Stream'             => __DIR__ . '/GuzzleHttp/Psr7/Stream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/GuzzleHttp/Psr7/StreamDecoratorTrait.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\LazyOpenStream'     => __DIR__ . '/GuzzleHttp/Psr7/LazyOpenStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\LimitStream'        => __DIR__ . '/GuzzleHttp/Psr7/LimitStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Response'           => __DIR__ . '/GuzzleHttp/Psr7/Response.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\InflateStream'      => __DIR__ . '/GuzzleHttp/Psr7/InflateStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\DroppingStream'     => __DIR__ . '/GuzzleHttp/Psr7/DroppingStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Query'              => __DIR__ . '/GuzzleHttp/Psr7/Query.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/GuzzleHttp/Psr7/Exception/MalformedUriException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\StreamWrapper'      => __DIR__ . '/GuzzleHttp/Psr7/StreamWrapper.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Uri'                => __DIR__ . '/GuzzleHttp/Psr7/Uri.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\BufferStream'       => __DIR__ . '/GuzzleHttp/Psr7/BufferStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\UploadedFile'       => __DIR__ . '/GuzzleHttp/Psr7/UploadedFile.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\PumpStream'         => __DIR__ . '/GuzzleHttp/Psr7/PumpStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\ServerRequest'      => __DIR__ . '/GuzzleHttp/Psr7/ServerRequest.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Message'            => __DIR__ . '/GuzzleHttp/Psr7/Message.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\AppendStream'       => __DIR__ . '/GuzzleHttp/Psr7/AppendStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\NoSeekStream'       => __DIR__ . '/GuzzleHttp/Psr7/NoSeekStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\MultipartStream'    => __DIR__ . '/GuzzleHttp/Psr7/MultipartStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\Utils'              => __DIR__ . '/GuzzleHttp/Psr7/Utils.php',
	'Mailster\\Aws3\\GuzzleHttp\\Psr7\\CachingStream'      => __DIR__ . '/GuzzleHttp/Psr7/CachingStream.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/GuzzleHttp/Promise/PromisorInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/GuzzleHttp/Promise/RejectedPromise.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/GuzzleHttp/Promise/RejectionException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Is'              => __DIR__ . '/GuzzleHttp/Promise/Is.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/GuzzleHttp/Promise/PromiseInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Promise'         => __DIR__ . '/GuzzleHttp/Promise/Promise.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Create'          => __DIR__ . '/GuzzleHttp/Promise/Create.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/GuzzleHttp/Promise/AggregateException.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/GuzzleHttp/Promise/TaskQueueInterface.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Coroutine'       => __DIR__ . '/GuzzleHttp/Promise/Coroutine.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\TaskQueue'       => __DIR__ . '/GuzzleHttp/Promise/TaskQueue.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Utils'           => __DIR__ . '/GuzzleHttp/Promise/Utils.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\EachPromise'     => __DIR__ . '/GuzzleHttp/Promise/EachPromise.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\Each'            => __DIR__ . '/GuzzleHttp/Promise/Each.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/GuzzleHttp/Promise/FulfilledPromise.php',
	'Mailster\\Aws3\\GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/GuzzleHttp/Promise/CancellationException.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\StreamInterface'  => __DIR__ . '/Psr/Http/Message/StreamInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/Psr/Http/Message/MessageInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/Psr/Http/Message/ResponseInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/Psr/Http/Message/UploadedFileInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/Psr/Http/Message/ServerRequestInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\UriInterface'     => __DIR__ . '/Psr/Http/Message/UriInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/Psr/Http/Message/RequestInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/Psr/Http/Client/ClientExceptionInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Client\\ClientInterface'   => __DIR__ . '/Psr/Http/Client/ClientInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/Psr/Http/Client/RequestExceptionInterface.php',
	'Mailster\\Aws3\\Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/Psr/Http/Client/NetworkExceptionInterface.php',
);
\spl_autoload_register(
	function ( $class ) use ( $mapping ) {
		if ( isset( $mapping[ $class ] ) ) {
			require $mapping[ $class ];
		}
	},
	\true
);
require __DIR__ . '/Aws/functions.php';
require __DIR__ . '/GuzzleHttp/functions_include.php';
require __DIR__ . '/JmesPath/JmesPath.php';
