# HtmlAgilityPackMissingMethodException

## 环境
1. `Peachpie 不明确版本`
2. `Peachpie = 0.9.28 中未出现此BUG`

## 修复
[`Peachpie@fdfee1b`](https://github.com/peachpiecompiler/peachpie/commit/fdfee1b108d4411061e705aae7d68bc24459fc8e) 中已修复

## 测试用例说明
在类方法中调用 `HtmlAgilityPack`导致 `Peachpie` 生成的IL代码异常。
