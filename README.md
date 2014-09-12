Drupal tests
===========
Skeleton Drupal feature for Acceptance testing with Behat

## Installation

 1. Copy drupal_tests to your module directory.
 2. Rename all instances of drupal_tests to YOURMODULENAME_tests.
 3. Install Composer:
    
   `$ php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"`

 4. Install Behat and dependencies via Composer:

    `$ cd tests`
    `$ php composer.phar install`

 5. Copy tests/behat.template.yml to tests/behat.yml and modify:

    `mv behat.template.yml behat.yml`

 6. Enable the module
 7. Run Behat and examine test results!

    `bin/behat`
