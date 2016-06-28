<?php

class Employer
{
    public $name;

    public $workFrom = '9:00';
    public $workTill = '21:00';

    protected $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function getType ()
    {
        return "Base type function";
    }

    public function setSchedule($from, $till)
    {
        $this->workFrom = $from;
        $this->workTill = $till;
    }

    public function getSchedule()
    {
        return $this->name . ' : my tabletable : from ' . $this->workFrom .
            ' till ' . $this->workTill;
    }
}