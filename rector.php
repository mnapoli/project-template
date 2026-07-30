<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector;
use Rector\CodeQuality\Rector\FuncCall\SortCallLikeNamedArgsRector;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodingStyle\Rector\Catch_\CatchExceptionNameMatchingTypeRector;
use Rector\CodingStyle\Rector\ClassLike\NewlineBetweenClassLikeStmtsRector;
use Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector;
use Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\CodingStyle\Rector\Encapsed\WrapEncapsedVariableInCurlyBracesRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\CodingStyle\Rector\Use_\SeparateMultiUseImportsRector;
use Rector\Config\RectorConfig;
use Rector\EarlyReturn\Rector\If_\ChangeOrIfContinueToMultiContinueRector;
use Rector\Php81\Rector\Array_\ArrayToFirstClassCallableRector;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;
use Rector\Php85\Rector\Property\AddOverrideAttributeToOverriddenPropertiesRector;
use Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector;
use Rector\TypeDeclaration\Rector\ArrowFunction\AddArrowFunctionReturnTypeRector;
use Rector\TypeDeclaration\Rector\Closure\AddClosureNeverReturnTypeRector;
use Rector\TypeDeclaration\Rector\Closure\AddClosureVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\Closure\ClosureReturnTypeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
    )
    ->withPhpSets()
    ->withSkip([
        AddOverrideAttributeToOverriddenMethodsRector::class,
        AddClosureVoidReturnTypeWhereNoReturnRector::class,
        AddArrowFunctionReturnTypeRector::class,
        NewlineBeforeNewAssignSetRector::class,
        SortCallLikeNamedArgsRector::class,
        NewlineAfterStatementRector::class,
        FlipTypeControlToUseExclusiveTypeRector::class,
        ArrayToFirstClassCallableRector::class,
        AddTypeToConstRector::class,
        WrapEncapsedVariableInCurlyBracesRector::class,
        SeparateMultiUseImportsRector::class,
        AddOverrideAttributeToOverriddenPropertiesRector::class,
        AddClosureNeverReturnTypeRector::class,
        ClosureReturnTypeRector::class,
        NewlineBetweenClassLikeStmtsRector::class,
        CatchExceptionNameMatchingTypeRector::class,
        EncapsedStringsToSprintfRector::class,
        LocallyCalledStaticMethodToNonStaticRector::class,
        PrivatizeLocalGetterToPropertyRector::class,
        MakeInheritedMethodVisibilitySameAsParentRector::class,
        ExplicitBoolCompareRector::class,
        ChangeOrIfContinueToMultiContinueRector::class,
    ]);
