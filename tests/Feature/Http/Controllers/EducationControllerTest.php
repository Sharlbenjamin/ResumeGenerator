<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EducationController
 */
final class EducationControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $education = Education::factory()->count(3)->create();

        $response = $this->get(route('education.index'));

        $response->assertOk();
        $response->assertViewIs('education.index');
        $response->assertViewHas('education');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('education.create'));

        $response->assertOk();
        $response->assertViewIs('education.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EducationController::class,
            'store',
            \App\Http\Requests\EducationStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $user = User::factory()->create();
        $name = $this->faker->name();

        $response = $this->post(route('education.store'), [
            'user_id' => $user->id,
            'name' => $name,
        ]);

        $education = Education::query()
            ->where('user_id', $user->id)
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $education);
        $education = $education->first();

        $response->assertRedirect(route('education.index'));
        $response->assertSessionHas('education.id', $education->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $education = Education::factory()->create();

        $response = $this->get(route('education.show', $education));

        $response->assertOk();
        $response->assertViewIs('education.show');
        $response->assertViewHas('education');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $education = Education::factory()->create();

        $response = $this->get(route('education.edit', $education));

        $response->assertOk();
        $response->assertViewIs('education.edit');
        $response->assertViewHas('education');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EducationController::class,
            'update',
            \App\Http\Requests\EducationUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $education = Education::factory()->create();
        $user = User::factory()->create();
        $name = $this->faker->name();

        $response = $this->put(route('education.update', $education), [
            'user_id' => $user->id,
            'name' => $name,
        ]);

        $education->refresh();

        $response->assertRedirect(route('education.index'));
        $response->assertSessionHas('education.id', $education->id);

        $this->assertEquals($user->id, $education->user_id);
        $this->assertEquals($name, $education->name);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $education = Education::factory()->create();

        $response = $this->delete(route('education.destroy', $education));

        $response->assertRedirect(route('education.index'));

        $this->assertModelMissing($education);
    }
}
