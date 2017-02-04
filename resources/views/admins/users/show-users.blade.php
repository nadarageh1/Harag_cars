@extends('admins.layouts.master')

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
     
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                  <!--Head Of the Table-->
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <!--Body Of the Table-->
                <tbody>
                   @foreach($users as $user)
                  <tr>
                 <td>
                  {{ $user->name }}
                 </td>
                  <td>
                  {{ $user->email }}
                 </td>
                 <td>
                 {{ Html::linkAction('UserController@showUser', 'Show', array('id' => $user->id ), array('class' => 'btn btn-success btn btn-small ')) }}
                 {{ Html::linkAction('UserController@editUser', 'Edit', array('id' => $user->id ), array('class' => 'btn btn-info btn btn-small ')) }}
                 {{ Html::linkAction('UserController@deleteUser', 'Delete', array('id' => $user->id ), array('class' => 'btn btn-danger btn btn-small ',
                 'onclick'=>"return confirm('Are you sure you want to delete this user?');")) }}

                 </td>
                </tr>
                  @endforeach
                </tbody>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      
    <!-- /.content -->
  </div>
    @endsection

    @section('footer')
    @parent 
    @endsection