@extends('layouts.app')

@section('title','Join our team')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     
      <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
        <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/join-our-team') }}">Join our team</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav mt-3">
          <ul class="navbar-nav">
             <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/join-our-team') }}">Join our team Intro <span class="sr-only">(current)</span></a>
            </li>

             <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/interpreter-promise') }}">Join our team / Interpreter Promise module

              <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/join-application') }}">Application
              <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>




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


      	

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Join us our team page module</h1>
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
                                <a href='{{url("/admin/editinterpro/{$pagemodule->id}")}}' class="btn btn-sm btn-info mt-1 getpagemoduleinfo">
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
					</div><br/>
                    {{ $pagemodules->links()}}
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
        <input type="hidden" name="redirceturl" value="/admin/interpreter-promise">
        <input type="hidden" name="pagename" value="interpreter-promise">
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
          <input type="hidden" name="redirceturl" value="/admin/interpreter-promise">
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


@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#summernote').summernote({
            //     placeholder: 'Enter Description',
            //     tabsize: 2,
            //     height: 150
            // });

            $('#summernote1').summernote({
                placeholder: 'Enter Description',
                tabsize: 2,
                height: 180
            });

            

            // $('.getserviceedit').click(function() {
    
            // var getceditid = $(this).attr('service-id');
            // var getcedittitle = $(this).attr('servicename-id');
            // var getceditoldimg = $(this).attr('serviceoldimg-id');

            // var setoldimage = "{{ asset('')}}images/service/"+getceditoldimg 

            // $("#setoldimage").attr("src", setoldimage);
            
            // $('#oldimg').val(getceditoldimg);
            // $('#stitle').val(getcedittitle);
          
            // $('#serviceeditid').val(getceditid);
          

            //  });

          $('.delpagemoduleclass').click(function() {
            
            var getdelid = $(this).attr('pagemodule-id');
           
            $('#delpageid').val(getdelid);
          

          });
        });
    </script>
@endpush