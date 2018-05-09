A PHP Tiny Framework

- [router](./router/index.php) 实现简单的路由
- [利用 Composer 一步一步构建自己的 PHP 框架](https://lvwenhan.com/php/405.html)
    - 注意：第三部分，需要使用到`MVC`，但是实际使用过程中，无法获取到路由，`vendor`的库没有放到`boostrap`中加载，但是不能删除，否则无法获取到`app\controllers`中的控制器
- [使用composer构建PHP框架之路由构建方法](https://juejin.im/user/5736e4cc1ea4930060df481e/shares)

使用方法
```
cd public

在命令行中使用 php -S localhost:3000

打开浏览器，输入 localhost:3000/home 
即可看到`app\controllers\HomeControllers::home`方法的调用
```