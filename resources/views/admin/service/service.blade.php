@extends('layouts.app')

@section('title','Services')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Service Intro</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			 
			  <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
				<span data-feather="calendar"></span>
				This week
			  </button> -->
			</div>
		</div>
		@if(session('pageintrosuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('pageintrosuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

                 @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                    <?php $x = 0; ?>
                        @foreach ($errors->all() as $error)
                        <?php $x++?>
                            <li>{{$x}}:{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

	<div class="content-body">
			 <!-- row -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-xxl-12">
              <div class="card overflow-hidden">

                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descrition</th>
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>{{$pageintro->title}}</td>
                        <td class="text-center">{!! $pageintro->description !!}</td>
                        
                        <td class="text-center w-25">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#serviceintropage">
                          <span data-feather="edit"></span> Edit
                        </button>

                        <!-- Modal -->
                      <div class="modal fade" id="serviceintropage" tabindex="-1" role="dialog" aria-labelledby="serviceintropageLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content rounded-0">
                          <form action="{{ route('pageintroedit.submit')}}" method="POST">
                          @csrf
                            <div class="modal-header">
                              <h5 class="modal-title" id="serviceintropageLabel">Edit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                              <label for="introtitle" class="text-left">Title:</label>
                              <input type="text" class="form-control" id="introtitle" name="introtitle" value="{{$pageintro->title}}" aria-describedby="title" placeholder="Title" required>
                              
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description:</label>
                                <textarea class="form-control" id="summernote" name="description" rows="4" required>
                                {{$pageintro->description }}
                                </textarea>
                              </div>
                              <input type="hidden" name="pageid" value="{{$pageintro->id}}">
                              <input type="hidden" name="redirceturl" value="/admin/service">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-info">Update</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                        </td>
                        </tr>
                      
                        
                    </tbody>
                    </table>
                </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

      	

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Page module</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          
          </div>
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addpagemodule">
          <span data-feather="plus-square"></span>
          Add page module
          </button>
        </div>
      </div>

    	@if(session('pagemodulesuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('pagemodulesuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('updatpmsec'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('updatpmsec')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('pagemoduledelsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('pagemoduledelsuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

       

      <div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="card overflow-hidden">

                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Descrition</th>
                              <th scope="col">Image</th>
                              <th scope="col" class="text-center w-25">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                           $x = 0;
                          ?>
                            @foreach($pagemodules as $pagemodule)
                            <?php $x++ ?>
                              <tr>
                              <th scope="row">{{$x}}</th>
                              <td>{{$pagemodule->title}}</td>
                              <td>{!! $pagemodule->description !!}</td>
                              <td><img src="{{asset('')}}images/pagemodule/{{$pagemodule->image}}" width=150 height=150></td>
                              <td class="text-center w-25">
                                <a href='{{"/admin/editpagemodule/{$pagemodule->id}"}}' class="btn btn-sm btn-info mt-1 getpagemoduleinfo">
                                  <span data-feather="edit"></span> Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-danger mt-1 delpagemoduleclass" pagemodule-id="{{$pagemodule->id}}" data-toggle="modal" data-target="#serviceintromoduledel">
                                  <span data-feather="trash"></span> Delete
                                </button>
                                            

 
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
				</div>



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
				</div>




        
			</div>
	</div>
						
					
	 
    
	</main>

  <!-- Modal create page module -->
<div class="modal fade" id="addpagemodule" tabindex="-1" role="dialog" aria-labelledby="addpagemoduleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('storepagemodule.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addpagemoduleLabel">Add page module</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="introtitle" class="text-left">Title:</label>
          <input type="text" class="form-control" id="title" name="title" value="" aria-describedby="title" placeholder="Title" required>
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Description:</label>
        <textarea class="form-control" id="summernote1" name="description" rows="4" required>
        </textarea>
        </div>

        <div class="custom-file">
        <label for="customFile">Choose Image:</label>
          <input type="file" id="customFile" name="image" required>
          
        </div>
        <input type="hidden" name="redirceturl" value="/admin/service">
        <input type="hidden" name="pagename" value="our-services">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--  end create page module -->


  <!-- Modal delete page module -->

<!-- Modal -->
  <div class="modal fade" id="serviceintromoduledel" tabindex="-1" role="dialog" aria-labelledby="serviceintromoduledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('pagemoduledelete.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="serviceintromoduledel">Delete page module</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delpageid" name="delpageid" value="">
          <input type="hidden" name="redirceturl" value="/admin/service">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!--  end create page module -->


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