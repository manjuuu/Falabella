<?php



class Answer
{
    function writeAnswer($result) : void
    {
        switch ($result) {
            case ($result->remainder35 == 0 ):
                echo sprintf("%s\n","Linianos");
                break;
            case ($result->remainder5 == 0):
                echo sprintf("%s\n","IT");
                break;
            case ($result->remainder3==0):
                echo sprintf("%s\n","Linio");
                break;
            default:
                echo sprintf("%s\n",$result->number);
        }
    }
}
