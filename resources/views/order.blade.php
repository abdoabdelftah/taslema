@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-12">
            <div class="table-responsive">

                <h2> المكان : {{ $data->location }} </h2>
                <hr>

                <h2> تفاصيل الطلب :
                    @foreach ($data->oitems as $item)
                        <div> اسم المنتج: {{ $item->name }} </div>

                        <div> سعر المنتج: {{ $item->price }} </div>
                        <hr>
                    @endforeach
                </h2>



                <h2> تفاصيل صاحب الطلب :
                    <div> الاسم: {{ $data->ousers->name }} </div>

                    <div> رقم الهاتف: {{ $data->ousers->phone_number }} </div>

                </h2>

            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>

@stop
