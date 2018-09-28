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
                    <h1 class="page-header">Quản lý User</h1>
                </div>
            </div><!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                   
                        <div class="panel-body" style="position: relative;">
                            <a href="admin/user/add_user" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">ADD user mới</a>                
                            <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                                <thead>
                                    <tr>                                
                                        <th data-sortable="true">ID</th>
                                        <th data-sortable="true">Name</th>
                                        <th data-sortable="true">Gender</th>
                                        <th data-sortable="true">Email</th>
                                        <th data-sortable="true">Facebook</th>
                                        <th data-sortable="true">Address</th>
                                        <th data-sortable="true">Chi Tiết</th>
                                        <th data-sortable="true">Sửa</th>
                                        <th data-sortable="true">Xóa</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($User as $l_u)
                                    <tr style="height: 300px;">
                                        <td data-checkbox="true">{{$l_u->id}}</td>
                                        <td data-checkbox="true">{{$l_u->name}}<a href="#"></a></td>
                                        <td data-checkbox="true">
                                            {{$l_u->gender==0?'Nữ':'Nam'}}
                                        </td>
                                        <td data-sortable="true">{{$l_u->email}}</td>
                                        <td data-sortable="true">
                                  {{$l_u->facebook}}

                                        </td>                               
                                        <td data-sortable="true">
                                   {{$l_u->address}}

                                        </td>

                                        <td data-sortable="true">
                                  {{$l_u->des}}
                                        </td>
                                        <td>
                                            <a href="admin/user/edit_user/{{$l_u->id}}}"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                                        </td>

                                        <td>
                                            <a href="{{$l_u->id}}"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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