<?php

use Behat\Behat\Context\ClosuredContextInterface,
  Behat\Behat\Context\TranslatedContextInterface,
  Behat\Behat\Context\BehatContext,
  Behat\Behat\Event\ScenarioEvent,
  Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
  Behat\Gherkin\Node\TableNode;
use Drupal\DrupalExtension\Context\DrupalContext;
use Drupal\Component\Utility\Random;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends DrupalContext {

  /**
   * @Given /^I am on a mobile device$/
   */
  public function iAmOnAMobileDevice() {
    $session = $this->getSession();
    $page = $session->getPage();
    $navbarToggle = $page->find('css', '.navbar-toggle');
    if ($navbarToggle === null) {
      throw new \LogicException('Could not find the element');
    }
    if ($navbarToggle->isVisible()) {
      return TRUE;
    }
  }

  /**
   * @Given /^I expand the responsive menu$/
   */
  public function iExpandTheResponsiveMenu() {
    $session = $this->getSession();
    $page = $session->getPage();
    $navbarToggle = $page->find('css', '.navbar-toggle')->click();
  }
}
