<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Library;
use App\Models\Student;
use Illuminate\Http\Request;

class MyController extends Controller
{
    function studentsubmit(Request $req){
        $student = new Student();
        $student->name=$req->name;
        $student->class=$req->class;
        $student->address=$req->address;
        $student->contact=$req->contact;
        $student->save();
        return redirect('addstudent');
        // return '<script>alert("Student added successfully")</script>';    //to display the entered data directly
    }

    function booksubmit(Request $req){
        $book = new Book();
        $book->name=$req->name;
        $book->author=$req->author;
        $book->isbn=$req->isbn;
        $book->save();
        return redirect('addbook');
    }

    public function selectBook(){
        $book=Book::all();
        $student = Student::all();
        return view('bookissue',['book'=>$book,'student'=>$student]);
    }

    function issuesubmit(Request $req){
        // dd($req);
        $issue = new Library();
        $issue->student_id=$req->student_id;
        $issue->book_id=$req->book_id;
        $issue->save();
        return $req->input();
    }

    function issuelist(){
       
        $issue=Library::join('students','students.id','=','libraries.student_id')
            ->join('books','books.id','=','libraries.book_id')->get();
        dd($issue);
        return view('listissue',['data'=>$issue]);
    }
}
