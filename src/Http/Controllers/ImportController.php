<?php

namespace Dchymko\RwgpsImporter\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Statamic\CP\Breadcrumbs;
use Statamic\Http\Controllers\CP\CpController;


class ImportController extends CpController
{

    public function index()
    {

        return view('importer::index', []);
    }
}