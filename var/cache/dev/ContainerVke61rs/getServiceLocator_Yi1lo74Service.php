<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.yi1lo74' shared service.

return $this->services['service_locator.yi1lo74'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('authUtils' => function () {
    return ${($_ = isset($this->services['security.authentication_utils']) ? $this->services['security.authentication_utils'] : $this->load('getSecurity_AuthenticationUtilsService.php')) && false ?: '_'};
}));