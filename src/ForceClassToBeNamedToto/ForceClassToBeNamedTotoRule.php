<?php
declare(strict_types=1);

namespace SelrahcD\LearningPhpStan\ForceClassToBeNamedToto;

use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Node\InClassNode;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;
use PHPStan\Rules\TNodeType;

final class ForceClassToBeNamedTotoRule implements Rule
{
    public function getNodeType(): string
    {
        return InClassNode::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        if($scope->isInClass() && $scope->getClassReflection()->getName() !== 'Toto') {
            return [
                RuleErrorBuilder::message('Classes must be named Toto')->build(),
            ];
        }

        return [];
    }
}