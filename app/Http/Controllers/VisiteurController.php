<?php

namespace App\Http\Controllers;

use App\Exceptions\MonException;
use Illuminate\Support\Facades\Session;
use Request;
use Illuminate\Support\Facades\Input;
use App\metier\Visiteur;
use Exception;
use App\dao\ServiceVisiteur;

class VisiteurController extends Controller
{
    public function getLogin()
    {
        try {
            $monErreur = "";
            return view('vues/formLogin', compact('monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        }
    }

    public function signIn()
    {
        try {
            $login = Request::input("login");
            $pwd = Request::input("pwd");
            $unVisiteur = new ServiceVisiteur();
            $connected = $unVisiteur->login($login, $pwd);

            if ($connected) {
                    return view('home');
            } else {
                $monErreur = "Login ou mot de passe inconnu";
                return view('vues/formLogin', compact('monErreur'));
            }
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/formLogin', compact('monErreur'));
        }
    }

    public function signOut(){
        $unVisiteur = new ServiceVisiteur();
        $unVisiteur->logout();
        return redirect('/');
    }
}
