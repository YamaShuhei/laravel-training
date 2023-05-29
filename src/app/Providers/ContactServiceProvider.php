<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;
use App\Services\ContactService;
use App\Services\ContactServiceInterface;

class ContactServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    $this->app->bind(ContactServiceInterface::class, ContactService::class);
  }
}