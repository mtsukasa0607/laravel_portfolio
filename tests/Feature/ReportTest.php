<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{

    public function test_api_customers_get()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
    }

    public function test_api_customers_post()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    public function test_api_customers_id_get()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }

    public function test_api_customers_id_put()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    public function test_api_customers_id_delete()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }

    public function test_api_reports_get()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    public function test_api_reports_post()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    public function test_api_reports_id_get()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }

    public function test_api_reports_id_put()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    public function test_api_reports_id_delete()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }

    public function test_api_customers_get_json()
    {
        $response = $this->get('api/customers');
        $this->assertThat($response->content(), $this->isJson());
    }




}
