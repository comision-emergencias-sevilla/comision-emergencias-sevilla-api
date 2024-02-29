<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class MigrateDatabaseController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function migrateDatabase(): string {
        Artisan::call('migrate --force');
        return Artisan::output();
    }
}