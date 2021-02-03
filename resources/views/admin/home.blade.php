@extends('layouts.app')

@section('title','Unspoken Home')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Home Slider</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <div class="btn-group mr-2">
				<!-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
			  </div>
			  <a class="btn btn-sm btn-success" href="{{ url('/admin/addslider')}}">
          <span data-feather="plus-square"></span>
          Add Slider
          </a>
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

		@if(session('pagemoduledelsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('pagemoduledelsuccess')}}
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

        @if(session('csliderstoresuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('csliderstoresuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('cslidereditsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('cslidereditsuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

         @if(session('csliderdeletesuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('csliderdeletesuccess')}}
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
                        <th scope="col">Url</th>
                        <th scope="col">Image</th>
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
              @php
              $x = 0;
              @endphp
					    @foreach($slider as $sl)
              @php
              $x++;
              @endphp
                        <tr>
                        <th scope="row">{{$x}}</th>
                        <td>{{$sl->title}}</td>
                        <td class="text-center">{!! $sl->description !!}</td>
						<td>{{$sl->url}}</td>
			        	<td class="text-center"><img src="{{asset('')}}images/pagemodule/{{$sl->image}}" width="120" height="80"></td>
                        
                        <td class="text-center w-25 ">
                        <a href='{{ url("/admin/slideredit/{$sl->id}")}}' class="btn btn-sm btn-info mt-1">
                          <span data-feather="edit"></span> Edit
                        </a>

						 <button type="button" class="btn btn-sm btn-danger mt-1 getsliderid" slider-id="{{$sl->id}}" data-toggle="modal" data-target="#sliderdeleteledel">
                          <span data-feather="trash"></span> Delete
                        </button>

                     
                        </td>
                        </tr>
                       @endforeach
                        
                    </tbody>
                    </table>
                </div>
                    
                </div>
              </div>
            </div>
          </div>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2"> Home Page module</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          <a class="btn btn-sm btn-success" href="{{ url('/admin/addhomemodule')}}">
          <span data-feather="plus-square"></span>
          Add home page module
          </a>
          </div>
          
        </div>
      </div>

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
                        <th scope="col">Url</th>
                        <th scope="col">Image</th>
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $x = 0;
                        @endphp
                        @foreach($pagemodule as $pagem)
                        @php
                        $x++;
                        @endphp
                        <tr>
                        <th scope="row">{{$x}}</th>
                        <td>{{$pagem->title}}</td>
                        <td class="text-center">{!! $pagem->description !!}</td>
						            <td>{{$pagem->url}}</td>
			                 	<td class="text-center"><img src="{{asset('')}}images/pagemodule/{{$pagem->image}}" width="120" height="80"></td>
                        
                        <td class="text-center w-25">
                        <a href='{{ url("/admin/homemodule/{$pagem->id}")}}' class="btn btn-sm btn-info mt-1" style="">
                          <span data-feather="edit"></span> Edit
                        </a>

					            <button type="button" class="btn btn-sm btn-danger mt-1 gethomemodule" homemodule-id="{{$pagem->id}}" data-toggle="modal" data-target="#homemoduledeleteledel">
                          <span data-feather="trash"></span> Delete
                        </button>

                     
                        </td>
                        </tr>
                       @endforeach
                        
                    </tbody>
                    </table>
                </div>
                    
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Clients Trust Slider</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
              </div>
              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addclientslider">
                <span data-feather="plus-square"></span>
                Add Clients Trust Slider
                </button>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12 col-xxl-12">
              <div class="card overflow-hidden">

                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="text-center">Image</th>
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $x = 0;
                        @endphp
                        @foreach($cslider as $csl)
                        @php
                        $x++;
                        @endphp
                        <tr>
                        <th scope="row">{{$x}}</th>
			                 	<td class="text-center"><img src="{{asset('')}}images/home/{{$csl->image}}" width="120" height="80"></td>
                        
                        <td class="text-center pr-4">
                        <button type="button" class="btn btn-sm btn-info mt-1 editcslid" cdelslider-id="{{$csl->id}}" coldimg-id="{{$csl->image}}" data-toggle="modal" data-target="#editclientslider">
                          <span data-feather="edit"></span> Edit
                        </button>
                        <button type="button" class="btn btn-sm btn-danger mt-1 getcdelslider" cdelslider-id="{{$csl->id}}" data-toggle="modal" data-target="#csliderdeleteledel">
                          <span data-feather="trash"></span> Delete
                        </button>

					            

                     
                        </td>
                        </tr>
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


<!-- Modal -->
  <div class="modal fade" id="sliderdeleteledel" tabindex="-1" role="dialog" aria-labelledby="sliderdeleteledelledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('pagemoduledelete.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="sliderdeleteledelledel">Delete slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delpageid" name="delpageid" value="">
          <input type="hidden" name="redirceturl" value="/admin/home">
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

<!-- Modal -->
  <div class="modal fade" id="homemoduledeleteledel" tabindex="-1" role="dialog" aria-labelledby="homemoduledeleteledelledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('pagemoduledelete.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="homemoduledeleteledelledel">Delete slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="setpageid" name="delpageid" value="">
          <input type="hidden" name="redirceturl" value="/admin/home">
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

<!--  end create Slider -->

<!-- Modal create client Slider -->
<div class="modal fade" id="addclientslider" tabindex="-1" role="dialog" aria-labelledby="addclientsliderLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('storeclientslider.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addclientsliderLabel">Add Clients Trust Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
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

<!-- Modal edit client Slider -->
<div class="modal fade" id="editclientslider" tabindex="-1" role="dialog" aria-labelledby="editclientsliderLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
    <form action="{{ route('editclientimg.submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="editclientsliderLabel">Edit Clients Trust Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="custom-file">
        <label for="customFile">Choose Image:</label>
          <input type="file" id="customFile" name="image" required>
        </div>
      </div>
      <input type="hidden" name="clintslidereditid" id="clintslidereditid" value="">
      <input type="hidden" id="oldimg" name="oldimg" value="">
      <p class="mt-2 ml-2">posted image:</p>
        <img id="setoldimage" src="" alt="..." class="img-thumbnail ml-2" width=150 height="150" mb-3><br/> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="csliderdeleteledel" tabindex="-1" role="dialog" aria-labelledby="csliderdeleteledelledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('deleteclintsl.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="csliderdeleteledelledel">Delete Clients Trust Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delcslid" name="delcslid" value="">
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
		$('#summernote').summernote({
			placeholder: 'Enter Description',
			tabsize: 2,
			height: 150
		});

		$('.getsliderid').click(function() {
            
            var getdelid = $(this).attr('slider-id');
           
            $('#delpageid').val(getdelid);
          

    });

    	$('.gethomemodule').click(function() {
            
            var getdelid = $(this).attr('homemodule-id');
       
            $('#setpageid').val(getdelid);
          

    });

       $('.editcslid').click(function() {
    
            var getceditid = $(this).attr('cdelslider-id');
            var getceditoldimg = $(this).attr('coldimg-id');

            var setoldimage = "{{ asset('')}}images/home/"+getceditoldimg 

            $("#setoldimage").attr("src", setoldimage);
            $('#oldimg').val(getceditoldimg);
            $('#clintslidereditid').val(getceditid);
          

      });

      		$('.getcdelslider').click(function() {
            
            var getdelid = $(this).attr('cdelslider-id');
           
            $('#delcslid').val(getdelid);
          

    });
	});
</script>

@endpush
