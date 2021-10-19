<?php

namespace Tests\Feature;

use App\Models\LastRun;
use App\Models\Runner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RunnerTest extends TestCase
{
    /**
     *test endpoint success status
     */
    public function test_success()
    {
        Runner::truncate();
        Runner::factory()->count(10)->create();

        $headers['Accept'] = 'application/json';

        $response = $this->get('/api/v1/runner/1/form-data', $headers);

        $response->assertStatus(200);
    }

    /**
     * test last runs endpoint data
     */
    public function test_last_runs()
    {
        Runner::truncate();
        Runner::factory()->count(10)->create();

        LastRun::truncate();
        LastRun::factory()->count(40)->create();

        $headers['Accept'] = 'application/json';

        $response = $this->get('/api/v1/runner/1/form-data', $headers);

        $response->assertStatus(200)->assertJsonStructure(['success', 'data' => ['last_runs'], 'status']);
    }

}
