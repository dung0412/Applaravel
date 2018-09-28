 @extends('admin.layout.index')
 @section('content')

          
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active"></li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý Member</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                   
                        <div class="panel-body" style="position: relative;">
                            <a href="admin/user/add_user" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm mới</a>                
                            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                                <thead>
                                    <tr>                                
                                        <th data-sortable="true">ID</th>
                                        <th data-sortable="true">Name</th>
                                        <th data-sortable="true">Birthday</th>
                                        <th data-sortable="true">Height</th>
                                        <th data-sortable="true">Weight</th>
                                        <th data-sortable="true">Description</th>
                                        <th data-sortable="true">Class</th>
                                        <th data-sortable="true">Chi Tiết</th>
                                        <th data-sortable="true">Sửa</th>
                                        <th data-sortable="true">Xóa</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Member as $l_m)
                                    <tr style="height: 300px;">
                                        <td data-checkbox="true">{{$l_m->id}}</td>
                                        <td data-checkbox="true">{{$l_m->name}}<a href="#"></a></td>
                                        <td data-checkbox="true">
                                            {{$l_m->birthday}}
                                        </td>
                                        <td data-sortable="true">{{$l_m->height}}</td>
                                        <td data-sortable="true">
                                  {{$l_m->weight}}

                                        </td>                               
                                        <td data-sortable="true">
                                   {{$l_m->description}}

                                        </td>

                                        <td data-sortable="true">
                                  {{$l_m->memberClass->name}}
                                        </td>
                                        <td>
                                            <a href="admin/member/edit_member/{{$l_m->id}}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                                        </td>

                                        <td>
                                            <a href="admin/member/edit_member/{{$l_m->id}}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                                        </td>

                                        <td>
                                            <a href="{{$l_m->id}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                            <ul class="pagination" style="float: right;">
                                <li><a href="#"><<</a></li>
                                <li><a href="#"><</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">></a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

@endsection