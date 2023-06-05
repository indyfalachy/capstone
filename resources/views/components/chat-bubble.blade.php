@props(['position'=>'left'])
<div class="col-12" style="margin:0;padding: 0">
    <div class="talk-bubble tri-right round @if($position=="left") left-in @else right-in @endif"
         @if($position=="right") style="float: right" @endif>
        <div class="talktext">
            {{ $slot }}
        </div>
    </div>
</div>