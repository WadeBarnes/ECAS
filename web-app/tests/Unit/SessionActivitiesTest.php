<?php

namespace Tests\Unit;


use App\Dynamics\Decorators\CacheDecorator;
use App\Dynamics\SessionActivity;
use Tests\BaseMigrations;

class SessionActivitiesTest extends BaseMigrations
{

    public $api;
    public $fake;
    public $sessionActivities;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = new SessionActivity();
        $this->fake = new \App\MockEntities\Repository\SessionActivity(new \App\MockEntities\SessionActivity());

        $this->sessionActivities = factory(\App\MockEntities\SessionActivity::class, 7)->create();
    }


    /** @test */
    public function get_all_records_from_api()
    {
        $results = $this->api->all();
        $this->assertInstanceOf('Illuminate\Support\Collection', $results);
        $this->verifySingle($results->first());

    }


    /** @test */
    public function get_all_records_from_api_via_the_cache()
    {
        $results = (new CacheDecorator($this->api))->all();
        $this->assertInstanceOf('Illuminate\Support\Collection', $results);
        $this->verifySingle($results->first());

    }



    /** @test */
    public function get_all_fake_records()
    {
        $results = $this->fake->all();
        $this->assertInstanceOf('Illuminate\Support\Collection', $results);
        $this->verifySingle($results->first());

    }


    /** @test */
    public function get_all_fake_records_via_the_cache()
    {
        $results = (new CacheDecorator($this->fake))->all();
        $this->assertInstanceOf('Illuminate\Support\Collection', $results);
        $this->verifySingle($results->first());

    }


    private function verifySingle($result)
    {
        $this->assertIsArray($result);
        $this->assertArrayHasKey('id', $result);
        $this->assertArrayHasKey('name', $result);
        $this->assertArrayHasKey('code', $result);

    }

}
