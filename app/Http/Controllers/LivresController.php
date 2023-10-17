<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Session;
use App\metier\Livres;
use Exception;
use App\Exceptions\MonException;
use App\dao\ServiceLivres;

class LivresController extends Controller
{
    public function listerLivres()
    {
        $unLivreService = new ServiceLivres();
        try {
            $mesLivres = $unLivreService->getListeLivres();
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        if (Session::get('id') > 0) {
            return view('vues/formLivresLister', compact('mesLivres'));
        } else {
            return redirect('/');
        }

    }

    public function postAjouterLivres()
    {
        try {
            $titre = Request::input("titre");
            $auteur = Request::input("auteur");
            $genre = Request::input("genre");

            $unLivreService = new ServiceLivres();
            $unLivreService->ajoutLivres($titre, $auteur, $genre);
            return view("home");
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact("monErreur"));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }

    }

    public function modifier($id)
    {
        try {
            $unLivreService = new ServiceLivres();
            $unLivre = $unLivreService->getLivres($id);
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
        if (Session::get('id') > 0) {
            return view('vues/formLivresModifier', compact('unLivre'));
        } else {
            return redirect('/');
        }
    }

    public function postmodificationlivre($id = null)
    {
        $code = $id;
        $titre = Request::input("titre");
        $auteur = Request::input("auteur");
        $genre = Request::input("genre");
        try {
            $unLivreService = new ServiceLivres();
            $unLivreService->modificationLivres($id, $titre, $auteur, $genre);
            return view('home');
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
}
