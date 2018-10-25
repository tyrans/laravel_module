<?php

namespace Tyrans\Framework\Console;

use Tyrans\Framework\Console\Commands\ConsoleMakeCommand;
use Tyrans\Framework\Console\Commands\ControllerMakeCommand;
use Tyrans\Framework\Console\Commands\ModelMakeCommand;
use Tyrans\Framework\Console\Commands\RequestMakeCommand;
use Tyrans\Framework\Console\Commands\StrPluralCommand;
use Tyrans\Framework\Console\Commands\ModuleInitCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        ModuleInitCommand::class,
        StrPluralCommand::class,
        ConsoleMakeCommand::class,
        ControllerMakeCommand::class,
        RequestMakeCommand::class,
        ModelMakeCommand::class
    ];
}
