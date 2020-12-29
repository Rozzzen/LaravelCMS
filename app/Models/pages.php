<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pages extends Model
{
    use HasFactory;

    public static function get_page($url,$aliasUrl) {

        $page = DB::table('pages')->where('pages.url', $url)->first();
        if ($aliasUrl) {
            $alias = DB::table('pages')->where('pages.url', $aliasUrl)->first();
            if($alias->caption != '') $page->caption = $alias->caption;
            if($alias->content != '') $page->content = $alias->content;
        }
        return $page;
    }
    //модель get_pages возвращает одну страницу
    public static function get_pages() {
        $pages = DB::table('pages')->get();
        return $pages;
    }
//модель edit_page изменение страницы по ид
    public static function edit_page($id,$caption,$content,$parentCode,$orderNum,$aliasOf = NULL) {
        DB::table('pages')
        ->where('id', $id)
        ->update(['aliasOf' => $aliasOf,'orderNum' => intval($orderNum),'parentCode' => $parentCode,'caption' => $caption,'content' => $content,'editedDate' =>DB::raw('now()')]);
    }
    //модель delete_page удаление страницы по ид
    public static function delete_page($id) {
        DB::table('pages')
        ->where('id',$id)
        ->delete();
    }
     //модель create_page создание страницы
    public static function create_page($caption,$content,$url,$parentCode,$orderNum = NULL,$aliasOf = NULL) {
        DB::table('pages')
        ->insert(['aliasOf' => $aliasOf,'orderNum' => intval($orderNum),'parentCode' => $parentCode,'url'=>$url,'caption' => $caption,'content' => $content,'createdDate' =>DB::raw('now()'),'editedDate' => DB::raw('now()')]);
    }

    public static function get_pageId($id) {
        $page = DB::table('pages')->where('pages.id', $id)->get();
        return $page;
    }



// метод в который передаеться код родителя и сортировку если она нужна
    public static function getChildren($parentCode,$sort = '') {
        if ($sort != '') {
            $children = DB::table('pages')->where('pages.parentCode', $parentCode)->orderBy($sort,'ASC')->get();
            return $children;
        }
        $children = DB::table('pages')->where('pages.parentCode', $parentCode)->get();
        return $children;
    }



}
