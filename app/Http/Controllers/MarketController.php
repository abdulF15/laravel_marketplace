<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Category;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('dashboard.markets.index',[
            'markets' => Market::where('user_id',auth()->user()->id)->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.markets.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desription' => 'required',
            'category_id'=> 'required',
            'price'=> 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;

        Market::create($validatedData);
 
        return redirect('/dashboard/market')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        return view('dashboard.markets.show',[
            'market'=> $market
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Market $market)
    {
        return view('dashboard.markets.edit',[
            'market'=>$market,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desription' => 'required',
            'category_id'=> 'required',
            'price'=> 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;

        Market::where('id',$market->id)
                ->update($validatedData);

        return redirect('/dashboard/market')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        Market::destroy($market->id);
        return redirect('/dashboard/market')->with('success', ' Post has been deleted!');
    }


}
