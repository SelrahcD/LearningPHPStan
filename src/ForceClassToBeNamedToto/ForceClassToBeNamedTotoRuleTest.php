<?php
declare(strict_types=1);

namespace SelrahcD\LearningPhpStan\ForceClassToBeNamedToto;

require_once __DIR__ . '/../../vendor/autoload.php';

final class ForceClassToBeNamedTotoRuleTest extends \PHPStan\Testing\RuleTestCase
{
    protected function getRule(): \PHPStan\Rules\Rule
    {
        return new ForceClassToBeNamedTotoRule();
    }

    public function testRule(): void
    {
        $this->analyse([__DIR__ . '/data/class_named_bla.php'], [
            [
                'Classes must be named Toto',
                3,
            ],
        ]);
    }

}