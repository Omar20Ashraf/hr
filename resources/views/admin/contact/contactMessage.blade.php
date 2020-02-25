@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Contact Us Messages
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Contact US</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Contact US</h5>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight" id="messages">
            <thead>
                <tr>
                    <th> Id</th>
                    <th>Name</th>

                    <th>Email </th>
                    <th>Phone </th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $message)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->phone}}</td>

                        <td>
                            <a data-toggle="modal" data-target="#myModal{{$message->id}}">
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                            </a>

                            {{-- @if(Auth::user()->role != 3) --}}
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.deleteMessages',$message->id)}}"  method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class='label label-danger label-rounded label-icon' type='submit' value='submit'>
                                        <i class='icon-trash'> </i>
                                    </button>
                                </form>
                            </a>
                            {{-- @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @foreach ($emails as $item)
        <div class="modal" id="myModal{{$item->id}}">
            <div class="modal-dialog" style="width: 100%">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Message From: {{ $item->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="text-center" style="background-color: darkgray;color:firebrick"> Details </h2>

                        <table class="table table-bordered table-dark">
                            <tbody>
                                    <tr>
                                        <th scope="row">
                                            Message
                                        </th>
                                        <td>{!! $item->message !!}</td>
                                    </tr>

                            </tbody>
                        </table>

                         </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection

@section('footer')
<script>
    $(document).ready( function () {
        $('#messages').DataTable();
    } );
</script>
@endsection
