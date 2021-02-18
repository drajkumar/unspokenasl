@extends('layouts.app')

@section('title','Social Links')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
        <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/sociallink') }}">Social Links</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav mt-3">
          <ul class="navbar-nav">
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/sociallink') }}">Social Links <span class="sr-only">(current)</span></a>
            </li>
      

            
          </ul>
        </div>
      </nav>
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Social Links</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			 
			  <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
				<span data-feather="calendar"></span>
				This week
			  </button> -->
			</div>
		</div>
		 @if(session('socisuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('socisuccess')}}
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
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Linkedin</th>
                        <th scope="col" class="text-center">In Need of Services During</th>
                        <th scope="col" class="text-center">Email</th>
                       
                       
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        
                        <td class="text-center">{{$sociallink->linkedin}}</td>
                        <td class="text-center">{{$sociallink->twitter}}</td>
                        <td class="text-center">{{$sociallink->facebook}}</td>
                        
                        
                        <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#serviceintropage">
                          <span data-feather="edit"></span> Edit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="serviceintropage" tabindex="-1" role="dialog" aria-labelledby="serviceintropageLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content rounded-0">
                                <form action="{{ route('updatedsociallink.submit')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="serviceintropageLongTitle">Edit Social Links</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Linkedin:</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$sociallink->linkedin}}" aria-describedby="linkedin" placeholder="Enter Url" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Twitter:</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$sociallink->twitter}}" aria-describedby="twitter" placeholder="Enter Url" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Facebook:</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$sociallink->facebook}}" aria-describedby="facebook" placeholder="Enter Url" required>
                                    </div>

                                    


                                    

                                    
                                    <input type="hidden" name="linkid" value="{{ $sociallink->id }}">
                                


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
						
					
	 
    
	</main>



<!--  end create page module -->


  <!-- Modal delete page module -->

<!-- Modal -->
 

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
      
        });
    </script>
@endpush