@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Solicitudes</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Solicitudes de clientes</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Usuario</th>
                  <th>Aceptar solicitud</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  @foreach($customers_pending as $custom)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$custom->name}}</strong></td>
                    <td>{{$custom->email}}</td>
                    <td>{{$custom->user}}</td>
                    <td>
                        <form action="{{ route('admin.accept.customer') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$custom->id}}">
                            <input type="checkbox" onclick="submit()">
                        </form>
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