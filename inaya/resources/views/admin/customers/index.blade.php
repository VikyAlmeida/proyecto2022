@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Clientes</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Listado de clientes</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Usuario</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @foreach($customers as $custom)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$custom->name}}</strong></td>
                    <td>{{$custom->email}}</td>
                    <td>{{$custom->user}}</td>
                    <td>
                        {!!$custom->estadospan!!}
                    </td>
                    <td>
                      
                          @if($custom->estado == "aceptado")
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Cancelar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Banear</a>
                          @elseif($custom->estado == "en espera")
                            <form action="{{ route('admin.accept.customer') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$custom->id}}">
                                <input type="checkbox" onclick="submit()">
                            </form>
                          @elseif($custom->estado == "cancelado")
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Aceptarlo</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Banear</a>
                          @elseif($custom->estado == "baneado")
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Aceptar</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Cancelar</a>
                          @endif
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
@stop