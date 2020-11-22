<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use App\Models\Hangars;
use App\Models\Modules;
use App\Models\Equipments;
use App\Models\ModulesInfo;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Cards::all();

        return view(
            'cards.card_index',
            [
                'cards' => $cards,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cards = Cards::all();
        $equipments = Equipments::all();
        $hangars = Hangars::all();

        $modules = Equipments::find(1)->modules;

        // foreach ($modules as $key => $value) {
        //     $modules = Modules::all();
        // }
        // $modules = $modules->equipmens();

        // return $modules;

        return view(
            'cards.card_create'. $equipments->id,
            [
                // 'cards' => $cards,
                'equipments' => $equipments,
                'hangars' => $hangars,
                'modules' => $modules,

            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $request;

        $card = new Cards;
        $card->inventory_number = $request->input('inventory_number');
        $card->nomenclature_number = $request->input('nomenclature_number');
        $card->equipments_id = $request->input('equipments_id');
        $card->hangars_id = $request->input('hangars_id');
        $card->save();

        $modules = new ModulesInfo;

        // foreach ($request as $key => $value) {
        //     $modules->cards_id = $card->id;
        //     $modules->modules_id = $request->input('modules_id');
        //     $modules->photo = $request->input('photo');
        //     $modules->description = $request->input('description');
        //     $modules->save();
        // }

        // for ($i=1; $i < ; $i++) { 
        //     $modules->cards_id = $card->id;
        //     $modules->modules_id = $request->input('modules_' . $i);
        //     $modules->photo = $request->input('photo_' . $i);
        //     $modules->description = $request->input('description_' . $i);
        //     $modules->save();
        // }

        // $models->cards_id = $card->id;

        // return redirect('/cards');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cards  $cards
     * @return \Illuminate\Http\Response
     */
    public function show(Cards $cards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cards  $cards
     * @return \Illuminate\Http\Response
     */
    public function edit(Cards $cards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cards  $cards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cards $cards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cards  $cards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cards $cards)
    {
        //
    }
}
