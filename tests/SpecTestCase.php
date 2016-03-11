<?php
namespace Tests;

use PhpSpec\Laravel\LaravelObjectBehavior;
use Illuminate\Support\Facades\Artisan;

class SpecTestCase extends LaravelObjectBehavior
{
    function let()
    {
        Artisan::call('migrate');
    }

    function letGo()
    {
        Artisan::call('migrate:reset');
    }
}
?>
