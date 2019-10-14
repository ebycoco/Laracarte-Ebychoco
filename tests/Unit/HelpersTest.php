<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * @test*/
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        $this->assertEquals('Laracarte - List of artisans',page_title(''));
    }
    public function page_title_should_return_the_base_title_if_title_is_provided()
    {
        $this->assertEquals('About | Laracarte - List of artisans',page_title('About'));
    }
}
