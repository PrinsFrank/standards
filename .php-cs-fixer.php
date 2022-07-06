<?php

return (new PhpCsFixer\Config())->setRules(
    [
        '@PSR12'                       => true,
        'declare_strict_types'         => true,
        'strict_comparison'            => true,
        'strict_param'                 => true,
        'blank_line_after_opening_tag' => false,
        'no_extra_blank_lines'         => true,
        'array_syntax'                 => ['syntax' => 'short'],
        'binary_operator_spaces'       => ['default' => 'align_single_space']
    ]
)->setFinder(
    PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
);