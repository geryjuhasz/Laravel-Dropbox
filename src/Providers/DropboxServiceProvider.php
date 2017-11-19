<?php

namespace Alorel\Dropbox\Providers;

use Illuminate\Support\ServiceProvider;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }

  public function boot()
  {
    $this->publishes([
          __DIR__ . '/../Config/dropbox-v2.php' => config_path('dropbox-v2.php'),
      ]);
  }
}
