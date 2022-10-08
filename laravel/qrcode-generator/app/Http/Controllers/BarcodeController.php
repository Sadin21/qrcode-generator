<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class BarcodeController extends Controller
{
    public function index()
    {
        // $qrcode = new \SimpleSoftwareIO\QrCode\Generator;
        // $qr = $qrcode->size(500)->generate('Make a qrcode without Laravel!');
        $link = Link::all();
        return view('index', compact('link'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // $link = new Link;
        // $link->name = $request->name;
        // $link->link = $request->link;
        // $link->save();
        // return redirect()->route('index');
        $input = $request->all();

        Link::create($input);
        return redirect()->route('index');
    }
}
