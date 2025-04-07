<?php

namespace Tests\Unit;

use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Helpers\DefaultVideoHelper;

class HelperTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_default_user_and_professor()
    {
        createDefaultUser();
        createDefaultTeacher();

        $this->assertDatabaseCount('users', 2);
        $this->assertDatabaseHas('users', ['email' => 'default@example.com']);
        $this->assertDatabaseHas('users', ['email' => 'default_teacher@example.com']);
    }

    public function test_create_default_video()
    {
        DefaultVideoHelper::createDefaultVideo();

        $this->assertDatabaseHas('videos', ['title' => 'Detall Blue Kid']);
    }
}
