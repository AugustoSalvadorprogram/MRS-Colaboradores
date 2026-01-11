<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Cursos;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Symfony\Component\ErrorHandler\BufferingLogger;

class EventController extends Controller
 {
    public function index()
    {
        $id = "Coursos";
        $search = Request('search');
        if ($search) {
            $limits = Courses::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        }else {
            $Courses = Courses::All();
            $limits = $Courses->take(3);
        }        
        return view('index', ['limits' => $limits, 'id' => $id], ['search' => $search]);
    }

    public function user(){
        return view('/user');
    }
 
    
    // public function register()
    // {
    //     return view('/register');
    // }

    // public function registerSubmit(Request $request)
    // {
    //     // Lógica de autenticação aqui
    //     $Student = new Students();
    //     $Student->id = $request->id;
    //     $Student->name = $request->name;
    //     $Student->email = $request->email;
    //     $Student->password = $request->password;       

    //     $Student->save();
    //     return redirect('/login')->with('success', 'Registro realizado com sucesso! Agora faça o login.');
        
        
    //     // Exemplo simples de autenticação (substitua pela lógica real)
        
    // }

    //public function log()
    // {
    //     return view('/login');
    // }

    // public function loginSubmit(Request $request)
    // {
    //     // Lógica de autenticação aqui
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     // Exemplo simples de autenticação (substitua pela lógica real)
    //     $user = Students::where('email', $email)->where('password', $password)->first();

    //     if ($user) {
    //         // Autenticação bem-sucedida
    //         return redirect('/')->with('success', 'Login realizado com sucesso!');
    //     } else {
    //         // Falha na autenticação
    //         return redirect('/login')->with('error', 'Credenciais inválidas. Tente novamente.');
    //     }
    // }
    
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }
    // public function showdashboard($id)
    // {        
    //     $Courses = Courses::findOrFail($id);
    //     return view('showdashboard', ['Courses' => $Courses]);
    // }

    public function addcourse()
    {
        $Courses = Courses::All();
        return view('/addcourse', ['Courses' => $Courses]); 
        /* composer require laravel/jetstream 
           php artisan jetstream:install livewire  
        */
    }

    public function show($id)
    {
        $Courses = Courses::findOrFail($id);
        $Students = Students::all();
        return view('show', ['Courses' => $Courses], ['Students' => $Students]);
    }

    public function addcourseSubmit(Request $request)
    {
        // Lógica de autenticação aqui
        $Course = new Courses();
        $Course->id = $request->id;
        $Course->title = $request->title;
        $Course->description = $request->description;
        $Course->instructor = $request->instructor;
        $Course->date = $request->date;       
        $Course->duration = $request->duration;   
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName  = md5($request->image->getClientOriginalName().strtotime("now")) . "." . $extension;
            $request->image->move(public_path('images/courses/'), $imageName);
            $Course->image = $imageName;
        }

        $Course->save();
        return redirect('/addcourse')->with('msg', 'Curso adicionado com sucesso!');
        
        
        // Exemplo simples de autenticação (substitua pela lógica real)
        
    }
    
    public function addaula($id){
        $Courses = Courses::findOrFail($id);
        return view('/addaula', ['Courses' => $Courses]);
    }
    
    public function editcourse($id){
        $Courses = Courses::findOrFail($id);
        return view('/editcourse', ['Courses' => $Courses]);
    }

    public function update(Request $request){
        //
        $data = $request->All();
        Courses::findOrFail($request->id)->update($request->All($data));
        return redirect('/addcourse')->with('msg', 'Curso Editado com sucesso!');
    }
    
    public function destroy($id){
        Courses::findOrFail($id)->delete();
        return redirect('/addcourse')->with('msg', 'Curso Eliminado com Sucesso');
    }
    
    public function screencourse($id){
        $Courses = Courses::findOrFail($id);
        return view('/screencourse', ['Courses' => $Courses]);
    }

    public function courses(){
        $Courses = Courses::All();
        return view('/courses', ['Courses' => $Courses]);
    }

    public function video(){
        return view('/video');
    }

}
