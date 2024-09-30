<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Personal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PersonalController
 */
final class PersonalControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $personals = Personal::factory()->count(3)->create();

        $response = $this->get(route('personals.index'));

        $response->assertOk();
        $response->assertViewIs('personal.index');
        $response->assertViewHas('personals');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('personals.create'));

        $response->assertOk();
        $response->assertViewIs('personal.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonalController::class,
            'store',
            \App\Http\Requests\PersonalStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $first_name = $this->faker->firstName();
        $last_name = $this->faker->lastName();
        $marital_status = $this->faker->word();
        $gender = $this->faker->word();

        $response = $this->post(route('personals.store'), [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'marital_status' => $marital_status,
            'gender' => $gender,
        ]);

        $personals = Personal::query()
            ->where('first_name', $first_name)
            ->where('last_name', $last_name)
            ->where('marital_status', $marital_status)
            ->where('gender', $gender)
            ->get();
        $this->assertCount(1, $personals);
        $personal = $personals->first();

        $response->assertRedirect(route('personals.index'));
        $response->assertSessionHas('personal.id', $personal->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $personal = Personal::factory()->create();

        $response = $this->get(route('personals.show', $personal));

        $response->assertOk();
        $response->assertViewIs('personal.show');
        $response->assertViewHas('personal');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $personal = Personal::factory()->create();

        $response = $this->get(route('personals.edit', $personal));

        $response->assertOk();
        $response->assertViewIs('personal.edit');
        $response->assertViewHas('personal');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonalController::class,
            'update',
            \App\Http\Requests\PersonalUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $personal = Personal::factory()->create();
        $first_name = $this->faker->firstName();
        $last_name = $this->faker->lastName();
        $marital_status = $this->faker->word();
        $gender = $this->faker->word();

        $response = $this->put(route('personals.update', $personal), [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'marital_status' => $marital_status,
            'gender' => $gender,
        ]);

        $personal->refresh();

        $response->assertRedirect(route('personals.index'));
        $response->assertSessionHas('personal.id', $personal->id);

        $this->assertEquals($first_name, $personal->first_name);
        $this->assertEquals($last_name, $personal->last_name);
        $this->assertEquals($marital_status, $personal->marital_status);
        $this->assertEquals($gender, $personal->gender);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $personal = Personal::factory()->create();

        $response = $this->delete(route('personals.destroy', $personal));

        $response->assertRedirect(route('personals.index'));

        $this->assertModelMissing($personal);
    }
}
