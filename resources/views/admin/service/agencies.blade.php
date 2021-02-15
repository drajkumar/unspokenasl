@extends('layouts.app')

@section('title','Agencies')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	
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

                    
                </div>
              </div>
            </div>
          </div>
        </div>

      	

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Agencies page module</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          
          </div>
          <a href="{{ url('/admin/addagencies')}}" class="btn btn-sm btn-success">
          <span data-feather="plus-square"></span>
          Add page module
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

       

      <div class="container-fluid mb-5">
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
                                <a href='{{url("/admin/editagencies/{$pagemodule->id}")}}' class="btn btn-sm btn-info mt-1 getpagemoduleinfo">
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



     

     

      

      

    
						
					
	 
    
	</main>




  <!-- Modal delete page module -->

<!-- Modal -->
  <div class="modal fade" id="serviceintromoduledel" tabindex="-1" role="dialog" aria-labelledby="serviceintromoduledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('pagemoduledelete.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="serviceintromoduledel">Delete agencies module</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delpageid" name="delpageid" value="">
          <input type="hidden" name="redirceturl" value="/admin/agencies">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!--  end delete page module -->

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

            



          $('.delpagemoduleclass').click(function() {
            
            var getdelid = $(this).attr('pagemodule-id');
           
            $('#delpageid').val(getdelid);
          

          });
        });
    </script>
@endpush