<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ExperienceController
 */
final class ExperienceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $experiences = Experience::factory()->count(3)->create();

        $response = $this->get(route('experiences.index'));

        $response->assertOk();
        $response->assertViewIs('experience.index');
        $response->assertViewHas('experiences');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('experiences.create'));

        $response->assertOk();
        $response->assertViewIs('experience.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExperienceController::class,
            'store',
            \App\Http\Requests\ExperienceStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $user = User::factory()->create();
        $job_title = $this->faker->word();

        $response = $this->post(route('experiences.store'), [
            'user_id' => $user->id,
            'job_title' => $job_title,
        ]);

        $experiences = Experience::query()
            ->where('user_id', $user->id)
            ->where('job_title', $job_title)
            ->get();
        $this->assertCount(1, $experiences);
        $experience = $experiences->first();

        $response->assertRedirect(route('experiences.index'));
        $response->assertSessionHas('experience.id', $experience->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $experience = Experience::factory()->create();

        $response = $this->get(route('experiences.show', $experience));

        $response->assertOk();
        $response->assertViewIs('experience.show');
        $response->assertViewHas('experience');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $experience = Experience::factory()->create();

        $response = $this->get(route('experiences.edit', $experience));

        $response->assertOk();
        $response->assertViewIs('experience.edit');
        $response->assertViewHas('experience');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ExperienceController::class,
            'update',
            \App\Http\Requests\ExperienceUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $experience = Experience::factory()->create();
        $user = User::factory()->create();
        $job_title = $this->faker->word();

        $response = $this->put(route('experiences.update', $experience), [
            'user_id' => $user->id,
            'job_title' => $job_title,
        ]);

        $experience->refresh();

        $response->assertRedirect(route('experiences.index'));
        $response->assertSessionHas('experience.id', $experience->id);

        $this->assertEquals($user->id, $experience->user_id);
        $this->assertEquals($job_title, $experience->job_title);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $experience = Experience::factory()->create();

        $response = $this->delete(route('experiences.destroy', $experience));

        $response->assertRedirect(route('experiences.index'));

        $this->assertModelMissing($experience);
    }
}
