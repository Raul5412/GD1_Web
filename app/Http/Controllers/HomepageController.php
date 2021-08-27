<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Movement;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    
    public function move(Request $req){

        $movements = Movement::select('movements.id', 'movements.name', 'movements.amount', 'movements.account_id')->whereIn('account_id', Account::select('id')->where('user_id', auth()->user()->id))
        ->join('accounts', 'movements.account_id', '=', 'accounts.id')->get()->toArray();



        return view('movement.movement', ['movements'=> $movements]);
    }

    public function index() {
        return view('homepage.index');
    }

    public function account(Request $req){
        return view('accounts.account');
    }

    /**
     * Save the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveAccount(Request $req)
    {
        $data = $req->validate([
            'name'=> 'required',
            'account_amount' => 'required',
            'user_id' => 'required'
        ]);

        $account = Account::create([
            'name' => $data['name'],
            'account_amount' => $data['account_amount'],
            'user_id' => $data['user_id']
        ]);

        return redirect()->route('homepage');
        //return response()->json($user);
        // return view('app.views-folder.name');
    }
}
