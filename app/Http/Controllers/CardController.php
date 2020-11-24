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
    public function create($id = 1)
    {
        $equipments = Equipments::all();
        $hangars = Hangars::all();
        $modules = Equipments::find($id)->modules;
        $modules_count = count($modules);

        return view(
            'cards.card_create',
            [
                'equipments' => $equipments,
                'hangars' => $hangars,
                'modules' => $modules,
                'modules_count' => $modules_count,
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
        $card = new Cards;
        $card->inventory_number = $request->input('inventory_number');
        $card->nomenclature_number = $request->input('nomenclature_number');
        $card->equipments_id = $request->input('equipments_id');
        $card->hangars_id = $request->input('hangars_id');
        $card->save();

        $sch = $request->input('modules_count');
        $sch--;
        for ($i = 0; $i <= $sch; $i++) {

            if ($request->hasFile('photo_' . $i)) {
                // Имя и расширение файла
                $filenameWithExt = $request->file('photo_' . $i)->getClientOriginalName();
                // Только оригинальное имя файла
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Расширение
                $extention = $request->file('photo_' . $i)->getClientOriginalExtension();
                // Путь для сохранения
                $fileNameToStore = "photos/" . $filename . "_" . time() . "." . $extention;
                // Сохраняем файл
                $path = $request->file('photo_' . $i)->storeAs('public/', $fileNameToStore);
            }

            $modules = new ModulesInfo(
                [
                    'cards_id' => $card->id,
                    'modules_id' => $request->input('modules_' . $i),
                    // 'photo' => $request->input('photo_' . $i),
                    'photo' => empty($fileNameToStore) ? null : $fileNameToStore,
                    'description' => $request->input('description_' . $i),
                ]
            );
            $modules->save();
        }

        return redirect('/cards');
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
