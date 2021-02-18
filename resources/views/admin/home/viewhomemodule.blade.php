@extends('layouts.app')

@section('title','Unspoken Home')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
  <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/home') }}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav mt-3">
    <ul class="navbar-nav">
      <li class="nav-item active ml-2">
        <a class="nav-link" href="{{ url('/admin/home') }}">Home slider <span class="sr-only">(current)</span></a>
      </li>
 
       <li class="nav-item active ml-2">
        <a class="nav-link" href="{{ url('/admin/homepagemodule') }}">Home Page module
         <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active ml-2">
        <a class="nav-link" href="{{ url('/admin/clientsliderview') }}">Clients Trust Slider
         <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

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

  




        </div>
        <br/>
     
  
       {{ $pagemodule->links() }}
		</div>

    
						
				
	</main>


<!-- Modal -->



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
          <input type="hidden" name="redirceturl" value="/admin/homepagemodule">
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
