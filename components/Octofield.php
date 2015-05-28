<?php namespace Eein\Octofields\Components;

use Cms\Classes\ComponentBase;

class Octofield extends ComponentBase
{

    public $value;
    public $type;
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
          'type' => [
              'title' => 'Field Type',
              'description' => 'The Type of field you want to use.',
              'default' => 'text',
              'type' => 'dropdown',
              'options' => [
                'text' => 'text',
                'select' => 'select',

              ]
            ]
        ];
    }

    public function onRun()
    {
      $this->image = $this->page->settings['bannerImage'];
      $this->alt = $this->page->settings['bannerAlt'];
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
          'Drag to your right and exhale...',
          'Liking October so far?',
          'This could be more complicated, but its not.',
          'Expecting it to be harder?',
          'Wow, this is alot of code you didn\'t have to write...',
          'Custom Plugins for every custom field? I think not.',
          'They might need to make the components area smaller.',
          'Front flipping off the easy button.',
          'Click and drag that way -->'
      ];
      $lotto = array_rand($quotes);
      return $quotes[$lotto];
    }

}
