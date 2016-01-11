@extends('layouts/admin_master')

@section('content')
<!--<div class="container-fluid">

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
     
            <form role="form">
                <div class="form-group">
                    <button type="button" class="btn btn-info">{{ trans('messages.new_role') }}</button>
                </div>
                <div class="form-group">
                    <select  class="form-control">
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->label}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                     @foreach ($permissions as $permission)
                     <div class="col-lg-3">
                        <label>
                            <input type="checkbox" value="0" checked> {{$permission->label}}</input>
                        </label>
                    </div>
                    @endforeach
                 </div>
            </form>

        </div>
    </div>
    <!-- /.row -->

<!--</div>
<!-- /.container-fluid -->
@endsection

