# PocketMine-MP Plugin Template

## 環境

- PHP 8.*
- PocketMine-MP 5.*

## コードスタイルの統一
基本的に[CodeStyle.xml](/CodeStyle.xml)を使用しています。<br>
PhpStormのコードスタイルから読み込んでいただけたらと思います。

## cs-fixerに関して
cs-fixerの設定は[.php-cs-fixer.dist.php](/.php-cs-fixer.dist.php)に記述しています。<br>
また、設定を見て頂ければわかる通り`declare(strict_types = 1);`を付与するためだけに存在しています。<br>
