<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Repository\\CustomizationFieldRepository'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'cx_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Validate\\CustomizationFieldValidator'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Customization\\Validate\\CustomizationFieldValidator'] = new \PrestaShop\PrestaShop\Adapter\Product\Customization\Validate\CustomizationFieldValidator())));
