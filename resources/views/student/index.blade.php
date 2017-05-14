@extends('common.layouts')

@section('content')
    @include('common.message')
    <div class="panel panel-default">
        <div class="panel-heading">学生列表</div>
        <div class="panel-body">
            <table class="table table-striped table-responsive table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$student->created_at}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->sex}}</td>
                    <td>
                        <a href="">详情</a>
                        <a href="">修改</a>
                        <a href="">删除</a>
                    </td>
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <nav>
        <div class="pull-right">
            {{$students->render()}}
        </div>

    </nav>
@stop