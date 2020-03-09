@extends('Admin.thirdmaster')
@section('role','navigation__sub--active navigation__sub--toggled')
@section('role_management','navigation__sub--active navigation__sub--toggled')
@section('role_index','navigation__active')
@section('status','Role | Index')
@section('mycontent')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                @php($s=1)
                <h3 class="text-center">Available Role</h3>
                <table class="table role-table">
                    <thead>
                    <tr>
                        <th>SERIAL</th>
                        <th>NAME</th>
                        @can('roll_edit',Auth::user())
                        <th>EDIT</th>
                        @endcan
                        @can('roll_delete',Auth::user())
                        <th>DELETE</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>{{$role->role_name}}</td>
                            @can('roll_edit',Auth::user())
                            <td>
                            <a href="{{route('role.edit',$role->id)}}" class="btn btn-sm btn-info" target="_blank">Edit</a>
                            </td>
                            @endcan
                            @can('roll_delete',Auth::user())
                            <td>
                            {!! Form::open(['route'=>['role.destroy',$role->id],'method'=>'DELETE','id'=>$role->id]) !!}
                            <a class="btn btn-sm btn-danger delete_role" data-id="{{$role->id}}">delete</a>
                            {!! Form::close() !!}
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
            $(document).on('click','.delete_role',function(event){
                var delete_role = $(this).data('id');
                var submit = document.getElementById(delete_role);
                toastr.warning("<button type='button' id='delete_role' class='btn btn-sm btn-danger role_delete_yes'>Yes</button>" +
                    "<button type='button' id='confirmationRevertNO' class='btn btn-sm btn-success role_delete_no'>No</button>",
                    'Are You Want To Delete This Role?',
                    {
                        closeButton: false,
                        allowHtml: true,
                        onShown: function (toast) {
                            $("#delete_role").click(function(){
                                event.preventDefault();
                                submit.submit();
                            });
                        }
                    });
            });
    </script>
@endsection