  <div id="{{$sliderID}}" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach ($sliderLoop as $item_slider)
      @if ($loop->first)
      <li data-target="#{{$sliderID}}" data-slide-to="{{$loop->index}}" class="active"></li>
      @else
        <li data-target="#{{$sliderID}}" data-slide-to="{{$loop->index}}"></li>
      @endif
    @endforeach

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    @foreach ($sliderLoop as $item_slider)
        @if ($loop->first)
            <div class="item active">
                @if($item_slider->link)
                    <a href="{{$item_slider->link}}" target="_blank">
                @else
                    <a>
                @endif
                
                <img class="img-responsive img-size" src="{{url('public/storage/Images/homeSliders/'.$item_slider->image)}}" alt="...">
                
                @if($item_slider->link)
                    </a>
                @else
                    </a>
                @endif
                
            </div>
        @else
            <div class="item">
                @if($item_slider->link)
                    <a href="{{$item_slider->link}}" target="_blank">
                @else
                    <a>
                @endif
                  <img class="img-responsive img-size" src="{{url('public/storage/Images/homeSliders/'.$item_slider->image)}}" alt="...">
                @if($item_slider->link)
                    </a>
                @else
                    </a>
                @endif  

            </div>
        @endif
    @endforeach

  </div>

  <!-- Controls -->
  {{-- //check to see if there is sliders more than one to show the glyphicons --}}

    @if(count($sliderLoop)>1)
        <a class="left carousel-control" href="#{{$sliderID}}" role="button" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#{{$sliderID}}" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    @endif
</div>
