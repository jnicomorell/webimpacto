<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.swagger.action.ui' shared service.

return $this->services['api_platform.swagger.action.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService()), ($this->services['serializer'] ?? $this->getSerializerService()), ($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), 'PrestaShop API', '', '1.0.0', $this->parameters['api_platform.formats'], false, '', '', 'oauth2', 'application', '', '', [], true, true, true, false, false, false, $this->parameters['api_platform.swagger.versions'], ($this->services['api_platform.swagger_ui.action'] ?? $this->load('getApiPlatform_SwaggerUi_ActionService.php')), NULL, [], false);
