<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    // 検証コード
    public function index(Request $request, Response $response) {
        $html = <<< EOF
            <html>
                <head>
                    <title>Hello/Index</title>
                </head>
                <body>
                    <h1>Hello</h1>
                    <h3>Request</h3>
                    <pre>{$request}</pre>
                    <h3>Response</h3>
                    <pre>{$response}</pre>
                    <p>This is hello page.</p>
                </body>
            </html>
        EOF;
        $response->setContent($html);
        return $response;
    }
}
