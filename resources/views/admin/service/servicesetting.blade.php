@extends('layouts.app')

@section('title','Services')

@push('css')
    
@endpush

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Service setting for {{$services->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           <a href="{{url('/admin/service')}}" class="btn btn-sm btn-outline-secondary">
              <span data-feather="arrow-left"></span>
              Back &nbsp;&nbsp;
            </a>
          </div>
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addservicesetting">
          <span data-feather="plus-square"></span>
          Add service setting
          </button>
        </div>
      </div>

    	@if(session('serviceseetingcreatesuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('serviceseetingcreatesuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('serviceseetingupsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('serviceseetingupsuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif


         @if(session('serviceseetingdelsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('serviceseetingdelsuccess')}}
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
                              <th scope="col">Image</th>
                              <th scope="col" class="text-center w-25">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                           $x = 0;
                          ?>

                          @foreach($services->servicesettings as $setting)
                            
                            <?php $x++ ?>
                              <tr>
                              <th scope="row">{{$x}}</th>
                              <td>{{$setting->title}}</td>
                              <td><img src="{{asset('')}}images/service/{{$setting->image}}" width=150 height=150></td>
                              <td class="text-center w-25">
                                <button type="button" class="btn btn-sm btn-info mt-1 getseeting" setting-id="{{$setting->id}}" title-id="{{$setting->title}}" setoldimg-id="{{$setting->image}}" data-toggle="modal" data-target="#editservicesetting">
                                  <span data-feather="edit"></span> Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger mt-1 delservicesettingclass" servicesetting-id="{{$setting->id}}" data-toggle="modal" data-target="#settingdelete">
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
<div class="modal fade" id="addservicesetting" tabindex="-1" role="dialog" aria-labelledby="addservicesettingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('storeservicesetting.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addservicesettingLabel">Add service setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="introtitle" class="text-left">Title:</label>
          <input type="text" class="form-control" name="title" value="" aria-describedby="title" placeholder="Title" required>
        </div>

        

        <div class="custom-file">
          <label for="customFile">Choose Image:</label>
          <input type="file" id="customFile" name="image" required>
      
        </div>
        <input type="hidden" name="serviceid" value="{{$sid}}">
        
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


  <!-- Modal create page module -->
<div class="modal fade" id="editservicesetting" tabindex="-1" role="dialog" aria-labelledby="editservicesettingLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('editservicesettingstore.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="editservicesettingLabel">Edit service setting</h5>
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
          <input type="file" id="customFile" name="image">
         
        </div>
        <p class="mt-2 ml-2">posted image:</p>
        <img id="setoldimage" src="" alt="..." class="img-thumbnail ml-2" width=150 height="150"><br/> 
        <input type="hidden" name="serviceid" value="{{$sid}}">
        <input type="hidden" id="setid" name="setid" value="">
        <input type="hidden" id="oldimage" name="oldimage" value="">
        
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
  <div class="modal fade" id="settingdelete" tabindex="-1" role="dialog" aria-labelledby="settingdeleteledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('deleteservicesetting.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="settingdeleteledel">Delete service setting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delsettingid" name="delsettingid" value="">
          <input type="hidden" id="sid" name="sid" value="{{$sid}}">
          
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

    <script>
         $(document).ready(function() {
      
            

            $('.getseeting').click(function() {
    
            var getceditid = $(this).attr('setting-id');
            var getcedittitle = $(this).attr('title-id');
            var getceditoldimg = $(this).attr('setoldimg-id');

            var setoldimage = "{{ asset('')}}images/service/"+getceditoldimg 

            $("#setoldimage").attr("src", setoldimage);
            
             $('#oldimage').val(getceditoldimg);
             $('#title').val(getcedittitle);
          
             $('#setid').val(getceditid);
          

             });

          $('.delservicesettingclass').click(function() {
            
            var getdelid = $(this).attr('servicesetting-id');
           
            $('#delsettingid').val(getdelid);
          

          });
        });
    </script>
@endpush