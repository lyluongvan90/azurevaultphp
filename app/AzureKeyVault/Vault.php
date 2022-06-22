<?php

namespace App\AzureKeyVault;

use AzKeyVault\Secret;

class Vault
{
    private $vault;
    private $azureSecret;

    public function __construct(string $vault) {
        $this->vault = $vault;
        $this->azureSecret = new Secret("https://{$vault}.vault.azure.net/");
    }

    private function vaultUrl(): string
    {
        return "https://{$this->vault}.vault.azure.net/";
    }

    public function secret(string $name, ?string $default = null): ?string
    {
        $result = $this->azureSecret->getSecret($name);
        return $result->secret;
    }
}