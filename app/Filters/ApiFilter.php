<?php
namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {

    protected $allowedParams = [];

    protected $dbColumnMap = [];

    protected $operatorMap = [];


    public function filter(Request $request) {
        $queryArray = [];

        foreach ($this->allowedParams as $param => $operators) {
            $query = $request->query($param);

            if (!isset($query)) {
                continue;
            }

            $dbColumn = $this->dbColumnMap[$param] ?? $param;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                   if ($operator == 'lk') {
                       $queryArray[] = [$dbColumn, $this->operatorMap[$operator], "%$query[$operator]%"];
                   } else {
                       $queryArray[] = [$dbColumn, $this->operatorMap[$operator], $query[$operator]];
                   }
                }
            }
        }

        return $queryArray;
    }
}