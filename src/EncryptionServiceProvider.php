<?php
declare(strict_types=1);

namespace Pmedynskyi\LaravelEncrypt;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/encrypt.php' => config_path('encrypt.php'),
        ]);
    }
}
