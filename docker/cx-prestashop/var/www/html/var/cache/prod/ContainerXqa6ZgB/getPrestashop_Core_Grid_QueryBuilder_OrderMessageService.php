<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query_builder.order_message' shared service.

return $this->services['prestashop.core.grid.query_builder.order_message'] = new \PrestaShop\PrestaShop\Core\Grid\Query\OrderMessageQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'cx_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->id, ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] ?? ($this->services['prestashop.core.grid.query.filter.doctrine_filter_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\Filter\DoctrineFilterApplicator())), ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] ?? ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())));
