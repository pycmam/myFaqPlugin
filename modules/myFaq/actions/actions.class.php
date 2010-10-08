<?php

/**
 * FAQ
 */
class myFaqActions extends myActions
{
    /**
     * Список вопросов сгруппированых по разделам
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->addBreadcrumb('FAQ', 'myFaq');

        $this->groups = myFaqItemTable::getInstance()->getGrouped();
    }
}
