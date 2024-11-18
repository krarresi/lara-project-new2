<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

        public function index(Request $request)
        {
    
      
            $applications = Application::all();
            return view('index', ['applications'=>$applications]);
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type' => 'required|in:Генеральная уборка,Уборка после ремонта,Уборка офиса',
            'date_time' => 'required|date|after:now',
            'address' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        Application::create([
            'user_id' => auth()->id(),
            'service_type' => $request->service_type,
            'date_time' => $request->date_time,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->route('applications.index')->with('success', 'Заявка успешно создана!');
    }

    public function create()
{
    return view('application'); 
}

}
