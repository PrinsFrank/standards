<?php

return (new PhpCsFixer\Config())->setRules(
    [
        '@PSR12'                       => true,
        'declare_strict_types'         => true,
        'strict_comparison'            => true,
        'strict_param'                 => true,
        'blank_line_after_opening_tag' => false,
        'no_extra_blank_lines'         => true,
        'class_attributes_separation'  => true,
        'array_syntax'                 => ['syntax' => 'short'],
        'binary_operator_spaces'       => ['default' => 'align_single_space'],
        'no_unused_imports'            => true,
        'array_indentation'            => true,
        'no_alias_functions'           => true,
        'phpdoc_line_span'             => ['property' => 'single', 'method' => 'single', 'const' => 'single'],
        'phpdoc_order'                 => ['order' => ['deprecated', 'internal', 'standard', 'source', 'template', 'implements', 'extends', 'covers', 'coversDefaultClass', 'param', 'throws', 'return']]
    ]
)->setFinder(
    PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
);
