    在各个服务器抽象层之间遵守着相同的约定，这里我们称之为SAPI接口。 每个SAPI实现都是一个_sapi_module_struct结构体变量。
    
（SAPI接口）。 在PHP的源码中，当需要调用服务器相关信息时，全部通过SAPI接口中对应方法调用实现， 

而这对应的方法在各个服务器抽象层实现时都会有各自的实现。
            
                                        +------------------------------------------+
                                        +                 上层调用                 + 
                                        +------------------------------------------+
                                                            | 
                                                            v
                                        +------------------------------------------+
                                        +                   SAPI层                 +           
                                        +------------------------------------------+
                                                            | 
                                                |-----------|-----------|----------|
                                                V           V           V          V
                                        +-------------+ +--------+ +-------+  
                                        + CGI/FASTCGI + + Apache + + Embed +      ...
                                        +-------------+ +--------+ +-------+  

    以CGI和apache2服务器为例，它们的启动方式如下：

        cgi_sapi_module.startup(&cgi_sapi_module)   //  cgi模式 cgi/cgi_main.c文件
 
        apache2_sapi_module.startup(&apache2_sapi_module);
        //  apache2服务器  apache2handler/sapi_apache2.c文件
