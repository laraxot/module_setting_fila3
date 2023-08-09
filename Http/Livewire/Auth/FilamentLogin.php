<?php

declare(strict_types=1);

namespace Modules\Setting\Http\Livewire\Auth;

use Savannabits\FilamentModules\Http\Livewire\Auth\BaseLogin;

class FilamentLogin extends BaseLogin
{
    public static string $context = 'filament';
    public static string $module = 'Setting';
}