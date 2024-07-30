<?php

namespace App\Providers;

use Astrotomic\Stancy\Contracts\ExportFactory as ExportFactoryContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\OpeningHours\OpeningHours;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->booted(function (): void {
            $this->app->call([$this, 'booted']);
        });

        View::share('openingHours', OpeningHours::create([
            'monday'     => [],
            'tuesday'    => ['09:00–12:00', '14:00–18:00'],
            'wednesday'  => ['09:00–12:00', '14:00–18:00'],
            'thursday'   => ['09:00–12:00', '14:00–18:00'],
            'friday'     => [],
            'saturday'   => [],
            'sunday'     => [],
            'exceptions' => [],
        ]));
    }

    public function booted(ExportFactoryContract $exportFactory): void
    {
        $exportFactory->addSheetCollectionName('static');
    }
}
