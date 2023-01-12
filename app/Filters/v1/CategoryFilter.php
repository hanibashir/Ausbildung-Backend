<?php
namespace App\Filters\v1;

use App\Filters\ApiFilter;


class CategoryFilter extends ApiFilter {

    protected $allowedParams = [
        'name' => ['eq', 'lk'],
        'description' => ['eq', 'lk']
    ];

    protected $dbColumnMap = [

    ];

    protected $operatorMap = [
        'eq'  => '=',
        'lk'  => 'like'
    ];
}


