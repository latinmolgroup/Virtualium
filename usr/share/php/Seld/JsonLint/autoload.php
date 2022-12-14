<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'seld\\jsonlint\\duplicatekeyexception' => '/DuplicateKeyException.php',
                'seld\\jsonlint\\jsonparser' => '/JsonParser.php',
                'seld\\jsonlint\\lexer' => '/Lexer.php',
                'seld\\jsonlint\\parsingexception' => '/ParsingException.php',
                'seld\\jsonlint\\undefined' => '/Undefined.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
