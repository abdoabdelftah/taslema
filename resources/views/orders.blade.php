@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table id="order-listing" class="table">
                    <thead>
                        <tr>



                            <th>الرقم</th>

                            <th>المكان</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dat)
                            <tr>
                                <td>{{ $dat->id }}</td>
                                <td>{{ $dat->location }}</td>

                                <td>
                                    <a href="{{ url('order/' . $dat->id) }}" class="btn btn-outline-primary">تفاصيل</a>
                                </td>

                                <td>
                                    <a href="{{ url('order/edit/' . $dat->id) }}" class="btn btn-outline-primary">تعديل</a>
                                </td>


                                <td>
                                    <a href="{{ url('order/delete/' . $dat->id) }}"
                                        onclick="return confirm('هل انت متأكد من رغبتك فى المسح نهائيا?')"
                                        class="btn btn-danger">حذف<i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <div class="d-flex justify-content-center">
                        <?php //echo $data->render();
                        ?>

                    </div>
                </table>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>

@stop
