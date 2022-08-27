<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'composer\\semver\\comparator' => '/Comparator.php',
                'composer\\semver\\constraint\\abstractconstraint' => '/Constraint/AbstractConstraint.php',
                'composer\\semver\\constraint\\constraint' => '/Constraint/Constraint.php',
                'composer\\semver\\constraint\\constraintinterface' => '/Constraint/ConstraintInterface.php',
                'composer\\semver\\constraint\\emptyconstraint' => '/Constraint/EmptyConstraint.php',
                'composer\\semver\\constraint\\multiconstraint' => '/Constraint/MultiConstraint.php',
                'composer\\semver\\semver' => '/Semver.php',
                'composer\\semver\\versionparser' => '/VersionParser.php'
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
