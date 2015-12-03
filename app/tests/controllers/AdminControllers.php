<?php

class AdminControllerTest extends TestCase {

    /**
    * @test
    */
    public function it_go_to_admin_page()
    {
        $this->client->request('GET', '/admin');
    }


    /**
    * @test
    */
    public function it_show_all_buys()
    {
        $this->client->request('GET', '/acp/buys');
    }


}
