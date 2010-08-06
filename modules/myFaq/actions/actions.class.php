<?php

/**
 * FAQ
 */
class myFaqActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->groups = myFaqItemTable::getInstance()->getGrouped();
  }
}
