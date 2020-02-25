@php
// Sliter type variable came from ['carier-select','media-select']page
    $slider = App\Models\Slider::where('type',$sliderType)->first();
@endphp
<!-- Inner Banner -->
<section  id="banner-2" style="background:url({{URL('/')}}/public/storage/Images/sliders/{{$slider->image}})">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                @if($slider->title || $slider->title)
                    <h2>{{(Config::get('app.locale') == 'en') ? $slider->title : $slider->title_ar}}</h2>
                @endif
                @if($slider->description || $slider->description_ar)
                    <p>{!! (Config::get('app.locale') == 'en') ? $slider->description : $slider->description_ar !!}</p>
                @endif
            </div>



        </div>
    </div>
{{--  backImage variable came from ['carier-select','media-select']page --}}

         <img src="{{url('public/asset/'.Config::get('app.locale')).'/images/'.$backImage}}" class="img-pos-top img-responsive"/>
</section>
<!-- Inner Banner -->
