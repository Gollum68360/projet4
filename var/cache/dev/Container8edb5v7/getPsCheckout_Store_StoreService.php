<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.store.store' shared service.

return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ${($_ = isset($this->services['ps_checkout.store.module.context']) ? $this->services['ps_checkout.store.module.context'] : $this->load('getPsCheckout_Store_Module_ContextService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.store.module.paypal']) ? $this->services['ps_checkout.store.module.paypal'] : $this->load('getPsCheckout_Store_Module_PaypalService.php')) && false ?: '_'}, 2 => ${($_ = isset($this->services['ps_checkout.store.module.configuration']) ? $this->services['ps_checkout.store.module.configuration'] : $this->load('getPsCheckout_Store_Module_ConfigurationService.php')) && false ?: '_'}]);
