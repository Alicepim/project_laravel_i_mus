<?php

namespace App\Http\Controllers;

use App\Models\Character as ModelsCharacter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Character extends Controller
{
    //Show Data
    function pullData() {
        $characterData = ModelsCharacter::all();
        return view('homepage', compact('characterData'));
    }


    //Add Data
    function addCharacter(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'race' => 'required|string|in:Human,Elf,Dwarf,Orc',
            'class' => 'required|string|in:Warrior,Mage,Thief',
            'level' => 'required|integer|min:1|max:50',
            'strength' => 'required|integer|min:10|max:20',
            'dexterity' => 'required|integer|min:10|max:20',
            'constitution' => 'required|integer|min:10|max:20',
            'intelligence' => 'required|integer|min:10|max:20',
            'wisdom' => 'required|integer|min:10|max:20',
            'charisma' => 'required|integer|min:10|max:20',
        ], [
            'name.required' => 'กรุณากรอกชื่อ',
            'name.max' => 'ชื่อต้องมีความยาวไม่เกิน 255 ตัวอักษร',
            'race.required' => 'กรุณาเลือกสายพันธุ์',
            'race.in' => 'สายพันธุ์ที่เลือกไม่ถูกต้อง',
            'class.required' => 'กรุณาเลือกอาชีพ',
            'class.in' => 'อาชีพที่เลือกไม่ถูกต้อง',
            'level.required' => 'กรุณากรอกเลเวล',
            'level.integer' => 'เลเวลต้องเป็นตัวเลข',
            'level.min' => 'เลเวลต้องมีค่าอย่างน้อย 1',
            'level.max' => 'เลเวลต้องมีค่าไม่เกิน 50',
            'strength.required' => 'กรุณากรอกค่าพลัง',
            'strength.integer' => 'ค่าพลังต้องเป็นตัวเลข',
            'strength.min' => 'ค่าพลังต้องมีค่าอย่างน้อย 10',
            'strength.max' => 'ค่าพลังต้องมีค่าไม่เกิน 20',
            'dexterity.required' => 'กรุณากรอกค่าความเฉลีย',
            'dexterity.integer' => 'ค่าความเฉลียต้องเป็นตัวเลข',
            'dexterity.min' => 'ค่าความเฉลียต้องมีค่าอย่างน้อย 10',
            'dexterity.max' => 'ค่าความเฉลียต้องมีค่าไม่เกิน 20',
            'constitution.required' => 'กรุณากรอกค่าความแข็งแรง',
            'constitution.integer' => 'ค่าความแข็งแรงต้องเป็นตัวเลข',
            'constitution.min' => 'ค่าความแข็งแรงต้องมีค่าอย่างน้อย 10',
            'constitution.max' => 'ค่าความแข็งแรงต้องมีค่าไม่เกิน 20',
            'intelligence.required' => 'กรุณากรอกค่าสติ',
            'intelligence.integer' => 'ค่าสติต้องเป็นตัวเลข',
            'intelligence.min' => 'ค่าสติต้องมีค่าอย่างน้อย 10',
            'intelligence.max' => 'ค่าสติต้องมีค่าไม่เกิน 20',
            'wisdom.required' => 'กรุณากรอกค่าปัญญา',
            'wisdom.integer' => 'ค่าปัญญาต้องเป็นตัวเลข',
            'wisdom.min' => 'ค่าปัญญาต้องมีค่าอย่างน้อย 10',
            'wisdom.max' => 'ค่าปัญญาต้องมีค่าไม่เกิน 20',
            'charisma.required' => 'กรุณากรอกค่าเสน่ห์',
            'charisma.integer' => 'ค่าเสน่ห์ต้องเป็นตัวเลข',
            'charisma.min' => 'ค่าเสน่ห์ต้องมีค่าอย่างน้อย 10',
            'charisma.max' => 'ค่าเสน่ห์ต้องมีค่าไม่เกิน 20',
        ]);

        DB::table('characters')->insert($validateData);
        $characterData = ModelsCharacter::all();
        return view('homepage', compact('characterData'));

    }



    //Delete Data 
    function deleteData($id) {
        DB::table('characters')->where('id', $id)->delete();
        $characterData = ModelsCharacter::all();
        return view('homepage', compact('characterData'));
    }



    //Edit Data
    function editData($id) {
        $editData = ModelsCharacter::find($id);
        return view('editpage', compact('editData'));
    }

    //UpDate Data 
    function upDateCharacter(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'race' => 'required|string|in:Human,Elf,Dwarf,Orc',
            'class' => 'required|string|in:Warrior,Mage,Thief',
            'level' => 'required|integer|min:1|max:50',
            'strength' => 'required|integer|min:10|max:20',
            'dexterity' => 'required|integer|min:10|max:20',
            'constitution' => 'required|integer|min:10|max:20',
            'intelligence' => 'required|integer|min:10|max:20',
            'wisdom' => 'required|integer|min:10|max:20',
            'charisma' => 'required|integer|min:10|max:20',
        ]);

        $character = ModelsCharacter::findOrFail($id);
        $character->update($validatedData);

        $characterData = ModelsCharacter::all();
        return view('homepage', compact('characterData'));
    }
}
