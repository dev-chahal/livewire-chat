<?php

namespace DevChahal\LivewireChat;

use DevChahal\LivewireChat\Commands\LivewireChatCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireChatServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        Livewire::component('livewire-chat', DevChahal\LivewireChat\Livewire\LivewireChat::class);
    }

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
