<?php

namespace DevChahal\LivewireChat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DevChahal\LivewireChat\Commands\LivewireChatCommand;

class LivewireChatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-chat')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-chat_table')
            ->hasCommand(LivewireChatCommand::class);
    }
}
