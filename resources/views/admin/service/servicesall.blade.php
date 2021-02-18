@extends('layouts.app')

@section('title','Services')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
        <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/service') }}">Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav mt-3">
          <ul class="navbar-nav">
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/service') }}">Service Intro <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/servicepagemoduleview') }}">Service Page module
              <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/serviceallview') }}">Services

              <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>





	<div class="content-body">
			 <!-- row -->
  

      	



  




       

      <div class="container-fluid">
				



       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Services</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          
          </div>
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addservice">
          <span data-feather="plus-square"></span>
          Add Services
          </button>
        </div>
      </div>

     	@if(session('servicecreatesuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('servicecreatesuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('updatservice'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('updatservice')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

      

      <div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12 mb-3">
						<div class="card overflow-hidden">

                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Image</th>
                              <th scope="col">Service module / Seetting</th>
                              <th scope="col" class="text-center w-25">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                           $x = 0;
                          ?>
                            @foreach($services as $service)
                            <?php $x++ ?>
                              <tr>
                              <th scope="row">{{$x}}</th>
                              <td>{{$service->name}}</td>
                              
                     
                              <td><img src="{{asset('')}}images/service/{{$service->image}}" width=100 height=100></td>
                              <td>
                              <a href='{{ url("admin/servicemoduleview/{$service->id}")}}' class="nav-link" style="font-size: 17px;">Add service module</a>
                              <a href='{{ url("admin/servicesetting/{$service->id}")}}' class="nav-link" style="font-size: 17px;">Add service setting</a>
                              </td>
                              <td class="text-center w-25">
                                <button type="button" class="btn btn-sm btn-info getserviceedit" service-id="{{$service->id}}" servicename-id="{{$service->name}}" serviceoldimg-id="{{$service->image}}"  data-toggle="modal" data-target="#serviceedit">
                                  <span data-feather="edit"></span> Edit
                                </button>
                                <!-- <button type="button" class="btn btn-sm btn-danger mt-1 delpagemoduleclass" pagemodule-id="{{$service->id}}" data-toggle="modal" data-target="#">
                                  <span data-feather="trash"></span> Delete
                                </button> -->
                                            

 
                              </td>
                              </tr>
                              <tr>
                            @endforeach  
                              
                          </tbody>
                          </table>
                      </div>
									
						</div>
						</div>
					</div>
				</div><br/>


              {{$services->links()}}
            
        
			</div>
	</div>
						
					
	 
    
	</main>





  <!-- Modal create service -->
<div class="modal fade" id="addservice" tabindex="-1" role="dialog" aria-labelledby="addserviceLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('service.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addserviceLabel">Add services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="introtitle" class="text-left">Title:</label>
          <input type="text" class="form-control" id="title" name="title" value="" aria-describedby="title" placeholder="Title" required>
        </div>


        <div class="custom-file">
          <label for="customFile">Choose Image:</label>
          <input type="file" id="customFile" name="image" required>
         
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit service -->
<div class="modal fade" id="serviceedit" tabindex="-1" role="dialog" aria-labelledby="serviceeditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('editservice.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="serviceeditLabel">Edit services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="introtitle" class="text-left">Title:</label>
          <input type="text" class="form-control" id="stitle" name="title" value="" aria-describedby="title" placeholder="Title" required>
        </div>


        <div class="custom-file">
          <label for="customFile">Choose Image:</label>
          <input type="file" id="customFile" name="image">
          
        </div> 
        <input type="hidden" id="oldimg" name="oldimg" value="">
        <p class="mt-2 ml-2">posted image:</p>
        <img id="setoldimage" src="" alt="..." class="img-thumbnail ml-2" width=150 height="150"><br/> 
        <input type="hidden" name="serviceeditid" id="serviceeditid" value="">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter Description',
                tabsize: 2,
                height: 150
            });

            $('#summernote1').summernote({
                placeholder: 'Enter Description',
                tabsize: 2,
                height: 180
            });

            

            $('.getserviceedit').click(function() {
    
            var getceditid = $(this).attr('service-id');
            var getcedittitle = $(this).attr('servicename-id');
            var getceditoldimg = $(this).attr('serviceoldimg-id');

            var setoldimage = "{{ asset('')}}images/service/"+getceditoldimg 

            $("#setoldimage").attr("src", setoldimage);
            
            $('#oldimg').val(getceditoldimg);
            $('#stitle').val(getcedittitle);
          
            $('#serviceeditid').val(getceditid);
          

             });

          $('.delpagemoduleclass').click(function() {
            
            var getdelid = $(this).attr('pagemodule-id');
           
            $('#delpageid').val(getdelid);
          

          });
        });
    </script>
@endpush