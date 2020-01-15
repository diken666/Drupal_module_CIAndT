# Drupal_module_CIAndT

### 开发流程

1. 新建`CIAndT.info.yml`文件，写入如属性
```yml
    name: CIAndT
    discription: CIAndT模块部分
    package: Custom
    type: module
    version: 1.0
    core: 8.x
```
2. 新建`CIAndT.module`文件，在Drupal 7 中这个文件是必须的，在Drupal 8 中，这个文件是可选的。我们在这里让它内容为空
3. 创建`src`目录，用来存放控制器、插件、表单、模板和测试等文件
4. 在`src`下新建`Controller`文件夹，并在文件夹下面新建`MyController.php`控制文件
```php
    namespace Drupal\文件夹名\Controller;
    use Drupal\Core\Controller\ControllerBase;
    class MyController extends ControllerBase {
        public function content() {
            return 内容
        }
    }
```
5. 创建路由文件`CIAndT.routing.yml`
```yml
    CIAndT.content:
        path: '/test'
        default:
            _controller: 'Drupal\CIAndT\Controller\MyController::content'
            _title: '自定义的模块开发'
        requirement:
            _permission: 'access content'
```
