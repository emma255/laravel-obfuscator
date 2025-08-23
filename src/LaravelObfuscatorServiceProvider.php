<?php

namespace Honeycrisp\Honeycrisp;

use Illuminate\Support\ServiceProvider;
use Honeycrisp\Honeycrisp\Services\ObfuscatorService;
use Honeycrisp\Honeycrisp\Services\DeobfuscatorService;
use Honeycrisp\Honeycrisp\Services\LicenseService;
use Honeycrisp\Honeycrisp\Console\Commands\ObfuscateCommand;
use Honeycrisp\Honeycrisp\Console\Commands\ObfuscateAllCommand;
use Honeycrisp\Honeycrisp\Console\Commands\ObfuscateDirectoryCommand;
use Honeycrisp\Honeycrisp\Console\Commands\RestoreCommand;
use Honeycrisp\Honeycrisp\Console\Commands\DeobfuscateCommand;
use Honeycrisp\Honeycrisp\Console\Commands\DeobfuscateAllCommand;
use Honeycrisp\Honeycrisp\Console\Commands\DeobfuscateDirectoryCommand;
use Honeycrisp\Honeycrisp\Console\Commands\ScheduledObfuscationCommand;
use Honeycrisp\Honeycrisp\Console\Commands\LicenseCommand;
use Honeycrisp\Honeycrisp\Console\Commands\GenerateLicenseCommand;
use Honeycrisp\Honeycrisp\Console\Commands\GenerateKeyCommand;
use Honeycrisp\Honeycrisp\Console\Commands\SecureDeployCommand;
use Honeycrisp\Honeycrisp\Console\Commands\DeobfuscateSecureDeployCommand;
use Honeycrisp\Honeycrisp\Console\Commands\AppDeployCommand;
use Honeycrisp\Honeycrisp\Console\Commands\AppDeobfuscateCommand;

class HoneycrispServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ObfuscatorService::class, function ($app) {
            return new ObfuscatorService($app->make(LicenseService::class));
        });
        
        $this->app->singleton(DeobfuscatorService::class, function ($app) {
            return new DeobfuscatorService($app->make(LicenseService::class));
        });
        
        $this->app->alias(ObfuscatorService::class, 'obfuscator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish configuration file
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-obfuscator.php' => config_path('laravel-obfuscator.php'),
            ], 'laravel-obfuscator-config');
            
            // Publish views
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-obfuscator'),
            ], 'laravel-obfuscator-views');
            
            // Register console commands
            $this->commands([
                ObfuscateCommand::class,           // obfuscate:file
                ObfuscateAllCommand::class,        // obfuscate:all
                ObfuscateDirectoryCommand::class,  // obfuscate:directory
                RestoreCommand::class,             // obfuscate:restore
                DeobfuscateCommand::class,         // obfuscate:deobfuscate
                DeobfuscateAllCommand::class,      // deobfuscate:all
                DeobfuscateDirectoryCommand::class, // deobfuscate:directory
                ScheduledObfuscationCommand::class, // obfuscate:scheduled
                LicenseCommand::class,              // obfuscate:license
                GenerateLicenseCommand::class,      // obfuscate:generate-license
                GenerateKeyCommand::class,          // obfuscate:generate-key
                SecureDeployCommand::class,        // obfuscate:secure-deploy
                DeobfuscateSecureDeployCommand::class, // deobfuscate:secure-deploy
                AppDeployCommand::class,           // obfuscate:app-deploy
                AppDeobfuscateCommand::class,      // deobfuscate:app-deploy
            ]);
        }
        
        // Load views for web interface
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-obfuscator');
        
        // Load web and API routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
    
    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [ObfuscatorService::class, DeobfuscatorService::class, 'obfuscator'];
    }
}
