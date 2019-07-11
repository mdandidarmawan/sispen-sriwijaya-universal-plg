<?php

namespace App\Http\Controllers\Auth;

use App\Pengguna;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $data['kelasKategori'] = \App\KelasKategori::orderBy('kkategori_nama')->get();

        return view('auth.register', compact('data'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pengguna_nama' => ['required', 'string', 'max:255'],
            'pengguna_email' => ['required', 'string', 'email', 'max:255', 'unique:pengguna'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'pengguna_nik' => ['required', 'string', 'min:16', 'max:16', 'unique:pengguna'],
            'pengguna_tempat_lahir' => ['required', 'string', 'max:255'],
            'pengguna_tanggal_lahir' => ['required', 'date'],
            'pengguna_jk' => ['required', 'integer', 'max:2'],
            'pengguna_alamat' => ['required', 'string', 'max:255'],
            'pengguna_telepon' => ['required', 'string', 'max:14'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Pengguna
     */
    protected function create(array $data)
    {
        return Pengguna::create([
            'pengguna_nama' => $data['pengguna_nama'],
            'pengguna_email' => $data['pengguna_email'],
            'pengguna_password' => Hash::make($data['password']),
            'pengguna_nik' => $data['pengguna_nik'],
            'pengguna_tempat_lahir' => $data['pengguna_tempat_lahir'],
            'pengguna_tanggal_lahir' => date('Y-m-d', strtotime($data['pengguna_tanggal_lahir'])),
            'pengguna_jk' => $data['pengguna_jk'],
            'pengguna_alamat' => $data['pengguna_alamat'],
            'pengguna_telepon' => $data['pengguna_telepon'],
        ]);
    }
}
