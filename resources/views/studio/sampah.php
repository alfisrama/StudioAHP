
                                    <th>Jumlah Ruangan</th>
                                    <th>Fasilitas Alat</th>
                                    <th>Fasilitas Rekaman</th>
                                    
                                    <td class="text-center">{{$studio->jumlah_ruangan}}</td>
                                    @php
                                        $option1 = $studio->fasilitas_alat;
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

                                        $option2 = $studio->fasilitas_rekaman;
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

                                    @endphp
                                    <td>{{$fasilitas_alat}}</td>
                                    <td>{{$fasilitas_rekaman}}</td>
                                    <td>Rp {{$studio->harga}}.00</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('H:i:s',$studio->buka)->format('H:i')}}</td>
                                    <td class="text-center">{{\Carbon\Carbon::createFromFormat('H:i:s',$studio->tutup)->format('H:i')}}</td>