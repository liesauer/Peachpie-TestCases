# packageNameConflict

## 环境
1. `Peachpie >= 0.9.37`

## 修复
添加以下配置到 `csproj` 或 `*proj` 文件
```
<PropertyGroup>
  <ComposerJsonPath>false</ComposerJsonPath>
</PropertyGroup>
```

## 测试用例说明
静默读取`composer.json`里的包名导致生成的`deps.json`文件错误，无法启动程序。
