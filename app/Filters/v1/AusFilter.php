<?php
namespace App\Filters\v1;

use App\Filters\ApiFilter;

class AusFilter extends ApiFilter {

    protected $allowedParams = [
        'title'                 => ['eq', 'lk'],
        'requiredCertificate'   => ['eq', 'lk'],
        'trainingDuration'      => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'workingHours'          => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'salaryFirstYear'       => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'salarySecondYear'      => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'salaryThirdYear'       => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'salaryFourthYear'      => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'popular'               => ['eq'],
        'bestPaid'              => ['eq']
    ];

    protected $dbColumnMap = [
        'requiredCertificate'   => 'required_certificate',
        'trainingDuration'      => 'training_duration',
        'workingHours'          => 'working_hours',
        'salaryFirstYear'       => 'salary_first_year',
        'salarySecondYear'      => 'salary_second_year',
        'salaryThirdYear'       => 'salary_third_year',
        'salaryFourthYear'      => 'salary_fourth_year',
        'bestPaid'              => 'best_paid'
    ];

    protected $operatorMap = [
        'eq'  => '=',
        'neq' => '!=',
        'lt'  => '<',
        'lte' => '<=',
        'gt'  => '>',
        'gte' => '>=',
        'lk'  => 'like'
    ];
}