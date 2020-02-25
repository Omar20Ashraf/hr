@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Services
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Services</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Services</h5>

            <a href="{{route('admin.service.create')}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Add</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight" id="services">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Arabic Title</th>
                    <th>English Title</th>
                    <th>Arabic Description</th>
                    <th>English Description</th>
                    <th>Image</th>


                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- services variable came from ServicesCtrl --}}
                @foreach ($services as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!! $item->title_ar !!}</td>
                        <td>{!! $item->title !!}</td>
                        <td>{!! $item->description !!}</td>
                        <td>{!! $item->description_ar !!}</td>
                        
                        <td class="col-md-4">
                            <img src="{{url('public/storage/Images/services/'.$item->image)}}" class="img-responsive" style="width:100px;height:100px;border-radius:50%;" />

                        </td>
                        {{-- Actions --}}
                        <td>

                            {{-- edit sliders --}}
                            <a href="{{route('admin.service.edit',$item->id)}}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            {{-- delete service --}}
                            @if(Auth::user()->role != 3)
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.service.destroy',$item->id)}}"  method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class='label label-danger label-rounded label-icon' type='submit' value='submit'>
                                        <i class='icon-trash'> </i>
                                    </button>
                                </form>
                            </a>
                            @endif

                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
<script>
    $(document).ready( function () {
        $('#services').DataTable();
    } );
</script>
@endsection
