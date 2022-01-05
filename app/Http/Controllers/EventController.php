<?php

use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\user;


class EventController extends Controller
{
    public function index(){   
        

        return view('index',['teachers2' => Teacher::all(), 'users2' => User::all()]);
    }

    public function busca(){
                 
        $search = request('search');

        if($search){
            $teachers = Teacher::where([
                ['city', 'like', '%'.$search.'%']

            ])->get();
        }
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
        
        return view('teacher.show', ['teacher' => $teacher, 'teachers2' => Teacher::all(), 'users2' => User::all()]);

    }

    public function destroy($id){
        Teacher::findorFail($id)->delete();

        return redirect('/')->with('msg', 'Perfil excluido com sucesso');
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

        Teacher::findorFail($request->id)->update($data);

        return redirect('/')->with('msg', 'Evento editado com sucesso');
    }
}