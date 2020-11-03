## Rick & Morty characters and locations

##### Requirements:
 - PHP 7.1
 - composer
 
##### How to run:
        composer update
        cd public
        php -S localhost:8000
        
Application is ready @ http://localhost:8000/
 
##TODO
- TESTS!!!
 - get rid of configuration via constant
 - fix dependency injection problems in some cases
    - classes should depend on interfaces instead of implementations
    - get rid of static
 - complete autoload via composer 
    - create local composer projects
    - get rid of RobotLoader
 - clean up templates
 - add more layers
 - refactor and rename App namespace since it is too general
 - add features like filtering, search
 - implement locations
 - add css/js
 
 
