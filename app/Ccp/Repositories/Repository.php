<?php namespace Ccp\Repositories;

abstract class Repository
{
    /**
     * get all
     *
     * @return void
     */
    public function all()
    {
        $this->model->all();
    }

}
