<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);
$config = new PhpCsFixer\Config();
return $config->setRules([
    'declare_strict_types' => true, // declare(strict_types = 1);を追加
    'declare_equal_normalize' => ['space' => 'single'], // declare文の等号の前後にシングルスペースを入れる
    'explicit_string_variable' => true,  // 文字列演算の際に明示的な変数を使う
    'escape_implicit_backslashes' => true, // 文字列内のバックスラッシュをエスケープする
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setLineEnding("\n");
