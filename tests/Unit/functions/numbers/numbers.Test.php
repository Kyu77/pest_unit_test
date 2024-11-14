<?php
include "./src/functions/numbers/calculateAverage.php";
include "./src/functions/numbers/calculateFactorial.php";
include "./src/functions/numbers/getSquare.php";
include "./src/functions/numbers/isEven.php";

it('calculates the square of an integer', function () {
    $input = 4;
    $expectedOutput = 16;
  
    $result = getSquare($input);

    expect($result)->toBe($expectedOutput);
});

it('calculates the square of a float', function () {
    $input = 2.5;
    $expectedOutput = 6.25;

    $result = getSquare($input);

    expect($result)->toBe($expectedOutput);
});







it('returns true for an even number', function () {
    $input = 4;
    $expectedOutput = true;

    $result = isEven($input);

    expect($result)->toBe($expectedOutput);
});

it('returns false for an odd number', function () {
    $input = 7;
    $expectedOutput = false;

    $result = isEven($input);

    expect($result)->toBe($expectedOutput);
});






it("Input: 5 → Expected output: 120", function () {
    $input = 5;
    $expectedOutput = 120;

    $result = calculateFactorial($input);

    expect($result)->toBe($expectedOutput);
});

it("Input: 0 → Expected output: 1", function () {
    $input = 0;
    $expectedOutput = 1;

    $result = calculateFactorial($input);

    expect($result)->toBe($expectedOutput);
});

it("Input: -1 → Expected output: Exception", function () {
    $input = -1;
    

    expect(fn() => calculateFactorial(-1))->toThrow(InvalidArgumentException::class);
    
});






it(" Input: [1, 2, 3, 4, 5] → Expected output: 3.0", function () {
    $input = [1, 2, 3, 4, 5];
    $expectedOutput = 3.0;

    $result = calculateAverage($input);

    expect($result)->toBe($expectedOutput);
});

it(" Input: [] → Expected output: Exception", function () {
    $input = [];
    

    expect(fn() => calculateAverage([]))->toThrow(InvalidArgumentException::class);
});







