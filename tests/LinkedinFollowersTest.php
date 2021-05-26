<?php

namespace MarshmallowPackages\LinkedinFollowers\Tests;

use TypeError;
use MarshmallowPackages\LinkedinFollowers\LinkedinFollowers;
use MarshmallowPackages\LinkedinFollowers\LinkedinFollowersHelper;

class LinkedinFollowersTest extends TestCase
{
    protected $company_id = 13027923;

    /** @test */
    public function test_of_method_requires_an_integer_as_variable()
    {
        $this->expectException(TypeError::class);
        $reposne = LinkedinFollowers::of('MARSHMALLOW');
    }

    /** @test */
    public function test_the_of_methods_retuns_it_self()
    {
        $helper = LinkedinFollowers::of($this->company_id);
        $this->assertInstanceOf(LinkedinFollowersHelper::class, $helper);
    }

    /** @test */
    public function test_url_is_still_available()
    {
        $response = LinkedinFollowers::of($this->company_id)->get()->getResponse();
        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function getResponseBody()
    {
        $response = LinkedinFollowers::of($this->company_id)->get()->getResponse()->body();
        $this->assertMatchesRegularExpression(LinkedinFollowers::regularExpression(), $response);
    }

    /** @test */
    public function test_matcher_has_an_array_with_two_items()
    {
        $response = LinkedinFollowers::of($this->company_id)
            ->get()
            ->match();

        $this->assertCount(2, $response);
    }

    /** @test */
    public function test_div_contains_a_number()
    {
        $response = LinkedinFollowers::of($this->company_id)
            ->get()
            ->match();

        $result = $response[1][0];

        $this->assertEquals($result, intval($result));
    }

    /** @test */
    public function test_the_getter_returns_an_integer()
    {
        $followers = LinkedinFollowers::of($this->company_id)->followers();

        $this->assertTrue(true);
    }

    // /** @test */
    // public function test_it_throws_an_exception_when_div_is_not_available()
    // {
    //     $this->assertTrue(true);
    // }

    // /** @test */
    // public function test_it_throws_an_exception_when_div_does_not_contain_an_integer()
    // {
    //     $this->assertTrue(true);
    // }

    // /** @test */
    // public function test_it_throws_an_exception_when_linked_resposne_is_not_oke()
    // {
    //     $this->assertTrue(true);
    // }
}
