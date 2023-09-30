<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
//        dd($user);
        return view('auth.profile')->with('user',$user);
    }

    public function profileEdit()
    {
        $user = Auth::user();
//        dd($user);
        return view('auth.profile_edit')->with('user',$user);
    }

    public function profileStore(Request $request)
    {

        $newUser = Auth::user();
        $newUser->name = $request->name;
        $newUser->last_name = $request->last_name;
        $newUser->gender = $request->gender;
        $newUser->email = $request->email;
        $newUser->mobile = $request->mobile;
        $newUser->address = $request->address;
        $newUser->bio = $request->bio;

        if($request->image)
        {
            $newUser->image = $request->image;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('users/'), $filename);
                $newUser['image']= $filename;
            }
            $newUser->image = $newUser['image']= $filename;
        }
        $newUser->save();

        return redirect()->back()->with('success','Profile updated successfully!');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect("/login")->with('success', 'Registration successful!');
    }

    public function SignOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
