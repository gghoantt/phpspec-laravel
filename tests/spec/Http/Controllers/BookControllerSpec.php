<?php

namespace spec\App\Http\Controllers;

use Tests\SpecTestCase;
use PhpSpec\ObjectBehavior;

class BookControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Http\Controllers\BookController');
    }
}
