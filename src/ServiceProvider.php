<?php

namespace Dchymko\RwgpsImporter;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\Utility;
use Dchymko\RwgpsImporter\Http\Controllers\ImportController;

class ServiceProvider extends AddonServiceProvider
{
    public function bootAddon()
    {

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'importer');

        Utility::extend(function () {
            Utility::register('importer')
                ->title(__('Importer'))
                ->description("Ride With GPS Importer")
                ->icon('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m4.5 8.5 9.5 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m4.5 11.5 6 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m4.5 5.5 7 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m4.5 14.5 4 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m4.5 17.5 4 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="M10.5 23.5h-9a1 1 0 0 1 -1 -1v-21a1 1 0 0 1 1 -1h13.293a1 1 0 0 1 0.707 0.293L19.207 4.5a1 1 0 0 1 0.293 0.707V8.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="M11.5 17.5a6 6 0 1 0 12 0 6 6 0 1 0 -12 0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m17.5 14.5 0 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m17.5 20.5 -2.25 -2.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m17.5 20.5 2.25 -2.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></svg>')
                ->action([ImportController::class, 'index'])
                ->routes(function ($router) {
                    $router->post('/', [ImportController::class, 'store'])->name('store');
                    $router->get('{import}', [ImportController::class, 'edit'])->name('edit');
                });
        });
    }
}
