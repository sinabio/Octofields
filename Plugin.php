<?php namespace Eein\Octofields;

use System\Classes\PluginBase;

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

}
