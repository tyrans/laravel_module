<?php

namespace Tyrans\Framework\Http;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller {

    use JsonResponseSupport, AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
