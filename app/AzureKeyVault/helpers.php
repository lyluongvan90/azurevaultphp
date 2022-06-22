<?php

use App\AzureKeyVault\AzureVaultFacade as Vault;

function secret(string $name, ?string $default = null): ?string
{
    return Vault::secret($name, $default);
}