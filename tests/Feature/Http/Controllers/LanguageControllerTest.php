<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Language;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LanguageController
 */
final class LanguageControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $languages = Language::factory()->count(3)->create();

        $response = $this->get(route('languages.index'));

        $response->assertOk();
        $response->assertViewIs('language.index');
        $response->assertViewHas('languages');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('languages.create'));

        $response->assertOk();
        $response->assertViewIs('language.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LanguageController::class,
            'store',
            \App\Http\Requests\LanguageStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $user = User::factory()->create();
        $name = $this->faker->name();

        $response = $this->post(route('languages.store'), [
            'user_id' => $user->id,
            'name' => $name,
        ]);

        $languages = Language::query()
            ->where('user_id', $user->id)
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $languages);
        $language = $languages->first();

        $response->assertRedirect(route('languages.index'));
        $response->assertSessionHas('language.id', $language->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $language = Language::factory()->create();

        $response = $this->get(route('languages.show', $language));

        $response->assertOk();
        $response->assertViewIs('language.show');
        $response->assertViewHas('language');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $language = Language::factory()->create();

        $response = $this->get(route('languages.edit', $language));

        $response->assertOk();
        $response->assertViewIs('language.edit');
        $response->assertViewHas('language');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LanguageController::class,
            'update',
            \App\Http\Requests\LanguageUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $language = Language::factory()->create();
        $user = User::factory()->create();
        $name = $this->faker->name();

        $response = $this->put(route('languages.update', $language), [
            'user_id' => $user->id,
            'name' => $name,
        ]);

        $language->refresh();

        $response->assertRedirect(route('languages.index'));
        $response->assertSessionHas('language.id', $language->id);

        $this->assertEquals($user->id, $language->user_id);
        $this->assertEquals($name, $language->name);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $language = Language::factory()->create();

        $response = $this->delete(route('languages.destroy', $language));

        $response->assertRedirect(route('languages.index'));

        $this->assertModelMissing($language);
    }
}
