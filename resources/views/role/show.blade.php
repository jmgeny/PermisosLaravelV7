@extends('layouts.appPermisos')

@section('title','Roles')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Ver Rol</h2>
                    <a class="btn btn-danger float-right" href="{{ route('role.index') }}">Inicio</a>
                </div>
                <div class="card-body">

                    @include('custom.message')

                    <form>
                        <div class="container">
                            <h3>Datos Requeridos</h3>

                            <div class="form-group">
                                <input disabled="none" type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                                value="{{ old('name',$role->name) }}">
                            </div>

                            <div class="form-group">
                                <input disabled="none" type="text" class="form-control" name="slug" id="slug" placeholder="Slug"
                                value="{{ old('slug',$role->slug) }}">
                            </div>

                            <div class="form-group">
                                <textarea disabled="none" class="form-control" id="description" name="description" placeholder="Descripción" rows="3">{{old('description', $role->description)}}</textarea>
                            </div>

                            <hr>
                            <h3>Full Access</h3>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input disabled="none"  type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                @if (old('full-access')=="yes")
                                    checked
                                @elseif ($role['full-access'] =="yes")
                                    checked 
                                @endif   
                                >
                                <label class="custom-control-label" for="fullaccessyes">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input disabled="none" type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no"
                                @if (old('full-access')=="no")
                                    checked
                                @elseif ($role['full-access']=="no")
                                    checked     
                                @endif
                                >
                                <label class="custom-control-label" for="fullaccessno">No</label>
                            </div>
                              
                            <hr>

                            <h3>Lista de Permisos</h3>
                            @foreach ($permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                    <input disabled="none" type="checkbox" class="custom-control-input"  id="permission_{{$permission->id}}" value="{{$permission->id}}" name="permission[]"
                                    @if (is_array(old('permission')) && in_array("$permission->id",old('permission')))
                                        checked
                                    @elseif (is_array($permission_role) && in_array("$permission->id", $permission_role))
                                        checked    
                                    @endif

                                    >
                                    <label class="custom-control-label" for="permission_{{$permission->id}}">
                                        {{ $permission->id }} - {{ $permission->name }} <em>( {{ $permission->description }} )</em>
                                    </label>
                                </div>
                            @endforeach
                            <hr>
                            <a class="btn btn-success float-right" href="{{ route('role.edit',$role->id) }}">Edit</a>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
