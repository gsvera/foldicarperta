<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Mail\ContactosMail;
use Illuminate\Support\Facades\Mail;

class ViewController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nosotros(){
        return view('nosotros');
    }
    public function copiadoras(){
        return view('copiadoras');
    }
    public function impresoras(){
        return view('impresoras');
    }
    public function multifuncionales(){
        return view('multifuncionales');
    }
    public function serviciosadministrados(){
        return view('serviciosadministrados');
    }
    public function gracias(){
        return view('gracias');
    }
    public function avisoprivacidad(){
        return view('avisoprivacidad');
    }
    public function usocookies(){
        return view('usocookies');
    }
    public function contacto(){
        return view('layouts.app');
    }
    public function sendMail(Request $request){

        if($request->name == '' || $request->email == '' || $request->tel == '' || $request->message == ''){
            $_SESSION['viewDiv'] = 'view';
            return back()->with('messageError','Debe llenar los campos obligatorios *');
        }
        
        $datos=["nameContact"=>$request->name,
                "email"=>$request->email,
                "tel"=>$request->tel,
                "machine"=>$request->machine,
                "message"=>$request->message];
        try{
            Mail::send('viewMail.sends',['item'=>$datos],function($mensaje){
                $mensaje->to("xalvarez@foldio.mx")->subject("Solicitud de información");  
            });
            }catch(phpmailerException $e){
                dd($e);
            }catch(Exception $e){
                dd($e);
            }
        
       
        return view('gracias');
    }
}
