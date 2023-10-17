<?php

namespace App\dao;
use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;
class ServiceLivres
{
    public function getListeLivres(){
        try{
            $mesLivres = DB::table('Livres')
                ->Select()
                ->get();
            return $mesLivres;
        } catch (\Illuminate\Database\QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function ajoutLivres($titre, $auteur, $genre){
        try{
            DB::table('Livres')->insert(
                ['titre' => $titre, 'auteur' => $auteur,
                    'genre' => $genre]);
        } catch (\Illuminate\Database\QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function getLivres($id)
    {
        try {
            $unLivre = DB::table('Livres')
                ->select()
                ->where('id', '=', $id)
                ->first();
            return $unLivre;
        } catch (\Illuminate\Databse\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function modificationLivres($code, $titre, $auteur, $genre){
        try{
            DB::table('livres')
                ->where('id', $code)
                ->update(['titre' => $titre, 'auteur' => $auteur,
                    'genre' => $genre]);
        } catch (\Illuminate\Databse\QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
}
