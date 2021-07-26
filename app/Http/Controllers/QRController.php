<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;

class QRController extends Controller
{
    public function generateQrCode() 
    {
        \QrCode::size(500)
            ->format('png')
            ->generate('codingdriver.com', public_path('images/qrcode.png'));
    
    return view('qr-code');
    }
}
