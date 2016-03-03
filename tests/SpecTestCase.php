<?php
namespace Tests;

use PhpSpec\Laravel\LaravelObjectBehavior;
use Illuminate\Support\Facades\Artisan;

class SpecTestCase extends LaravelObjectBehavior
{
    function let()
    {
        @unlink(base_path('storage/database.sqlite'));
        @copy(base_path('storage/database.sqlite.blank'), base_path('storage/database.sqlite'));
        Artisan::call('migrate');
    }
}
?>
