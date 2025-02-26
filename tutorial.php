<!-- In the name of Allah  -->

<?php
    echo 'Hello World!';
    ECHO 'Hi';
    echo '<br>';
    print gettype("hi");

    echo nl2br("hi
    d");

    $name = "Yuan";
    // Heredoc
    echo <<<"HelloHere"
    <br>Hello PHP
    $$$ ... ``` \\\
    my name is $name
    HelloHere;
    // Nowdoc
    echo <<<'HelloNow'
    <br>Hello PHP
    $$$ ... ``` \\\
    my name is $name
    HelloNow;
