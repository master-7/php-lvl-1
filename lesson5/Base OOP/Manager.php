<?php

class Manager extends Employer
{
    public $workFrom = '9:00';
    public $workTill = '19:00';

    public function getType ()
    {
        return "manager";
    }
}