<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;
use Request;
use App\Http\Requests;

//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Session;

class UsersController extends Controller {
    /*
     * 
     */

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     *
     */
    public function create() {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\UsersRequest $request) {

        //$input = Request::all();
        //User::create($input);

        $request['password'] = bcrypt($request['password']);
        User::create($request->all());

        Session::flash('flash_message', 'User has been created!');
        return redirect('users');
    }

    public function store_old() {

        //Validation rules
        $rules = $this->rules();
        $messages = $this->messages();

        //Validate
        //$validator = Validator::make(Input::all(), $rules, $messages);
        $validator = Validator::make(Input::all(), $rules);

        //$validator->passes()
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else { //Ok to save
            $post = Input::all();

            $insertData = array(
                'username' => $post['username'],
                //'phone' => empty($post['phone']) ? null : $post['phone'],
                'email' => $post['email'],
                //'password' => Hash::make(Hash::make(Input::get('password')))  // Class 'App\Http\Controllers\Hash' not found
                'password' => bcrypt($post['password'])
            );

            try {
                $result = User::create($insertData);
                $insert_id = $result->contact_id; //get last inserted id
                if ($result) {
                    return Redirect::back()->with('message', 'Record Inserted Successfully : insert_id = ' . $insert_id);
                } else {
                    return Redirect::back()->with('message', 'Something was wrong !');
                }
            } catch (\Exception $e) {
                //var_dump($e->errorInfo);
                return Redirect::back()->with('message', 'Sorry something went worng. Please try again.')->withInput();
            }
        }
        //return redirect('users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'username' => 'required|min:3|max:15',
            'email' => 'required|email|max:45|unique:users',
            'password' => 'required|min:6|confirmed'
        ];
    }

    /*
     * 
     */

    public function messages() {
        return [
            'username.required' => 'The Username is required.',
            'email.required' => 'The Last Name is required.',
            'password.alpha' => 'The Last Name may only contain letters.'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {

        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $user = User::findOrFail($id);

        $user->delete();
        
        Session::flash('flash_message', 'User has been deleted!');
        //Session::flash('flash_message_important', true);
         //Session::flash('error', 'The old password is incorect');
        
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update($id) {
        //dd($id);
        $user = User::findOrFail($id);
        
        //dd($user->users_id);

        $rules = $this->rules_update($user->users_id);
        //$messages = $this->messages_update();
        
        //$validator = Validator::make(Input::all(), $rules, $messages);
        $validator = Validator::make(Request::all(), $rules);
        
        //$validator->passes()
        if ($validator->fails()) {
            //return Redirect::to("/users/$id/edit")->withInput()->withErrors($validator);
            return back()->withErrors($validator)->withInput();
        }
        else {
           $user->update(Request::all());
           
           Session::flash('flash_message', 'User has been updated!');
           //return Redirect::to('users');
           return redirect('users');
        }
        
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules_update($users_id) {
        return [
            'username' => 'required|min:3|max:15',
            'email' => 'required|email|max:45|unique:users,email, '.$users_id.',users_id'   
        ];
    }

    /*
     * 
     */

    public function reset_password($id) {

        $user = User::findOrFail($id);
        //dd($user);
        
        return view('users.reset_password', compact('user'));
    }
    /*
     * Update password
     */
    public function update_password($id) {
        $user = User::findOrFail($id);

        $rules = array(
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        );
        
        $validator = Validator::make(Request::all(), $rules);
        if ($validator->fails()) {
            //return Redirect::to("/users/$id/edit")->withInput()->withErrors($validator);
            return back()->withErrors($validator)->withInput();
        }
        
        else {
            
           $password = bcrypt(Request::get('password'));
           $user->update(['password' => $password]);
           //return Redirect::to('users');
           //return redirect('users');
           
           //Session::flash('flash_message', 'Password has been reseted!');
           flash()->info('Password has been reseted!');
           
           return view('users.reset_password', compact('user'));
        }
    }

}
