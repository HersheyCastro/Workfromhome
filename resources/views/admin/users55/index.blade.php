@extends('admin.layouts.master')
@section('title', 'Users')
@section('content')


    <div class="row">
        <div class="col-md-12">


    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-users fa-fw"></i>Users</h3>
            <div class="box-tools pull-right">
                @if(Guard::allows('users55_delete'))
                <button  id="delete" type="button" data-toggle="tooltip" data-original-title="Delete Selected Records" class="btn btn-box-tool" ><i class="fa fa-trash"></i></button>
                @endif
                <span data-toggle="tooltip" title="" class="badge bg-green" data-original-title="{{count($users55)}} Records">{{count($users55)}}</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">

            <form id="form-search" method="GET" action="{{route('admin.users55.index')}}">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse filter" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <div class="form-group">
                            <label>Reset</label>
                            <div>
                                <a href="{{route('admin.users55.index')}}" class="btn btn-default">Reset</a>
                            </div>
                        </div>
                    </li>

                    <li>
   <div class="form-group">
        <label>Role</label>
        <div>
             {!! Form::select('froles55_id', $roles55,  Input::get('froles55_id'), array('class'=>'form-control select2', 'width'=>'100' ,'disabled'=> isset($view) ? true : false)) !!}
        </div>
    </div>
</li>


                    <li>
                        <div class="form-group">
                            <label>Search</label>
                            <div><button type="submit" class="btn btn-default">Search</button></div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</form>

            <table class="table table-striped table-hover table-responsive table-bordered" id="Users55DataTable"  width="100%">
                <thead>
                    <tr>
                        <th class="all">
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Remember Token</th>

                        <th class="all">
                            <div class="btn-group tools">
                                @if(Guard::allows('users55_create'))
                                <button action="form" type="button" onclick="location.href ='{{ route('admin'.'.users55.create') }}'" class="btn btn-default btn-sm fa fa-plus"></button>
                                @endif
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-default btn-sm fa fa-bars"
                                            data-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu pull-right ColumnToggle" role="menu">
                                       <li action="form" data-column="1" class="toggle-vis Checked"><a href="javascript:void(0)"><i class="fa fa-check"></i>Name</a></li>
<li action="form" data-column="2" class="toggle-vis Checked"><a href="javascript:void(0)"><i class="fa fa-check"></i>Email</a></li>
<li action="form" data-column="3" class="toggle-vis Checked"><a href="javascript:void(0)"><i class="fa fa-check"></i>Role</a></li>
<li action="form" data-column="4" class="toggle-vis Checked"><a href="javascript:void(0)"><i class="fa fa-check"></i>Remember Token</a></li>

                                    </ul>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users55 as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.encrypt($row->id),1,false,['class' => 'single','data-id'=> encrypt($row->id)]) !!}
                            </td>
                            <td>{{ $row->name }}</td>
