Feature: FEATURE NAME
  In order to successfully test the site
  As a developer
  I need to be able to setup and run behat tests

  @javascript
  Scenario: Home
    Given I am on "/"
    Then I should see "Home" in the "Header" region
