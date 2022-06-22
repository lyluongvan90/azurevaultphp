<?php

namespace App\AzureKeyVault;

/**
 * Class Facade
 * @package InsitesConsulting\AzureKeyVault
 *
 * @method static string|null secret(string $name, ?string $default = null)
 * @method static void setSecret(string $name, string $value)
 * @method static void setVault(?string $vault = null)
 */
class AzureVaultFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vault';
    }
}