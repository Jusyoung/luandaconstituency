<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:mp')->except('logout');
            $this->middleware('guest:mca')->except('logout');
            $this->middleware('guest:chief')->except('logout');
            $this->middleware('guest:subchief')->except('logout');
            $this->middleware('guest:student')->except('logout');
            $this->middleware('guest:resident')->except('logout');
    }

     public function showAdminLoginForm()
    {
        return view('auth.admin_login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        return redirect()->intended(route('admin-dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }

     public function showMpLoginForm()
    {
        return view('auth.mp_login', ['url' => 'mp']);
    }

    public function mpLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('mp')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        return redirect()->intended(route('mp-dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showMcaLoginForm()
   {
       return view('auth.mca_login', ['url' => 'mca']);
   }

   public function mcaLogin(Request $request)
   {
       $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required|min:6'
       ]);

       if (Auth::guard('mca')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        return redirect()->intended(route('mca-dashboard'));
       }
       return back()->withInput($request->only('email', 'remember'));
   }

   public function showChiefLoginForm()
  {
      return view('auth.chief_login', ['url' => 'chief']);
  }

  public function chiefLogin(Request $request)
  {
      $this->validate($request, [
          'email'   => 'required|email',
          'password' => 'required|min:6'
      ]);

      if (Auth::guard('chief')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        return redirect()->intended(route('chief-dashboard'));
      }
      return back()->withInput($request->only('email', 'remember'));
  }

  public function showSubChiefLoginForm()
 {
     return view('auth.subchief_login', ['url' => 'subchief']);
 }

 public function subchiefLogin(Request $request)
 {
     $this->validate($request, [
         'email'   => 'required|email',
         'password' => 'required|min:6'
     ]);

     if (Auth::guard('subchief')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

       return redirect()->intended(route('subchief-dashboard'));
     }
     return back()->withInput($request->only('email', 'remember'));
 }

 public function showStudentLoginForm()
{
    return view('auth.student_login', ['url' => 'student']);
}

public function subStudentLogin(Request $request)
{
    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);

    if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

      return redirect()->intended(route('student-dashboard'));
    }
    return back()->withInput($request->only('email', 'remember'));
}

public function showResidentLoginForm()
{
   return view('auth.resident_login', ['url' => 'resident']);
}

public function subResidentLogin(Request $request)
{
   $this->validate($request, [
       'email'   => 'required|email',
       'password' => 'required|min:6'
   ]);

   if (Auth::guard('resident')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

     return redirect()->intended(route('resident-dashboard'));
   }
   return back()->withInput($request->only('email', 'remember'));
}
}