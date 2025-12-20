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
}
