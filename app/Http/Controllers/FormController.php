<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    include("SearchNDL.php");

    class FormController extends Controller
    {
        public function Index(){
            return view('form');
        }


        public function booklist(Request $request){
            $BookName = $request->BookName;
            $BookIndex = $request->BookIndex;

            $books = searchNDL($BookName,$BookIndex,10);

            return view('booklist', compact('books', 'BookIndex', 'BookName'));
        }
    }