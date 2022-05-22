@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Eventos</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Añadir evento</h5>
          <div class="table-responsive text-nowrap">
            <form action="{{ route('admin.events.update') }}" method="post">
              @csrf
              <div class="row" style="margin-left:1em;">
                  <div class="col-6">
                    <label for="defaultFormControlInput" class="form-label">Titulo</label>
                    <input
                      type="text"
                      class="form-control"
                      id="defaultFormControlInput"
                      aria-describedby="defaultFormControlHelp"
                      name="title"
                      value={{$event->title}}
                    />
                  </div>
                  <div class="col-3" style="margin-top:-0.4em;">
                      <label for="html5-date-input" class="col-md-2 col-form-label">fecha inicio</label>
                      <div class="col-md-10">
                        <input class="form-control" type="date" id="html5-date-input" name="initDate" value={{$event->initDate}} />
                      </div>
                  </div>
                  <div class="col-3" style="margin-top:-0.4em;">
                    <label for="html5-date-input" class="col-md-2 col-form-label">fecha final</label>
                    <div class="col-md-10">
                      <input class="form-control" type="date" id="html5-date-input" name="finishDate" value={{$event->finishDate}} />
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-left:1em;">
                  <div class="col-10">
                    <textarea name="description" id="description">{!!$event->description!!}</textarea>
                    <input type="hidden" name="event_id" value={{$event->id}} />
                  </div>
                  <div class="col-2">
                    <input type="submit" value="Editar evento">
                  </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@stop