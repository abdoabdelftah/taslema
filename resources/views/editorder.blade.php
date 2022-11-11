@extends('layouts.app')
@section('content')


    @error('location')
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror


    <form method="POST" class="pt-3" action="{{ route('edit.order') }}">
        @csrf
        <input type="hidden" name="id" class="form-control" value="{{ $data->id }}" aria-label="Username">
        <div class="form-group">
            <label>المكان</label>
            <input type="text" name="location" class="form-control" value="{{ $data->location }}" aria-label="Username">
        </div>



        <div class="mt-3">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"
                class="btn btn-primary">
                حفظ
            </button>

        </div>


    </form>

    </div>
    </div>
    </div>
    </div>








    </div>
    </div>
    </div>


    <!-- content-wrapper ends -->
@stop
