<?php

namespace App\Http\Controllers;

use App\Http\Requests\SanitizeRequest;

class RequestSanitizedController extends Controller
{


    public function sanitize(SanitizeRequest $request)
    {
        return [
            'name' => $request->get('name')
        ];
    }
}
