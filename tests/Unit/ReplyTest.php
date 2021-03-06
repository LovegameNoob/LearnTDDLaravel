<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testReplyHasOwner()
    {
        $reply = factory('App\Reply')->create();

        $this->assertInstanceOf('App\User',$reply->owner);
    }
}
