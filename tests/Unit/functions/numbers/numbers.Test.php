<php

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

