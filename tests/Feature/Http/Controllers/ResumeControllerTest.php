<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ResumeController
 */
final class ResumeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $resumes = Resume::factory()->count(3)->create();

        $response = $this->get(route('resumes.index'));

        $response->assertOk();
        $response->assertViewIs('resume.index');
        $response->assertViewHas('resumes');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('resumes.create'));

        $response->assertOk();
        $response->assertViewIs('resume.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ResumeController::class,
            'store',
            \App\Http\Requests\ResumeStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = $this->faker->name();
        $user = User::factory()->create();

        $response = $this->post(route('resumes.store'), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $resumes = Resume::query()
            ->where('name', $name)
            ->where('user_id', $user->id)
            ->get();
        $this->assertCount(1, $resumes);
        $resume = $resumes->first();

        $response->assertRedirect(route('resumes.index'));
        $response->assertSessionHas('resume.id', $resume->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $resume = Resume::factory()->create();

        $response = $this->get(route('resumes.show', $resume));

        $response->assertOk();
        $response->assertViewIs('resume.show');
        $response->assertViewHas('resume');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $resume = Resume::factory()->create();

        $response = $this->get(route('resumes.edit', $resume));

        $response->assertOk();
        $response->assertViewIs('resume.edit');
        $response->assertViewHas('resume');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ResumeController::class,
            'update',
            \App\Http\Requests\ResumeUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $resume = Resume::factory()->create();
        $name = $this->faker->name();
        $user = User::factory()->create();

        $response = $this->put(route('resumes.update', $resume), [
            'name' => $name,
            'user_id' => $user->id,
        ]);

        $resume->refresh();

        $response->assertRedirect(route('resumes.index'));
        $response->assertSessionHas('resume.id', $resume->id);

        $this->assertEquals($name, $resume->name);
        $this->assertEquals($user->id, $resume->user_id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $resume = Resume::factory()->create();

        $response = $this->delete(route('resumes.destroy', $resume));

        $response->assertRedirect(route('resumes.index'));

        $this->assertModelMissing($resume);
    }
}
