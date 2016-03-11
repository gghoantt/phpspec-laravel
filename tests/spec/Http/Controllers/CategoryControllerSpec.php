<?php

namespace spec\App\Http\Controllers;

use App\PhpSpec\Models\Category;
use Tests\SpecTestCase;
use PhpSpec\ObjectBehavior;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use PhpSpec\Laravel\LaravelObjectBehavior;

class CategoryControllerSpec extends SpecTestCase
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Http\Controllers\CategoryController');
    }

    function it_is_validate_create(Request $request)
    {
        $request->all()->willReturn([
            'name'        => '',
            'description' => 123
        ]);

        $res = $this->create($request);
        $this->create($request)->shouldReturnAnInstanceOf('Illuminate\Http\JsonResponse');
        $res->getStatusCode()->shouldReturn(400);
    }

    function it_should_be_create(Request $request)
    {
        $request->all()->willReturn([
            'name'        => 'Books',
            'description' => 'Books'
        ]);

        $res = $this->create($request);
        $this->create($request)->shouldReturnAnInstanceOf('Illuminate\Http\JsonResponse');
        $res->getStatusCode()->shouldReturn(201);
        $res->getContent()->shouldhaveKeyMatchValue('name', 'Books');
        $res->getContent()->shouldhaveKeyMatchValue('description', 'Books');
    }
}
