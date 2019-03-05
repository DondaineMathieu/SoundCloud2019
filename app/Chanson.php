<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Chanson extends Model  {
    protected $table = 'chanson';

    public function utilisateur() {
        return $this->belongsTo("App\User", "utilisateur_id");
    }

    public static function categories() {
        $pdo = DB::connection()->getPdo();

        $q = $pdo->prepare("SELECT style, count(*) as cnt FROM chanson group by style order by count(*) desc");
        $q->execute();
        $all =  $q->fetchAll();
        return $all;
    }
}