<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostTest extends TestCase
{
    use RefreshDatabase;

    protected $postActive;
    protected $postNotActive;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function setUp(): void
    {
        parent::setUp();
        $this->postActive = Post::factory()->active()->create();
        $this->postNotActive = Post::factory()->create();
    }
    public function testUser()
    {
        $user = User::factory()->create();
        $post = Post::factory()->active()->create(['user_id' => $user->id]);
        $this->assertEquals(User::find($user->id), $post->user);
    }

    public function testIsActiveTrue()
    {
        $post = $this->postActive;
        $this->assertTrue($post->isActive());
    }

    public function testIsActiveFalse()
    {
        $post = $this->postNotActive;
        $this->assertFalse($post->isActive());
    }

    public function testSetActive()
    {
        $post = $this->postNotActive;
        $post->setActive();
        $postFromDB = Post::find($post->id);
        $this->assertTrue($postFromDB->isActive());
    }
}
