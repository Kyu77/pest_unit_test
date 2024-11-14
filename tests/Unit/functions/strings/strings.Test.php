<?php
include "./src/functions/strings/getWelcomeMessage.php";
include "./src/functions/strings/convertToUppercase.php";
include "./src/functions/strings/generateGreeting.php";
include "./src/functions/strings/reverseString.php";

it("Input: 'john' → Expected output: 'Welcome, John!'", function () {
    $name = "john";
    $expectedOutput = "Welcome, John!";
    
    $result = getWelcomeMessage($name);
    
    expect($result)->toBe($expectedOutput);
});

it('converts text to uppercase', function () {
    $input = "hello";
    $expectedOutput = "HELLO";

    $result = convertToUppercase($input);

    expect($result)->toBe($expectedOutput);
});

it('reverses the string', function () {
    $input = "abcd";
    $expectedOutput = "dcba";

    $result = reverseString($input);

    expect($result)->toBe($expectedOutput);
});


it('generates a morning greeting based on name and time', function () {
    $name = "John";
    $time = "09:00";
    $expectedOutput = "Good morning, John!";

    $result = generateGreeting($name, $time);

    expect($result)->toBe($expectedOutput);
});

it('generates an afternoon greeting based on name and time', function () {
    $name = "Alice";
    $time = "15:00";
    $expectedOutput = "Good afternoon, Alice!";

    $result = generateGreeting($name, $time);

    expect($result)->toBe($expectedOutput);
});

it('generates an evening greeting based on name and time', function () {
    $name = "Bob";
    $time = "20:30";
    $expectedOutput = "Good evening, Bob!";

    $result = generateGreeting($name, $time);

    expect($result)->toBe($expectedOutput);
});

?>

