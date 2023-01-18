<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\Chief;
use App\Models\Mca;
use App\Models\Mp;
use App\Models\Photo;
use App\Models\Resident;
use App\Models\Student;
use App\Models\SubChief;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:mp');
        $this->middleware('guest:mca');
        $this->middleware('guest:chief');
        $this->middleware('guest:subchief');
        $this->middleware('guest:resident');
        $this->middleware('guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function admin_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function mp_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mps',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function mca_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mcas',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function chief_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:chiefs',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function subchief_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:sub_chiefs',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function student_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    protected function resident_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:residents',
            'password' => 'required|string|min:6|confirmed',
            'photo' => ['required'],
        ]);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminRegisterForm()
    {
        return view('auth.admin_register', ['url' => 'administrator-entry-gate']);
    }
    public function showMpRegisterForm()
    {
        return view('auth.mp_register', ['url' => 'mp-entry-gate']);
    }
    public function showMcaRegisterForm()
    {
        return view('auth.mca_register', ['url' => 'mca-entry-gate']);
    }
    public function showChiefRegisterForm()
    {
        return view('auth.chief_register', ['url' => 'chief-entry-gate']);
    }
    public function showSubChiefRegisterForm()
    {
        return view('auth.subchief_register', ['url' => 'subchief-entry-gate']);
    }
    public function showStudentRegisterForm()
    {
        return view('auth.student_register', ['url' => 'student-entry-gate']);
    }
    public function showResidentRegisterForm()
    {
        return view('auth.resident_register', ['url' => 'resident-entry-gate']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createAdmin(Request $request)
    {
        $this->admin_validator($request->all())->validate();
        // saving photo and returning id
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);
        $admin = Admin::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo_id' => $photo->id,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-administrator'));
    }
    protected function createMp(Request $request)
    {
        $this->mp_validator($request->all())->validate();
        // saving photo and returning id
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);
        $mp = Mp::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo_id' => $photo->id,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-mp'));
    }
    protected function createMca(Request $request)
    {
        $this->mca_validator($request->all())->validate();
        // saving photo and returning id
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);
        $mca = Mca::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo_id' => $photo->id,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-mca'));
    }
    protected function createChief(Request $request)
    {
        $this->chief_validator($request->all())->validate();
        // saving photo and returning id
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);
        $chief = Chief::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo_id' => $photo->id,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-chief'));
    }
    protected function createSubChief(Request $request)
    {
        $this->subchief_validator($request->all())->validate();
        // saving photo and returning id
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        $photo = Photo::create(['file'=>$name]);
        $subchief = SubChief::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo_id' => $photo->id,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-subchief'));
    }
    protected function createResident(Request $request)
    {
        $this->resident_validator($request->all())->validate();
        $resident = Resident::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-resident'));
    }
    protected function createStudent(Request $request)
    {
        $this->student_validator($request->all())->validate();
        $student = Student::Create( 
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]
        );
        return redirect()->intended(route('login-student'));
    }
}