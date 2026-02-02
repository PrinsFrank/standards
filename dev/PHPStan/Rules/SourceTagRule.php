<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\PHPStan\Rules;

use Override;
use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Node\InClassNode;
use PHPStan\PhpDoc\ResolvedPhpDocBlock;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;
use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\UnitEnum;
use Throwable;

/** @implements Rule<InClassNode> */
class SourceTagRule implements Rule {
    #[Override]
    public function getNodeType(): string {
        return InClassNode::class;
    }

    #[Override]
    public function processNode(Node $node, Scope $scope): array {
        $classReflection = $node->getClassReflection();
        if ($classReflection->isAnonymous()
            || $classReflection->isAbstract()
            || $classReflection->isTrait()
            || $classReflection->isAttributeClass()
            || $classReflection->isInterface()
            || $classReflection->isSubclassOf(Throwable::class)) {
            return [];
        }

        $FQN = $classReflection->getName();
        if (str_starts_with($FQN, 'PrinsFrank\Standards\Dev')
            || str_starts_with($FQN, 'PrinsFrank\Standards\Test')
            || $FQN === UnitEnum::class
            || $FQN === BackedEnum::class) {
            return [];
        }

        $errors = [];
        $resolvedPhpDoc = $scope->getClassReflection()?->getResolvedPhpDoc();
        if (($source = $this->getTagValue($resolvedPhpDoc, 'source')) === null && $this->hasTag($resolvedPhpDoc, 'no-official-source') === false) {
            $errors[] = RuleErrorBuilder::message('Specification should have a @source tag that points to the source document')->identifier('spec.source.required')->build();
        } elseif ($source !== null && str_starts_with($source, 'http://') === false && str_starts_with($source, 'https://') === false) {
            $errors[] = RuleErrorBuilder::message('Specification should have a valid url for @source tag')->identifier('spec.source.invalid')->build();
        }

        if (($updatedBy = $this->getTagValue($resolvedPhpDoc, 'updated-by')) === null && $this->getTagValue($resolvedPhpDoc, 'manually-updated') === null) {
            $errors[] = RuleErrorBuilder::message('Specification should have @manually-updated or @updated-by tag in docblock')->identifier('spec.updatedByOrManuallyUpdated.required')->build();
        }

        if ($updatedBy !== null && class_exists($updatedBy) === false) {
            $errors[] = RuleErrorBuilder::message('Specification has invalid class in @updated-by tag: class does not exist')->identifier('spec.updatedBy.invalid')->build();
        }

        return $errors;
    }

    private function getTagValue(?ResolvedPhpDocBlock $resolvedPhpDocBlock, string $tagName): ?string {
        foreach ($resolvedPhpDocBlock?->getPhpDocNodes() ?? [] as $phpDocNode) {
            foreach ($phpDocNode->getTags() as $tag) {
                if ($tag->name !== '@' . $tagName) {
                    continue;
                }

                return trim($tag->value->__toString());
            }
        }

        return null;
    }

    private function hasTag(?ResolvedPhpDocBlock $resolvedPhpDocBlock, string $tagName): bool {
        foreach ($resolvedPhpDocBlock?->getPhpDocNodes() ?? [] as $phpDocNode) {
            foreach ($phpDocNode->getTags() as $tag) {
                if ($tag->name !== '@' . $tagName) {
                    continue;
                }

                return true;
            }
        }

        return false;
    }
}
