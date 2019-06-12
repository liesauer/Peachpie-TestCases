# HtmlAgilityPackMissingMethodException

## 环境
1. `Peachpie 不明确版本`
2. `Peachpie = 0.9.28 中未出现此BUG`

## 修复
至 `Peachpie = 0.9.42` 未修复

## 测试用例说明
在类方法中调用 `HtmlAgilityPack`导致 `Peachpie` 生成的IL代码异常。
