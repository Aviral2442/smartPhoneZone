<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Session;

class AdminLoginController extends Controller
{
    public function adminRegister()
    {
        return view('AdminPanel.auth.adminRegister');
    }
    
    public function adminLogin()
    {
        return view('AdminPanel.auth.adminLogin');
    }

    public function adminRegisterSubmit(Request $request)
    {

        try {
            $validated = Validator::make($request->all(), [
                // 'profilePic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'r_adminName' => 'required|string|max:255',
                'r_adminEmail' => 'required|email',
                'r_adminPhoneNumber' => 'required|numeric',
                'r_adminPassword' => 'required|string|min:8',
            ]);

            // Validation Failure
            if ($validated->fails()) {
                $error = $validated->errors()->all();

                return response()->json([
                    'result' => 'Failed',
                    'status' => '1',
                    'Message' => $error[0],
                    "JSONData" => [],
                ]);
            } else {
                DB::beginTransaction();

                $data['adminName'] = $request->input('r_adminName');
                $data['adminEmail'] = $request->input('r_adminEmail');
                $data['adminPhoneNumber'] = $request->input('r_adminPhoneNumber');
                $data['adminPassword'] = $request->input('r_adminPassword');

                // $uniqueUsers = DB::table('admin')
                //     ->where('adminPhoneNumber', $data['adminPhoneNumber'])
                //     ->get();
                // if ($uniqueUsers) {
                //     return response()->json([
                //         'result' => 'Failed',
                //         'status' => '204',
                //         'Message' => 'User already exists',
                //     ]);
                // } else {
                    DB::table('admin')->insert($data);
                    DB::commit();
                // }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'result' => 'Failed',
                'status' => '500',
                'Message' => 'Internal Server Error',
            ]);
        }
    }

    public function adminLoginSubmit(Request $request){
        // dd($request->all());
        try{
            $validationData = Validator::make($request->all(),[
                'adminEmail' => 'required|email',
                'adminPassword' => 'required',
            ],[
                'adminEmail.email' => 'Please enter a valid email address.',
                'adminPassword.required' => 'The password field is required.',
            ]);

            if($validationData->fails()){
                return back()->withErrors($validationData)->withInput();
            }

            $conditions = [
                'adminEmail' => $request->post('adminEmail'),
                'adminPassword' => $request->post('adminPassword'),
            ];

            $authentication = DB::table('admin')->where($conditions)->first();
            
            if($authentication){
                Session::put('adminEmail', $authentication->adminEmail);
                return redirect()->route('dashboard');
            }else{
                // return back()->withErrors(['error' => 'Wrong credentials']);
                redirect()->route('admin.login')->with('error','Wrong credentials');
            }

        }catch(\Exception $e){
            return redirect()->back();

        }
    }

    public function getUsersEmail(){
        $users = DB::table('admin')->get();
        return response()->json($users);
    }

}
