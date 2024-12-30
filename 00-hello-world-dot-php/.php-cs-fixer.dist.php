<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('bin')
    ->exclude('doc')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PHP56Migration:risky' => true,
        '@PER-CS:risky' => true,
        'ereg_to_preg' => true,
        'no_alias_functions' => true,
        'set_type_to_cast' => true,
        'psr_autoloading' => true,
        'modernize_types_casting' => true,
        'no_php4_constructor' => true,
        'no_unneeded_final_method' => true,
        'ordered_interfaces' => true,
        'protected_to_private' => true,
        'self_accessor' => true,
        'visibility_required' => [
            'elements' => [
                'property',
                'const',
            ],
        ],
        'no_superfluous_elseif' => true,
        'no_useless_else' => true,
        'fopen_flag_order' => true,
        'implode_call' => true,
        'void_return' => true,
        'dir_constant' => true,
        'explicit_indirect_variable' => true,
        'is_null' => true,
        'no_unset_on_property' => true,
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'logical_operators' => true,
        'ternary_to_null_coalescing' => true,
        'php_unit_expectation' => true,
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => true,
        'php_unit_no_expectation_annotation' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_strict' => true,
        'php_unit_test_annotation' => [
            'style' => 'annotation',
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'self',
        ],
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls',
        ],
        'strict_comparison' => true,
        'strict_param' => true,
        'declare_strict_types' => true,
        'explicit_string_variable' => true,
        'heredoc_to_nowdoc' => true,
        'static_lambda' => true,
        'heredoc_indentation' => true,
        'method_chaining_indentation' => true,
    ])
    ->setRiskyAllowed(true)
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setUsingCache(true)
    ->setFinder($finder)
;
