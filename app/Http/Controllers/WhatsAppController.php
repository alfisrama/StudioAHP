<?php

namespace App\Http\Controllers;

use App\WhatsApp;
use App\Studio;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $halaman = 'Studio AHP';
        $this->sendWhatsappNotification($request->id_studio, $request->nomor_telefon);
        // return view('websites.index', compact('halaman'));
        return redirect('/');
    }

    public function show(WhatsApp $whatsApp)
    {
        //
    }

    public function edit(WhatsApp $whatsApp)
    {
        //
    }

    public function update(Request $request, WhatsApp $whatsApp)
    {
        //
    }

    public function destroy(WhatsApp $whatsApp)
    {
        //
    }

    private function sendWhatsappNotification(string $studio, string $recipient)
    {
        $from   = "whatsapp:+14155238886";
        $to     = "whatsapp:".$recipient;
        $sid    = "AC8a41afe8d0cd2e9caeb21fec7b87361b";
        $token  = "28eacc37f8b40ab725cc83fbb1b48c10";
        $twilio = new Client($sid, $token);
        
        $studio = Studio::all()->where('id', $studio)->first();
        
        $option1 = $studio['fasilitas_alat'];
        if ($option1 == 1){
            $fasilitas_alat = "Drum, Gitar Electric, Bass, Mic";
        }else if ($option1 == 2){
            $fasilitas_alat = "Drum, Gitar Electric, Gitar Acoustic, Bass, Mic";
        }else if ($option1 == 3){
            $fasilitas_alat = "Drum, Gitar Electric, Bass, Mic, Keyboard";
        }else if ($option1 == 4){
            $fasilitas_alat = "Drum, Gitar Electric, Bass, Mic, Keyboard, Perkusi";
        }else if ($option1 == 5){
            $fasilitas_alat = "Drum, Gitar Electric, Gitar Acoustic, Bass, Mic, Keyboard";
        }else if ($option1 == 6){
            $fasilitas_alat = "Drum, Gitar Electric, Gitar Acoustic, Bass, Mic, Keyboard, Perkusi";
        }else {
            $fasilitas_alat = "-";
        }

        $option2 = $studio['fasilitas_rekaman'];
        if ($option2 == 1){
            $fasilitas_rekaman = "Tidak bisa rekaman";
        }else if ($option2 == 2){
            $fasilitas_rekaman = "Live Recording";
        }else if ($option2 == 3){
            $fasilitas_rekaman = "Semi Track Recording";
        }else if ($option2 == 4){
            $fasilitas_rekaman = "Full Recordng";
        }else {
            $fasilitas_rekaman = "-";
        }
        
        $body   =   "Haii ini detail lengkap dari ".$studio['nama_studio']."😊\n \n".
                    "💲 Harga sewa studio ".$studio['harga']."/jam \n \n".
                    "🎤 Fasilitas Alat: \n"
                    .$fasilitas_alat."\n \n".
                    "🎬 Fasilitas Rekaman: \n"
                    .$fasilitas_rekaman."\n \n".
                    "🕣 Jam Buka:\n"
                    .date("H:i",strtotime($studio['buka']))." - ".date("H:i",strtotime($studio['tutup']))."\n \n".
                    "🏠 Lokasi studio berada di ".$studio['alamat']."\n \n".
                    "📞 Info lebih lanjut hubungi studio musik ".$studio['telefon']."\n \n".
                    "Terima kasih telah menggunakan aplikasi kami🙏";
        return $twilio->messages->create($to, array('from' => $from, 'body' => $body));
    }

}
