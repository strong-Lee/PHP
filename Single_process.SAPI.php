$ php -f test.php                               

Call each extension's MINIT                                 ---\
                                                                \
    Request test.php                        ---\                 \
                                                \                 \
    Call each extension's RINIT                  \                 \
                                                  | Individual      |
        Execute test.php                          |                 | 
                                                  | Request         | PHP Lifespan
    Call each extension's RSHUTDOWN              /                  |
                                                /                   |
    Finish cleaning up after test.php       ---/                   /
                                                                  /
Call each extension's MSHUTDOWN                                  /
                                                                /
Terminate php                                               ---/

{启动} 在调用每个模块的模块初始化前，会有一个初始化的过程，它包括  

    初始化若干全局变量

    初始化若干常量

    初始化Zend引擎和核心组件

    解析php.ini

    全局操作函数的初始化

    初始化静态构建的模块和共享模块(MINIT)

    禁用函数和类

    ACTIVATION
        
        激活Zend引擎

        激活SAPI

        环境初始化

        模块请求初始化

{运行} php_execute_script函数包含了运行PHP脚本的全部过程

    DEACTIVATION

{结束} 
    
    flush

    关闭Zend引擎
    

    
    
