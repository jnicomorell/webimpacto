<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Product\ProductExtraContent;

class CustomProductText extends Module
{
    public function __construct()
    {
        $this->name = 'customproducttext';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Nicolas Morell';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom Text');
        $this->description = $this->l('Add a custom text to each product');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayAdminProductsExtra') &&
            $this->registerHook('actionProductUpdate') &&
            $this->registerHook('displayProductExtraContent') &&
            Db::getInstance()->execute(
                'ALTER TABLE `'._DB_PREFIX_.'product_lang` 
                ADD `custom_text` TEXT NULL'
            );
    }

    public function uninstall()
    {
        return Db::getInstance()->execute(
            'ALTER TABLE `'._DB_PREFIX_.'product_lang` 
            DROP COLUMN `custom_text`'
        ) && parent::uninstall();
    }

    public function hookDisplayAdminProductsExtra($params)
    {
        $id_product = Tools::getValue('id_product');
        $custom_text = Db::getInstance()->getValue('
            SELECT `custom_text` 
            FROM `'._DB_PREFIX_.'product_lang` 
            WHERE `id_product` = '.(int)$id_product
        );
    
        $this->context->smarty->assign('custom_text', $custom_text);
        return $this->display(__FILE__, 'views/templates/admin/product_custom_text.tpl');
    }
    
    public function hookActionProductUpdate($params)
    {
        $id_product = Tools::getValue('id_product');
        $custom_text = Tools::getValue('custom_text');
    
        Db::getInstance()->update(
            'product_lang', 
            array('custom_text' => pSQL($custom_text, true)), 
            '`id_product` = '.(int)$id_product
        );
    }

    public function hookDisplayProductExtraContent($params)
    {
        $id_product = $params['product']->id;
        $custom_text = Db::getInstance()->getValue('
            SELECT `custom_text` 
            FROM `'._DB_PREFIX_.'product_lang` 
            WHERE `id_product` = '.(int)$id_product
        );
    
        $extraContent = new ProductExtraContent();
        $extraContent->setTitle('Custom Text')->setContent($custom_text);
    
        return array($extraContent);
    }
    }
