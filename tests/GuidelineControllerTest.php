<?php

namespace Akkurate\LaravelCarbonIcons\Tests;

class GuidelineControllerTest extends TestCase
{
    /** @test */
    public function it_should_return_an_index_of_icons_view()
    {
        $response = $this->get(route('dev.guideline.icons'));
        $response->assertStatus(200);
    }
}
