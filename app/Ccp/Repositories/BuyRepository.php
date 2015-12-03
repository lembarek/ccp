<?php namespace Ccp\Repositories;

use Ccp\Models\Buy;
use Ccp\Interfaces\BuyInterface;

class BuyRepository extends Repository implements BuyInterface
{

    protected  $model;

    public function __construct(Buy $buy)
    {
        $this->model = $buy;
    }

}