<td>{{ $row->email }}</td>
<td>{{ isset($row->roles55->sRoleName) ? $row->roles55->sRoleName : '' }}</td>
<td>{{ $row->remember_token }}</td>

                            <td>
   
                                <div class="btn-group tools">
                                    @if(Guard::allows('users55_view'))
                                    <button type="button" onclick="location.href ='{{route('admin'.'.users55.show', array(encrypt($row->id))) }}'" class="btn btn-default btn-sm fa fa-search"></button>
                                    @endif
                                    @if(Guard::allows('users55_edit') || Guard::allows('users55_delete'))
                                    <div class="btn-group">
                                        <button class="btn dropdown-toggle btn-default btn-sm fa fa-bars"
                                                data-toggle="dropdown"></button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            @if(Guard::allows('users55_edit'))
                                            <li action="form"><a href="{{route('admin'.'.users55.edit', array(encrypt($row->id))) }}"><i class="fa fa-pencil-square-o"></i>Edit</a></li>
                                            @endif
                                            @if(Guard::allows('users55_delete'))
                                            <li action="delete"><a href="#" data-toggle="modal" id="{{encrypt($row->id)}}" data-route="{{route('admin'.'.users55.destroy', encrypt($row->id))}}" data-target="#mDeleteUsers55DataTable">
                                                    <i class="fa fa-minus"></i>Delete</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                   @endif
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! Form::open(['route' => 'admin'.'.users55.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="sendUsers55DataTable" name="toDeleteUsers55DataTable">
            {!! Form::close() !!}
        </div>
	</div>
	 <div id="eModalContainer">
                <div class="modal fade" id="mDeleteUsers55DataTable">
                    <div class="modal-dialog">
                        <div class="modal-content">

                               {!! Form::open(array('method' => 'DELETE', 'id' => 'deleteEntryUsers55DataTable')) !!}

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <p id="deleteMessageUsers55DataTable"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                 {!! Form::close() !!}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
                </div>
                        </div>

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            @if (Session::has('message'))
                 toastr.success("Successful", "{{Session::get('message')}}", {
                        closeButton: true,
                        positionClass: 'toast-bottom-right'
                    });
            @elseif(Session::has('created'))
                  toastr.success("Successful", "{{Session::get('created')}}", {
                        closeButton: true,
                        positionClass: 'toast-bottom-right',
                    });
            @elseif(Session::has('updated'))
                    toastr.success("Successful", "{{Session::get('updated')}}", {
                        closeButton: true,
                        positionClass: 'toast-bottom-right',
                    });
            @elseif(Session::has('deleted'))
                 toastr.success("Successful", "{{Session::get('deleted')}}", {
                        closeButton: true,
                        positionClass: 'toast-bottom-right',
                    });
           @elseif(Session::has('danger'))
                      toastr.error("Error", "{{Session::get('danger')}}", {
                          closeButton: true,
                          positionClass: 'toast-bottom-right',
                      });

            @elseif ($errors->count() > 0)
                 toastr.warning("Oops!", "There was an error occured", {
                        closeButton: true,
                        positionClass: 'toast-bottom-right'
                    });
            @endif
            $('#deleteUsers55DataTable').click(function () {
                alertify.confirm("Are you sure you want to delete these items?", function () {
                    var send = $('#sendUsers55DataTable');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDeleteUsers55DataTable = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDeleteUsers55DataTable.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDeleteUsers55DataTable));
                    }
                    $('#massDeleteUsers55DataTable').submit();
                }, function () {
                });
            });
             var tableUsers55DataTable = $('#Users55DataTable').DataTable(
             {"dom":"Bfrtip","buttons":[{"extend":"copy","text":"Copy","exportOptions":{"columns":"th:not(:last-child):visible:not(:eq(0))"}},{"extend":"excel","text":"Excel","exportOptions":{"columns":"th:not(:last-child):visible:not(:eq(0))"}},{"extend":"pdf","text":"PDF","exportOptions":{"columns":"th:not(:last-child):visible:not(:eq(0))"}},{"extend":"print","text":"Print","exportOptions":{"stripHtml":false,"columns":"th:not(:last-child):visible:not(:eq(0))"}}],"columnDefs":[{"width":"30px","targets":0,"searchable":false,"orderable":false,"visible":true},{"targets":1,"searchable":true,"orderable":true,"visible":true},{"targets":2,"searchable":true,"orderable":true,"visible":true},{"targets":2,"searchable":true,"orderable":true,"visible":true},{"targets":3,"searchable":true,"orderable":true,"visible":true},{"targets":4,"searchable":false,"orderable":true,"visible":true},{"targets":5,"searchable":false,"orderable":false,"visible":true}],"responsive":true,"autoWidth":true}
             );
                $('.toggle-vis').on('click', function (e) {
                    e.preventDefault();
                    //find table
                    // Get the column API object
                    var column = tableUsers55DataTable.column($(this).attr('data-column'));

                    // Toggle the visibility
                    column.visible(!column.visible());


                    if (!column.visible() == true) {
                        $(this).removeClass('Checked');
                    } else {
                        $(this).addClass('Checked');
                    }

                });
        });
    </script>
    <script>
        $('#mDeleteUsers55DataTable').on('show.bs.modal', function(e) {
            var id     = e.relatedTarget.id,
                    name = 'this entry',
                    modal    = $(this);
            $('#deleteMessageUsers55DataTable').replaceWith(' <p> Comfirm delete '+name+' ?</p>');
            $('#deleteEntryUsers55DataTable').attr('action', e.relatedTarget.dataset.route);
        });
    </script>
@stop