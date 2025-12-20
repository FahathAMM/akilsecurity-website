<?php

namespace App\Http\Controllers\Site\Pages;

use App\Models\Contact\Contact;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepo;

class ServiceController extends Controller
{

    protected $modelName = 'Service';
    protected $routeName = 'service.index';
    protected $isDestroyingAllowed;
    protected $model;
    protected $repo;

    public function __construct(Contact $model, ContactRepo $repo)
    {
        $this->model = $model;
        $this->repo = $repo;
        $this->isDestroyingAllowed = true;
    }

    public function index()
    {
        DetectsUserEnvironment("Services", 'View');
        return view('site.service.index');
    }

    public function show($slug)
    {
        // Detects user environment
        DetectsUserEnvironment("Services Show", 'View');

        // Get all services from config
        $services = config('site.show_service');
        $servicesList = config('site.our_services.items');

        // Check if service exists
        if (!isset($services[$slug])) {
            abort(404);
        }

        // Get selected service data
        $service = $services[$slug];

        DetectsUserEnvironment("Services Show", 'View');

        return view('site.service.show', [
            'service' => $service,
            'servicesList' => $servicesList
        ]);
    }
}
