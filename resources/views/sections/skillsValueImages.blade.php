<ul class="internal-ul">
    @php
        $loopValue = 0 ;
    @endphp
    @for($i=100-$skillValue; $i<100; $i=$i+10)

        <li><img src="{{url('public/asset/images/border-whitre.png')}}" class="img-responsive"/></li>
        @php
            $loopValue += 10 ;
        @endphp
    @endfor

    @if($loopValue != 100)
        @for($i=$skillValue; $i<100; $i=$i+10)

            <li><img src="{{url('public/asset/images/border.png')}}" class="img-responsive"/></li>
        @endfor
    @endif
</ul>
