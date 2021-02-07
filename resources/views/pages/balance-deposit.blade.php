@extends('layouts.header')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark">Balance Deposit</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
      <div class="col-md-6">
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Account Number:</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Account Number">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Amount To Be Deposited:</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your Amount">
        </div>
        <div class="form-group">
          <label for="birthday">Date:</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
           <input type="submit" value="Submit">
        </div>

      </form>
      </div>
      </div>

    </section>

</div>    

@endsection