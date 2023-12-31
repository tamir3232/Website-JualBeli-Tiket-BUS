@extends('layouts.main')

@section('container')
    <a style=" width:100%;display:flex;  margin-left:70%; margin-top:20px; text-decoration:none" href="/form-keberangkatan">
        <button type="button" class="btn btn-primary" style="background-color:#E76F51"> +</button>
    </a>

    @foreach ($keberangkatans as $keberangkatan)
        <a href="/keberangkatan/{{ $keberangkatan->id }}" style="text-decoration: none;color:black;">
            <div class="container" style="border-radius: 20px; background-color:#E7E7E7; color:black">
                <p>{{ $keberangkatan->bus->nama }}</p>
                <div style=" display : flex; flex-direction : row;">
                    <div style="text-align: center; width: 100%; display:flex; justify-content:center; align-items:center;">
                        <div style="display: inline-block; margin-right:50px">
                            <p style="text-align: center; ">{{ $keberangkatan->from }} <br>
                                {{ \Carbon\Carbon::parse($keberangkatan->keberangkatan)->format('H:i') }}</p>
                        </div>
                        <div style="display: inline-block">
                            <p>{{ $keberangkatan->to }}
                                <br>{{ \Carbon\Carbon::parse($keberangkatan->sampai)->format('H:i') }}
                            </p>
                        </div>
                    </div>
                    <div style="display: inline-block;">
                        <p style="width: 200px">Rp{{ $keberangkatan->price }}</p>
                    </div>

                </div>
                <div style=" display : flex; ">
                    <div style="width: 100%">
                        <p style="display: inline-block">{{ \Carbon\Carbon::parse($keberangkatan->date)->format('d-M-Y') }}
                        </p>
                    </div>
                    <div style=" width:100%;display:flex; justify-content:right; align-items:right";>
                        <button type="button" class="btn btn-primary" style="background-color:#E76F51 ">
                            {{ $keberangkatan->status }}</button>
                    </div>

                </div>
            </div>
        </a>
    @endforeach
@endsection
