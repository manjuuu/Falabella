<?php


namespace manju\PHP;


class Index
{
    public  function executeChallenge(){

        for($i =1; $i <=100;$i++)
        {
            $Calculation = new Calculation();
            $result = new Result();
            $result -> number = $i;
            $result -> remainder3  = $Calculation->calcRemainder($i,3);
            $result -> remainder5  = $Calculation->calcRemainder($i,5);
            $result -> remainder35 = $Calculation->addRemainder($result->remainder3,$result->remainder5);
            $write = new Answer();
            $write->writeAnswer($result);


        }
    }

}
