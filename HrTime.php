<?php

class HrTime extends Time
{
    public function show()
    {
        parent::show();
        $time = date("h");

        return $time;
    }

    public function Split()
    {
        $time = date("\H\=h, \M\=i");
        return $time;
    }
}


?>