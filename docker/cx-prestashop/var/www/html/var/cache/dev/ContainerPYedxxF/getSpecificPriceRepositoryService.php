<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\SpecificPrice\\Repository\\SpecificPriceRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'cx_', new \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate\SpecificPriceValidator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopGroupRepository'] ?? $this->load('getShopGroupRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopRepository'] ?? $this->load('getShopRepositoryService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\Repository\\CurrencyRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\Repository\\CurrencyRepository'] = new \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Country\\Repository\\CountryRepository'] = new \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Customer\\Group\\Repository\\GroupRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Customer\\Group\\Repository\\GroupRepository'] = new \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Customer\\Repository\\CustomerRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Customer\\Repository\\CustomerRepository'] = new \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->privates['PrestaShop\\PrestaShop\\Core\\Util\\Number\\NumberExtractor'] ?? $this->load('getNumberExtractorService.php'))), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
