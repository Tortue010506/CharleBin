<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/lib',
        __DIR__ . '/tpl',
        __DIR__ . '/tst',
        __DIR__ . '/bin',
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);
