<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\droit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Affiche la page de connexion
    public function index()
    {
        // Vérifie si l'utilisateur est déjà connecté
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }

        return view('login');
    }

    // Affiche la page de réinitialisation de mot de passe
    public function indexpassword_reset()
    {
        return view('password_reset');
    }

    // Vérifie les informations de connexion et authentifie l'utilisateur
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user= Auth::user();
            $id = $user->id;
            $grade = droit::where('id_user', $id)->first()->grade;
            if($grade==1){
            return redirect()->intended('dashboard');
            }elseif($grade==2){
                return redirect()->intended('dashboard');
            }else{
             return redirect()->intended('dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ])->withInput($request->only('email'));
    }

    // Affiche le dashboard de l'utilisateur
    public function dashboard()
    {
        // Vérifie si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect('/');
        }

        // Récupère l'utilisateur connecté
        $user = Auth::user();

        // Affiche la vue du dashboard avec les informations de l'utilisateur
        return view('dashboard', ['user' => $user]);
    }

    public function find_mail(Request $request)
    {
        dd($request);
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Cet email n\'existe pas');
        }

        // Envoi de l'email
        Mail::to($user->email)->send(new VerificationEmail($user));

        return redirect('/user/verify_mail')->with('success', 'Compte enregistré avec succès. Veuillez vérifier votre email pour continuer.');
    }

    // Réinitialise le mot de passe de l'utilisateur
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Votre adresse mail n\'existe pas.',
            ])->withInput($request->only('email'));
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->intended('dashboard');
    }

    // Affiche la page d'inscription
    public function inscription()
    {
        return view('inscription');
    }

    // Traite les données d'inscription
 public function register(Request $request)
{
    $request->validate([
        'Prenom' => ['required'],
        'Nom' => ['required'],
        'email' => ['required', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:8', 'max:255', 'confirmed'],
        'Telephone' => ['required', 'size:10',"unique:users"],
    ]);

    $user = User::create([
        'Prenom' => $request->Prenom,
        'Nom' => $request->Nom,
        'email' => $request->email,
        'Telephone' => $request->Telephone,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/user/attribution')->with([
        'success' => 'Compte enregistré avec succès.',
        'user' => $user,
    ]);
}

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Appel de la page attribution après la création du compte
    public function attribution()
    {
        return view('attribution');
    }
}
