<?php

class HomeControllerTest extends TestCase {

    /**
    * @test
    */
    public function it_go_to_home()
    {
       $this->client->request('GET', '/');
    }

}
