<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testApi(){
      
      $this->get('/');
      $this->assertJsonStringEqualsJsonString
        (
          json_encode
          (
            array
            (
              "api"=>"Descubra Manaus",
              "version"=>"0.0.1"
            )),
          $this->response->getContent()
        );

    }

}
