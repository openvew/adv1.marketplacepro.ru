<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    { 
			$collection=User::orderBy("created_at","desc")->paginate(20);
			$params=["collection"=>$collection];
            return view('users.index',$params);
    }

    public function create(){
		return view('users.create');
	}
	public function store(Request $request){
		//var_dump($request->toArray()); die();
		//$message=__('users.CreatedUser', ['name' => "Валентин"]);
		//echo $message ; die();
	    $rules=[
		'name' => 'required|string|min:5',
		'email' => 'required|string|email|max:255|unique:users,email',
		'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:8'
		];
		//$message="Данные удачно сохранились! Пароль успешно изменён. Новый пароль: $password ";
		
		$validator=Validator::make(
		$request->toArray(),$rules
		);
		if($validator->fails()){
			 //var_dump($validator->errors()->toArray()); die();
		     return back()->withErrors($validator)->withInput();
		}
		$user=new User;
		$user->name=$request->input('name');
		$user->email=$request->input('email');
		//$user->avatar=$request->input('filepath');
	    $user->password=bcrypt(trim($request->input('password')));
		$user->save();
		$message=__('user.CreatedUser', ['name' => $user->name]);
                return redirect()->route('users.index', ['id' => $user->id])->with('message_success',$message);
	}
    public function view($id){
		$user =  User::findOrFail($id);
		
		return view('users.view',["user"=>$user]);
	}	
}
