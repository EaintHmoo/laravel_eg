@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.branch.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.branches.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="required" for="name">{{ trans('cruds.branch.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.branch.fields.name_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="user_id">{{ trans('cruds.branch.fields.user') }}</label>
                    <select class="form-control select2 {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                        @foreach($users as $id => $entry)
                            <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('user_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.branch.fields.user_helper') }}</span>
                </div>
            </div>
            <div class="form-group mt-2">
                <button class="btn btn-success" type="submit">
                    {{ trans('global.save') }}
                </button>
                <a onclick=history.back() class="btn btn-secondary text-white ms-2">Cancel</a>
            </div>
        </form>
    </div>
</div>



@endsection
