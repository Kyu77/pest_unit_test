<?php
include "./src/functions/arrays/filterAssocArrayByTheshold.php";
include "./src/functions/arrays/getMaxValue.php";
include "./src/functions/arrays/sortAssocArrayByValues.php";
include "./src/functions/arrays/sumArray.php";

it("Input: [1, 2, 3, 4] → Expected output: 10", function () {
    $input = [1, 2, 3, 4];
    $expectedOutput = 10;
  
    $result = sumArray($input);

    expect($result)->toBe($expectedOutput);
});

it("Input: [-5, 5, 10] → Expected output: 10", function () {
    $input = [-5, 5, 10];
    $expectedOutput = 10;
  
    $result = sumArray($input);

    expect($result)->toBe($expectedOutput);
});

it("Input: [] → Expected output: 0", function () {
    $input = [];
    $expectedOutput = 0;
  
    $result = sumArray($input);

    expect($result)->toBe($expectedOutput);
});