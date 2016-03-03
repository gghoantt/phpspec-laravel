<?php

namespace spec\App\Http\Controllers;

use Tests\SpecTestCase;

class BookControllerSpec extends SpecTestCase
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Http\Controllers\BookController');
    }

    function it_converts_plain_text_to_html_paragraphs()
    {
        $this->toHtml("Hi, there")->shouldReturn("<p>Hi, there</p>");
    }

    function it_converts_plain_text_to_html_paragraphs1()
    {
        $this->toHtml("Hi, there")->shouldReturn("<p>Hi, there</p>");
    }
}
