<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\User;


class EventController extends Controller
{
    public function index(){   
        

        return view('index',['teachers2' => Teacher::all(), 'users2' => User::all()]);
    }

    public function busca(){
                 
        $search = request('search');

        if($search){
            $teachers = Teacher::where([
                ['city', 'ILIKE', '%'.$search.'%']

            ])->get();
            if(count($teachers)==0){
                $teachers = Teacher::where([
                ['instruments', 'ILIKE', '%'.$search.'%']

            ])->get();
            if($teachers == "Violão" || $teachers == "violão"){
                $teachers = "Violao";
            }    
        }}
        
        else {
            $teachers = Teacher::all();
        }
        return view('busca',['teachers' => $teachers, 'search' => $search, 'teachers2' => Teacher::all(), 'users2' => User::all()]);
    }

    public function create(){
        return view('teacher.create');
    }


    // Store
    public function store(Request $request){

        $teacher = new Teacher;

        $teacher->city = $request->city;
        $teacher->instruments = $request->instruments;
        $teacher->class = $request->class;
        $teacher->prices = $request->price;
        $teacher->addprices = $request->addprices;
        $teacher->state = $request->state;


        //biography null
        if($request->biography == NULL){
            $teacher->biography = "Nada especificado";
        }
        else{
            $teacher->biography = $request->biography;
        }
        //addprices null
        if($request->addprices == null){
            $teacher->addprices = "null";
        }
        else{
            $teacher->addprices = $request->addprices;
        }
        //image upload
        if($request->hasfile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            $extention = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extention;

            $request->image->move(public_path('img/teachers'), $imageName);
            $teacher->image = $imageName;
        }
        else{
            $teacher->image = "perfil.png";
        }

        $user = auth()->user();
        $teacher->user_id = $user->id;
        $teacher->name = $user->name;

        $teacher->save();

        return redirect('/');

    }

    // Modules

    public function modules(){
        
        return view('modules', ['teachers2' => Teacher::all(), 'users2' => User::all()]);
    }
    

    // Show
    public function show($id){
        $teacher = Teacher::findorFail($id);

        $teacherName = User::where('id', $teacher->user_id)->first()->toArray();
        
        return view('teacher.show', ['teacher' => $teacher, 'teacherId' => $teacherName]);

    }

    public function showUser($id){
        $user = User::findorFail($id);
        
        return view('teacher.show', ['teacher' => $teacher, 'teacherId' => $teacherName]);

    }

    public function destroy($id){
        Teacher::findorFail($id)->delete();

        return redirect('/');
    }

    public function edit($id){

        $teacher = Teacher::findorFail($id);

        return view('teacher.editar', ['teacher' => $teacher]);
    }

    public function update(Request $request){

        $data = $request->all();

        if($request->hasfile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            $extention = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extention;

            $request->image->move(public_path('img/teachers'), $imageName);

            $data['image'] = $imageName;

        }
        else{
                $data['image'] = "perfil.png";
            
        }
        if($request->addprices == "null"){
            $data['addprices'] = null;
        }

        Teacher::findorFail($request->id)->update($data);

        return redirect('/');
    }
}