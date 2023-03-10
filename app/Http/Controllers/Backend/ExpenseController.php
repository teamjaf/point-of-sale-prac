<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense; 
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function AddExpense(){
        return view('backend.expense.add_expense');
    }








    public function StoreExpense(Request $request){

        Expense::insert([

            'details' => $request->details,
            'amount' => $request->amount,
            'month' => $request->month,
            'year' => $request->year,
            'date' => $request->date,
            'created_at' => Carbon::now(), 
        ]);


            $notification = array(
            'message' => 'Expense Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 

    public function TodayExpense(){

        $date = date("d-m-Y");
        $today = Expense::where('date',$date)->get();
        return view('backend.expense.today_expense',compact('today'));

    } // End Method 
}
