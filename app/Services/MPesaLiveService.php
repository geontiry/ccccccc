<?php

namespace App\Services;

class MPesaLiveService
{
    private $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    public function getTransactionReport(int $projectId = null)
    {

        //return $entries;
    }

    // Another report that uses the same $this->year
    public function getIncomeReport(int $projectId = null)
    {
        //return $entries;
    }
}
