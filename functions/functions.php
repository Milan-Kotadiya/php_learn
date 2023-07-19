<?php
class calculator
{
    public function Sum($firstValue, $secondValue)
    {
        return $firstValue + $secondValue;
    }
}



// Export As A Object - best less chanses of Overlapping
$calculate = new calculator();
var_export($calculate, true);


// Export As A Variable
$testFunction = function () {
    echo "Test Function Called from functions.phpfile";
    return;
};
var_export($testFunction, true);

// just define function when file imported it is also imported
function simple()
{
    echo "simple function from functions";
    return;
};
