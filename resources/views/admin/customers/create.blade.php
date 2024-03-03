@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.customer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="required" for="attention_person">{{ trans('cruds.customer.fields.attention_person') }}</label>
                    <input class="form-control {{ $errors->has('attention_person') ? 'is-invalid' : '' }}" type="text" name="attention_person" id="attention_person" value="{{ old('attention_person', '') }}" required>
                    @if($errors->has('attention_person'))
                        <div class="invalid-feedback">
                            {{ $errors->first('attention_person') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.customer.fields.attention_person_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="factory_name">{{ trans('cruds.customer.fields.factory_name') }}</label>
                    <input class="form-control {{ $errors->has('factory_name') ? 'is-invalid' : '' }}" type="text" name="factory_name" id="factory_name" value="{{ old('factory_name', '') }}" required>
                    @if($errors->has('factory_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('factory_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.customer.fields.factory_name_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="address">{{ trans('cruds.customer.fields.address') }}</label>
                    <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" required>{{ old('address') }}</textarea>
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.customer.fields.address_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="phone">{{ trans('cruds.customer.fields.phone') }}</label>
                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.customer.fields.phone_helper') }}</span>
                </div>
                <div class="form-group col-md-4">
                    <label class="required" for="email">{{ trans('cruds.customer.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', '') }}" required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.customer.fields.email_helper') }}</span>
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
