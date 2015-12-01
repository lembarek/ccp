<?php

class AdminControllerTest extends TestCase {

    /**
    * @test
    */
    public function it_go_to_admin_page()
    {
        $this->client->request('GET', '/admin');
    }

}
