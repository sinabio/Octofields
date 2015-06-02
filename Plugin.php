<?php namespace Eein\Octofields;

use System\Classes\PluginBase;
use Event;
/**
 * Octofields Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Octofields',
            'description' => 'Template Variables for OctoberCMS',
            'author'      => 'Eein',
            'icon'        => 'icon-heart'
        ];
    }
    public function registerComponents()
    {
      return [
        'Eein\Octofields\Components\Octofield' => 'octofield'
      ];
    }
    public function boot()
    {

      // Set Fields

      $fields = [
         'settings[bannerImage]' => [
              'tab'   => 'Test',
              'label' => 'Banner Image',

          ]
        ];

      // Add fields without viewbag component
      Event::listen('backend.form.extendFields', function ($form) use ($fields){

        // Form Dump
        dump($form);


        foreach($fields as $key=>$value){
          $form->tabs['fields'][$key] = $value;
        }
      });

    }

}
