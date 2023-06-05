@php use App\Models\Disease;use App\Models\Symptom; @endphp
<div class="row">
    <x-chat-bubble position="left">
        Selamat Pagi, <br>
        Selamat datang di menu Sistem Pakar Puskesmas Tempurejo Kabupaten Jember. Keluhan apa yang anda rasakan ?
        silahkan Klik pada kolom gejala dibawah ini.
    </x-chat-bubble>
    <x-chat-bubble position="right">
        @foreach($symptoms as $index=>$symptom)
            <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="100" id="{{$symptom->id}}"
                       wire:model="userSymptom.{{ $symptom->id }}" @if($chatCertainly) disabled @endif>
                <label class="form-check-label" for="{{$symptom->id}}">
                    {{ $symptom->title }}
                </label>
            </div>
        @endforeach
        <button class="btn btn-primary btn-sm m-2" wire:click.prevent="setAnalytics" style="float: right">
            Submit
        </button>
    </x-chat-bubble>

    @isset($errorMessage['nullSymptoms'])
        <x-chat-bubble position="left">
            Silahkan isi minimal 1 gejala
        </x-chat-bubble>
    @else
        @if($chatCertainly)
            @php($count=0)

            @foreach($userSymptom as $index=>$symptom)
                @php($count+=1)

                <x-chat-bubble position="left">
                    Bagaimana keyakinan anda ke gejala {{ Symptom::find($index)->title }}
                </x-chat-bubble>

                <x-chat-bubble position="right">
                    @if($symptom==100)
                        @foreach($certainly as $i=>$c)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="{{ $index }}"
                                       id="{{ $index }}_{{ $i }}"
                                       wire:model="userSymptom.{{$index}}" value="{{ $i }}">
                                <label class="form-check-label" for="{{ $index }}_{{ $i }}">
                                    {{ $c }}
                                </label>
                            </div>
                        @endforeach
                    @else
                        {{ $certainly[$symptom] }}
                    @endif

                </x-chat-bubble>

                @if($userSymptom[$index]==100)
                    @php($cfStatus=false)
                    @break
                @endif
            @endforeach
            @if($cfStatus)
                <x-chat-bubble position="left">
                    <div>
                        Dari hasil sistem pakar mendeteksi dan menunjukan bahwa anda mengalami <br>
                        @php($count=0)
                        @php($disease="")
                        @foreach($this->certaintyFactor() as $index=>$cf)
                            @if($cf>$count)
                                @php($count=$cf)
                                @php($disease=$index)
                            @endif
                            Penyakit {{ Disease::find($index)->title }} dengan kemungkinan {{ $cf*100 }}% <br>
                        @endforeach
                        Dengan kemungkinan terbesar adalah {{ Disease::find($disease)->title }}
                    </div>
                </x-chat-bubble>

            @endif
        @endif
    @endisset

</div>