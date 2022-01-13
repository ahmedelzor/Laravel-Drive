<?php

namespace App\Http\Controllers;

use App\Drive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user =auth()->user()->id;
        $drives = Drive::where("usersid" , "=" , $user)->get();
        return view('drives.index')->with("drives" , $drives );
    }

    
    public function create()
    {
        return view('drives.create');
    }

    
    public function store(Request $request)
    {
        if ( auth()->user()->role == 1 ){
        $request->validate([
          "title"       => 'required',
          "descripition"=> 'required|min:5|max:50',
          "inputfile"   => 'required|file|max:50000|mimes:png,jpg,pdf',
        ]);
        
        $drive = new Drive();
        $drive->title = $request->title;
        $drive->descripition = $request->descripition;
        // upload file code

        $file_data = $request->file('inputfile');
        $file_name = $file_data->getClientOriginalName();
        $file_data->move(public_path() . '/upload/' , $file_name);

        // ###########################

        $drive->file = $file_name;
        $drive->usersid =auth()->user()->id;
        $drive->save();
        return redirect('drives')->with('done' , "Uploaded Succeessfuly");
    }

}
    public function show($id)
    {
        $drive = Drive::find($id);
        return view('drives.show')->with('drive' , $drive);
    }

    
    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            "title"       => 'required',
            "descripition"=> 'required|min:5|max:50',
            "inputfile"   => 'required|file|max:50000|mimes:png,jpg,pdf',
          ]);
  
          $drive = Drive::find($id);
          $drive->title = $request->title;
          $drive->descripition = $request->descripition;
          // upload file code
  
          $file_data = $request->file('inputfile');
          $file_name = $file_data->getClientOriginalName();
          $file_data->move(public_path() . '/upload/' , $file_name);
  
          // ###########################
  
          $drive->file = $file_name;
          $drive->save();
          return redirect('drives')->with('done' , "Uploaded Succeessfuly");
    }

    public function destroy($id)
    {
        $drive = Drive::find($id);
        $drive->DELETE();
          return redirect('drives')->with('done' , "Remove Succeessfuly");
    }

    public function download($id)
    {
        $drive = Drive::where("id" , "=" , $id)->firstOrFail();
        $drive_path = public_path('upload/' . $drive->file);
        return response()->download($drive_path);
    }
}
