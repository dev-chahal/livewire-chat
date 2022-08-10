<?php

namespace DevChahal\LivewireChat\Commands;

use Illuminate\Console\Command;

class LivewireChatCommand extends Command
{
    public $signature = 'livewire-chat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
