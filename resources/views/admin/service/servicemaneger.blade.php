@extends('layouts.app')

@section('title','Services')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Service module for {{$services->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{url('/admin/service')}}" class="btn btn-sm btn-outline-secondary">
              <span data-feather="arrow-left"></span>
              Back &nbsp;&nbsp;
            </a>
          </div>
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addpagemodule">
          <span data-feather="plus-square"></span>
          Add service module
          </button>
        </div>
      </div>

    	@if(session('servicemoducreatesuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('servicemoducreatesuccess')}}
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


         @if(session('updatservicemodule'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('updatservicemodule')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('delservicemodule'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('delservicemodule')}}
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

                          @foreach($services->servicemodule as $module)
                            
                            <?php $x++ ?>
                              <tr>
                              <th scope="row">{{$x}}</th>
                              <td>{{$module->title}}</td>
                              <td>{!! $module->description !!}</td>
                              <td><img src="{{asset('')}}images/service/{{$module->image}}" width=150 height=150></td>
                              <td class="text-center w-25">
                                <a href='{{url("/admin/editservicemoduleview/{$id}/{$module->id}")}}' class="btn btn-sm btn-info mt-1 getpagemoduleinfo">
                                  <span data-feather="edit"></span> Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-danger mt-1 delservicemoduleclass" servicemodule-id="{{$module->id}}" data-toggle="modal" data-target="#servicemoduledel">
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


</main>
  <!-- Modal create page module -->
<div class="modal fade" id="addpagemodule" tabindex="-1" role="dialog" aria-labelledby="addpagemoduleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('storeservicemodule.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addpagemoduleLabel">Add service module</h5>
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
          <input type="file" class="custom-file-input" id="customFile" name="image" required>
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <input type="hidden" name="serviceid" value="{{$id}}">
        
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
  <div class="modal fade" id="servicemoduledel" tabindex="-1" role="dialog" aria-labelledby="servicemoduledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('deleteservicemodule.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="servicemoduledel">Delete service module</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delpageid" name="delpageid" value="">
          <input type="hidden" id="sid" name="sid" value="{{$id}}">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
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
        //     $('#summernote').summernote({
        //         placeholder: 'Enter Description',
        //         tabsize: 2,
        //         height: 150
        //     });

            $('#summernote1').summernote({
                placeholder: 'Enter Description',
                tabsize: 2,
                height: 180
            });

            

        //     $('.getserviceedit').click(function() {
    
        //     var getceditid = $(this).attr('service-id');
        //     var getcedittitle = $(this).attr('servicename-id');
        //     var getceditoldimg = $(this).attr('serviceoldimg-id');

        //     var setoldimage = "{{ asset('')}}images/service/"+getceditoldimg 

        //     $("#setoldimage").attr("src", setoldimage);
            
            
        //     $('#stitle').val(getcedittitle);
          
        //     $('#serviceeditid').val(getceditid);
          

        //      });

          $('.delservicemoduleclass').click(function() {
            
            var getdelid = $(this).attr('servicemodule-id');
           
            $('#delpageid').val(getdelid);
          

          });
        });
    </script>
@endpush