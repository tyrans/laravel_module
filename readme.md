
## Laravel 模块化开发脚手架

### 创建模块：
你可以通过在终端中运行 `create-project` 命令来创建一个 `ProductModule`：
```php
composer create-project --prefer-dist ckryo/laravel_module ProductModule
```
项目创建完成后需要对项目 `composer.json` 文件进行初始化配置：
```text
# 设置当前模块为 composer library 包, 其它项目中才可引用
# "type": "project" === 更改为 ==> "type": "library"
# 设置当前模块的命名空间 YOURModuleNAME 即为命名空间
# "Module\\": "src/" === 更改为 ==> "YOURModuleNAME": "src/"
```
也可以使用简化命令:
```php
php artisan module:init
```
然后执行 `composer` 命令:
```php
composer du
```

### 目录结构说明
```
bootstrap/  # laravel项目目录
 -| cache   # 原laravel项目下 /bootstrap/cache 目录
 -| config   # 原laravel项目下 /config 目录
 -| public   # 原laravel项目下 /public 入口
 -| storage   # 原laravel项目下 /storage 目录
 -| app.php   # 原laravel项目下 /bootstrap/app.php 引导文件
 -| route.php   # 本地项目调试路由
src/ # 模块代码的核心目录 - 自建
config/ # 模块相关的配置目录 - 自建
```

### 使用说明
模块中的开发过程与在 `laravel` 框架中无异：
```
# 创建一个模型
php artisan make:model UserModel

# 创建一个请求
php artisan make:request UserRequest

# 创建一个控制器
php artisan make:controller UserController
```

### 模块化开发规范 （概述）
使用模块化开发，主要为了最终达到以下目的：

* 针对相同问题选择统一的解决方案
* 规范化代码结构
* 抽象业务核心，便于在不同的业务场景使用


***代码分离***

1. 使用 `Request` 处理表单、权限验证
2. `Model` 只提供属性申明、依赖关系、读写器
3. `controller` 实现针对具体的场景实现业务拼接
4. `业务核心代码` 创建到自建类、扩展、抽象接口中
5. 模块允许存在本地调试路由，但禁止上传到版本管理服务器
6. 模块中不建议创建控制器
7. 模块独立的配置信息申明在模块中，一般配置信息通过 `env` 完成
8. 项目中主要实现对模块的调用、环境配置、控制器、路由的申明；

详情查看 [《laravel模块化开发规范》](/) - 待补充.