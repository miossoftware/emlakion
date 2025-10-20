<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralConditions;
use App\Models\SpecialConditions;
use Illuminate\Http\Request;
use DB;
use Log;
use Exception;

class ConditionController extends Controller
{
    public function generalConditions()
    {
        $general_conditions = GeneralConditions::where("status", 1)->paginate(10);
        return view('general_conditions')->with('general_conditions', $general_conditions);
    }

    public function generalConditionsAdd(Request $request)
    {
        try {

            GeneralConditions::create([
                'conditions' => $request->input('conditions'),
                'insert_userid' => 1,
                'insert_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('general.conditions')->with('success', 'Genel Koşul Tanımlandı');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }

    public function generalConditionsDeleteById($id)
    {
        try {
            $conditions = GeneralConditions::find($id);
            $conditions->update([
                'status' => 0,
                'delete_userid' => 1,
                'delete_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('general.conditions')->with('success', 'Genel Koşul Silindi');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }

    public function generalConditionsById($id)
    {
        $justAConditions = GeneralConditions::find($id);
        return view('general_conditions')->with('justAConditions', $justAConditions);
    }

    public function generalConditionsUpdateById(Request $request, $id)
    {
        try {
            $conditions = GeneralConditions::find($id);
            $conditions->update([
                'conditions' => $request->conditions,
                'delete_userid' => 1,
                'delete_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('general.conditions')->with('success', 'Genel Koşul Güncellendi');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }

    public function specialConditions()
    {
        $general_conditions = SpecialConditions::where("status", 1)->paginate(10);
        return view('special_conditions')->with('special_conditions', $general_conditions);
    }

    public function specialConditionsAdd(Request $request)
    {
        try {

            SpecialConditions::create([
                'conditions' => $request->input('conditions'),
                'insert_userid' => 1,
                'insert_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('special.conditions')->with('success', 'Özel Koşul Tanımlandı');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }

    public function specialConditionsUpdateById(Request $request, $id)
    {
        try {
            $special_conditions = SpecialConditions::find($id);
            $special_conditions->update([
                'conditions' => $request->input('conditions'),
                'update_userid' => 1,
                'update_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('special.conditions')->with('success', 'Özel Koşul Güncellendi');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }

    public function specialConditionsById($id)
    {
        $justAConditions = SpecialConditions::find($id);
        return view('special_conditions')->with('justAConditions', $justAConditions);
    }

    public function specialConditionsDeleteById($id)
    {
        try {
            $special_conditions = SpecialConditions::find($id);
            $special_conditions->update([
                'status' => 0,
                'delete_userid' => 1,
                'delete_datetime' => date("Y-m-d H:i:s"),
                'customer_key' => 1
            ]);

            DB::commit();
            return redirect()->route('special.conditions')->with('success', 'Özel Koşul Silindi');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Fatura Tipi Güncellenirken Hata :', ['error' => $e->getMessage()]);
            return response()->view('error_500', [], 500);
        }
    }
}
