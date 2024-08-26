<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function adminProfileDetails(){
        return view('AdminPanel.adminProfile');
    }

    public function adminActiveDetails()
{
    // Retrieve the admin email from the session
    $adminEmail = session('adminEmail');
    
    // Check if the session has the admin email
    if (!$adminEmail) {
        // Handle the case where no admin email is stored in the session
        return redirect()->route('admin.login')->with('error', 'Session expired or invalid access.');
    }

    // Query the admin table to get the admin details using the email from the session
    $adminDetails = DB::table('admin')->where('adminEmail', $adminEmail)->first();
    
    // Check if the admin exists in the database
    if (!$adminDetails) {
        // Handle the case where no matching admin is found in the database
        return redirect()->route('admin.login')->with('error', 'Admin not found.');
    }

    // Return the admin details or use them as needed
    return view('AdminPanel.adminProfile', ['adminDetails' => $adminDetails]);
    // return view('AdminPanel.adminProfile', compact($adminDetails));
}

}
