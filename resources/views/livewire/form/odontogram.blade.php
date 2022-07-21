<div class="card" style="background: #3cb371">
    <div class="card-body">
        <form action="{{ route('admin.medical-record.store-Odontogram',$rmId) }}" method="post">
            @csrf
            @method('post')
            <div class="og-diagram">
                <div class="odontogram">
                    <div data-item="18" data-icon="unit-2.svg"></div>
                    <div data-item="17" data-icon="unit-2.svg"></div>
                    <div data-item="16" data-icon="unit-2.svg"></div>
                    <div data-item="15" data-icon="unit-2.svg"></div>
                    <div data-item="14" data-icon="unit-1.svg"></div>
                    <div data-item="13" data-icon="unit-1.svg"></div>
                    <div data-item="12" data-icon="unit-1.svg"></div>
                    <div data-item="11" data-icon="unit-1.svg"></div>
                    <div data-item="21" data-icon="unit-1.svg"></div>
                    <div data-item="22" data-icon="unit-1.svg"></div>
                    <div data-item="23" data-icon="unit-1.svg"></div>
                    <div data-item="24" data-icon="unit-1.svg"></div>
                    <div data-item="25" data-icon="unit-2.svg"></div>
                    <div data-item="26" data-icon="unit-2.svg"></div>
                    <div data-item="27" data-icon="unit-2.svg"></div>
                    <div data-item="28" data-icon="unit-2.svg"></div>
                </div>
                <div class="odontogram" style="padding-left: 145px">
                    <div data-item="55" data-icon="unit-2.svg"></div>
                    <div data-item="54" data-icon="unit-1.svg"></div>
                    <div data-item="53" data-icon="unit-1.svg"></div>
                    <div data-item="52" data-icon="unit-1.svg"></div>
                    <div data-item="51" data-icon="unit-1.svg"></div>
                    <div data-item="61" data-icon="unit-1.svg"></div>
                    <div data-item="62" data-icon="unit-1.svg"></div>
                    <div data-item="63" data-icon="unit-1.svg"></div>
                    <div data-item="64" data-icon="unit-1.svg"></div>
                    <div data-item="65" data-icon="unit-2.svg"></div>
                </div>
                <br><br>
                <div class="odontogram" style="padding-left: 145px">
                    <div data-item="85" data-icon="unit-2.svg"></div>
                    <div data-item="84" data-icon="unit-1.svg"></div>
                    <div data-item="83" data-icon="unit-1.svg"></div>
                    <div data-item="82" data-icon="unit-1.svg"></div>
                    <div data-item="81" data-icon="unit-1.svg"></div>
                    <div data-item="71" data-icon="unit-1.svg"></div>
                    <div data-item="72" data-icon="unit-1.svg"></div>
                    <div data-item="73" data-icon="unit-1.svg"></div>
                    <div data-item="74" data-icon="unit-1.svg"></div>
                    <div data-item="75" data-icon="unit-2.svg"></div>
                </div>
                <div class="odontogram">
                    <div data-item="48" data-icon="unit-2.svg"></div>
                    <div data-item="47" data-icon="unit-2.svg"></div>
                    <div data-item="46" data-icon="unit-2.svg"></div>
                    <div data-item="45" data-icon="unit-2.svg"></div>
                    <div data-item="44" data-icon="unit-1.svg"></div>
                    <div data-item="43" data-icon="unit-1.svg"></div>
                    <div data-item="42" data-icon="unit-1.svg"></div>
                    <div data-item="41" data-icon="unit-1.svg"></div>
                    <div data-item="31" data-icon="unit-1.svg"></div>
                    <div data-item="32" data-icon="unit-1.svg"></div>
                    <div data-item="33" data-icon="unit-1.svg"></div>
                    <div data-item="34" data-icon="unit-1.svg"></div>
                    <div data-item="35" data-icon="unit-2.svg"></div>
                    <div data-item="36" data-icon="unit-2.svg"></div>
                    <div data-item="37" data-icon="unit-2.svg"></div>
                    <div data-item="38" data-icon="unit-2.svg"></div>
                </div>
            </div>
            <br>
            <div class="row" style="margin-left:10px;width: 150px">
                <div class="col-1" style="width: 10px;background: #ff0000"></div>
                <div class="col">Karies</div>
            </div>
            <br>
            <div class="row" style="margin-left:10px;width: 150px">
                <div class="col-1" style="width: 10px;background: #0000ff"></div>
                <div class="col">Tertutup</div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan Odontogram</button>
        </form>
    </div>
    <script type="text/javascript">
        document.addEventListener('livewire:load', function () {
            var data = [
                {
                    "title": "Kosongkan",
                    "type": "clean",
                    "all": true,
                    "menu": true
                },
                {"type": "separator", "menu": false}, {
                    "index": "1",
                    "title": "Karies",
                    "type": "section",
                    "figure": {"background": "#FF0000"},
                    "menu": false
                }, {
                    "index": "2",
                    "title": "Tertutup",
                    "type": "section",
                    "figure": {"background": "#0000FF"},
                    "menu": false
                }, {
                    "index": "3",
                    "title": "Diperlukan Sealant",
                    "type": "unit",
                    "figure": {"background": "url('{{asset('img/asteric-red.svg')}}')"},
                    "menu": true
                }, {
                    "index": "4",
                    "title": "Sealant Selesai",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/asteric-blue.svg') }}')"},
                    "menu": true
                }, {
                    "index": "5",
                    "title": "Ekstraksi yang Diindikasikan",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/x-red.svg') }}')"},
                    "menu": true
                }, {
                    "index": "6",
                    "title": "hilang karena karies",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/x-blue.svg') }}')"},
                    "menu": true
                }, {
                    "index": "7",
                    "title": "Hilang sejak muda",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/x-circle-red.svg') }}')"},
                    "menu": true
                }, {
                    "index": "8",
                    "title": "Endodontik",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/triangle-red.svg') }}')"},
                    "menu": true
                }, {
                    "index": "9",
                    "title": "Mahkota",
                    "type": "unit",
                    "figure": {"background": "url('{{ asset('img/square-3-red.svg') }}')"},
                    "menu": true
                }];

            var json = {
                @php($dental=[
    18,17,16,15,14,13,12,11,21,22,23,24,25,26,27,28,
    55,54,53,52,51,61,62,63,64,65,
    85,84,83,82,81,71,72,73,74,75,
    48,47,46,45,44,43,42,41,31,32,33,34,35,36,37,38

    ])
                @foreach($dental as $d)

                "{{$d}}": {
                        "up": null,
                        "down": null,
                        "right": null,
                        "left": null,
                        "center": null,
                    },
                @endforeach
            };

            $odontogram = $('.odontogram').odontogram({
                'format': 'iconTitle,unit',
                'json': json,
                'data': data,
                'menu-title': 'Gigi #%dataItem%',
                'enable': true,
                'icons_dir': '{{ asset('img') }}/',
            });
            console.log($('.odontogram').odontogram.getValue("58"))
        });
    </script>
</div>
