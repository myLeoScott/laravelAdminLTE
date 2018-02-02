@extends('admin.layout.app')
@section('content_nav')
{{trans('admin.index')}}
@endsection
@section('content_nav1')

@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{trans('admin.users')}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>{{trans('admin.uId')}}</th>
                    <th>{{trans('admin.uName')}}</th>
                    <th>{{trans('admin.uCreateTime')}}</th>
                    <th>{{trans('admin.uUpdateTime')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                </tr>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                </tr>

                <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                </tr>
                <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>{{trans('admin.uId')}}</th>
                    <th>{{trans('admin.uName')}}</th>
                    <th>{{trans('admin.uCreateTime')}}</th>
                    <th>{{trans('admin.uUpdateTime')}}</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
