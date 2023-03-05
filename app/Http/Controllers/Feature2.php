<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Customer;
use App\Models\DataBayar;
use App\Models\MST_POINT;
use App\Models\Utang;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class Feature2 extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard');
    }
    public function bayar(Request $request)
    {
        # code...
        $customer = Customer::find(1);
        $point = MST_POINT::all();
        $response = [];
        $status = false;
        foreach ($customer->bank as $bnk) {
            $utang = Utang::where(['id_bank' => $bnk->id])->first();
            if ($utang != null) {
                $sisa_saldo = 0;
                $bank = BankAccount::find($bnk->id);
                if ($bnk->saldo >= $utang->nominal) {
                    $bank = BankAccount::find($bnk->id);
                    $sisa_saldo = $bnk->saldo - $utang->nominal;
                    Utang::destroy($utang->id);
                    array_push($response, "Hutang pada bank" . $utang->bank->nama_bank . " Telah Lunas");
                    if (($sisa_saldo >= $request->harga) && $status == false) {
                        foreach ($point as $pt) {
                            if ($pt->nama_bank == $bank->nama_bank) {

                                $customer->point += $pt->point;
                            }
                        }
                        $sisa_saldo_final = $sisa_saldo - $request->harga;
                        DataBayar::create([
                            'id_customer' => $customer->id,
                            'response' => 'success'
                        ]);
                        $bank->saldo = $sisa_saldo_final;
                        $bank->save();
                        $status = true;
                        array_push($response, "Telah Dibayar Dengan Bank " . $bnk->nama_bank);
                    } else {
                        $bank->saldo = $sisa_saldo;
                        $bank->save();
                    }
                } else {
                    continue;
                }
            } else {
                if (($bnk->saldo >= $request->harga) && $status == false) {
                    foreach ($point as $pt) {
                        if ($pt->nama_bank == $bnk->nama_bank) {
                            $customer->point += $pt->point;
                        }
                    }

                    $sisa_saldo_final = $bnk->saldo - $request->harga;
                    DataBayar::create([
                        'id_customer' => $customer->id,
                        'response' => 'success'
                    ]);
                    $bank = BankAccount::find($bnk->id);
                    $bank->saldo = $sisa_saldo_final;
                    $bank->save();
                    $status = true;
                    array_push($response, "Telah Dibayar Dengan Bank " . $bnk->nama_bank);
                }
            }
        }
        if ($status == true) {

            $customer->save();
        } else {
            array_push($response, "Barang Gagal Dibayar Saldo di bank manapun tidak cukup");
        }
        return redirect()->back()->with(['notif' => $response]);
    }
}
