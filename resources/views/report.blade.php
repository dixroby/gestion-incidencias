@extends('layouts.app')

@section('content')

        <div class="card ">
                <div class="card-header ">Reportar</div>
                <div class="card-body">
                    <form action="">

                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control " name="category_id" id="exampleSelect1">

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="severirty">Severidad</label>
                            <select class="form-control" name="severirty" id="exampleSelect2">
                                <option value="M">Menor</option>
                                <option value="M">Normal</option>
                                <option value="M">Alta</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="title">Titulo</label>
                            <input type="text" value="" class="form-control" placeholder="Titulo" id="inputDefault">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control "  id="exampleTextarea" ></textarea>
                        </div>

                        <button type="button" class="btn btn-primary">Registrar Incidencia</button>

                    </form>
                </div>
            </div>
@endsection
