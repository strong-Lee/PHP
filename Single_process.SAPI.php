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
