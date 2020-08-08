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
        $customer = [
            'name' => 'customer_name',
        ];
        $response = $this->postJson('api/customers', $customer);
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

    public function test_api_customers_get_json_format()
    {
        $response = $this->get('api/customers');
        $customers = $response->json();
        $customer = $customers[0];
        $this->assertSame(['id', 'name'], array_keys($customer));
    }

    // public function test_api_customers_get_json_10_return()
    // {
    //     $response = $this->get('api/customers');
    //     $response->assertJsonCount(10);
    // }

    public function test_api_customers_post_add_user()
    {
        $params = [
            'name' => '顧客名',
        ];
        $this->postJson('api/customers', $params);
        $this->assertDatabaseHas('customers', $params);
    }



}
