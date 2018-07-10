<?php

namespace Martin\EmptyPlugin;

use App;

class Plugin extends \System\Classes\PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'Empty Plugin',
            'description' => 'Just an empty plugin to accelerate your projects.',
            'author'      => 'Martín M.',
            'icon'        => 'icon-space-shuttle',
            'homepage'    => 'https://github.com/skydiver'
        ];
    }

    public function boot() {
        // if (class_exists(SomeServerServiceProvider::class)) {
        //     App::register(SomeServerServiceProvider::class);
        // }
    }

}