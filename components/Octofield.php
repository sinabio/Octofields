<?php namespace Eein\Octofields\Components;

use Cms\Classes\ComponentBase;

class Octofield extends ComponentBase
{

    public $value;
    public $type;
    public $fieldLabel;
    public $options;

    public function componentDetails()
    {
        return [
            'name'        => 'Custom Field',
            'description' => $this->getRandomQuote()
        ];
    }

    public function defineProperties()
    {
        return [
          'label' => [
            'title'   => 'Label',
            'type'    => 'string'
          ],
          'type' => [
              'title'             => 'Field Type',
              'description'       => 'The Type of field you want to use.',
              'default'           => 'text',
              'type'              => 'dropdown',
              'showExternalParam' => 'false',
              'options' => [
                'text'    => 'Text',
                'number'  => 'Number'
                // 'textarea' =>'Textarea',
                // 'richtext' =>'Richtext',
                // 'dropdown' =>'Dropdown',
                // 'checkbox' =>'Checkbox',
                // 'checkboxlist' =>'Checkbox List',
                // 'codeeditor' =>'Code Editor',
                // 'markdown' =>'Markdown',
                // 'hint' =>'Hint',
                // 'switch' =>'Switch',
                // 'balloon' =>'Balloon Select',
                // 'password'=> 'Password / Key'
              ]
          ]
        ];


    }

    public function onRun()
    {

      $this->type = e($this->property('type', 'text'));

    }
/*
    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
    ░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
    ░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
    ░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
    ░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
    ░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
    ░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
    ░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
    ░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
    ░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
    ░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
    ░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
    ░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
*/
    /**
     * Returns a random quote
     */
    private function getRandomQuote()
    {
      $quotes = [
          'Too easy...',
          'Just drag and exhale...',
          'Liking October so far?',
          'This could be more complicated, but its not.',
          'Expecting it to be harder?',
          'Wow, this is alot of code you didn\'t have to write...',
          'Custom Plugins for every custom field? I think not.',
          'They might need to make the components area smaller.',
          'Front flipping off the easy button.',

      ];
      $lotto = array_rand($quotes);
      return $quotes[$lotto];
    }

}
