<?php

/**
 * PluginmyFaqItem form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyFaqItemForm extends BasemyFaqItemForm
{
    public function setup()
    {
        parent::setup();

        $choices = array_combine(sfConfig::get('app_faq_groups'), sfConfig::get('app_faq_groups'));
        $this->widgetSchema['group_name'] = new sfWidgetFormChoice(array('choices' => $choices));

        $this->embedI18n(array('ru', 'en'));
    }
}
