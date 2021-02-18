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

      	

 






       

    





      

	</div>
						
					
	 
    
	</main>

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