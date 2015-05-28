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
            'description' => 'No description provided yet...',
            'author'      => 'Eein',
            'icon'        => 'icon-leaf'
        ];
    }

}
