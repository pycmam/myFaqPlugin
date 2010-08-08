<?php

/**
 * FAQ
 */
class myFaqActions extends sfActions
{
    /**
     * Список вопросов сгруппированых по разделам
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->groups = myFaqItemTable::getInstance()->getGrouped();
    }
}
