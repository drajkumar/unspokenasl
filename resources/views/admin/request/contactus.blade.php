@extends('layouts.app')

@section('title','Contact us')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
        <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/contactus') }}">Contact us</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav mt-3">
          <ul class="navbar-nav">
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/contactus') }}">Contact us info <span class="sr-only">(current)</span></a>
            </li>
      

            
          </ul>
        </div>
      </nav>
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Contact us info</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			 
			  <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
				<span data-feather="calendar"></span>
				This week
			  </button> -->
			</div>
		</div>
		 @if(session('contactsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('contactsuccess')}}
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
                        <th scope="col" class="text-center">Office Hours</th>
                        <th scope="col" class="text-center">In Need of Services During</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Address</th>
                       
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        
                        <td class="text-center">{{$contactus->office_hour}}</td>
                        <td class="text-center">{{$contactus->need_service}}</td>
                        <td class="text-center">{{$contactus->email}}</td>
                        <td class="text-center">{{$contactus->phone}}</td>
                        <td class="text-center">{!! $contactus->address !!}</td>
                        
                        <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#serviceintropage">
                          <span data-feather="edit"></span> Edit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="serviceintropage" tabindex="-1" role="dialog" aria-labelledby="serviceintropageLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content rounded-0">
                                <form action="{{ route('storecontactinfo.submit')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="serviceintropageLongTitle">Edit Contact info</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Office Hours:</label>
                                    <input type="text" class="form-control" id="hours" name="hours" value="{{$contactus->office_hour}}" aria-describedby="hours" placeholder="Enter Office Hours" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">In Need of Services During:</label>
                                    <input type="text" class="form-control" id="needservice" name="needservice" value="{{$contactus->need_service}}" aria-describedby="needservice" placeholder="Enter In Need of Services During" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$contactus->email}}" aria-describedby="email" placeholder="Enter Email" required>
                                    </div>

                                    <div class="form-group">
                                    <label for="introtitle" class="text-left">Phone:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$contactus->phone}}" aria-describedby="phone" placeholder="Enter Phone number" required>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address:</label>
                                    <textarea class="form-control" id="summernote" name="address" rows="4" required>
                                    {!! $contactus->address !!}
                                    </textarea>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Map:</label>
                                    <textarea class="form-control" name="map" rows="4" required> {{ $contactus->map }}</textarea>
                                    </div>
                                    <input type="hidden" name="contactid" value="{{ $contactus->id }}">
                                


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


              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Contact us Image</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
			 
			  <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
				<span data-feather="calendar"></span>
				This week
			  </button> -->
			</div>
		</div>
		 @if(session('conimgsuccess'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('conimgsuccess')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
              <div class="card overflow-hidden">

                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th scope="col" class="text-center">#</th>
                        
                        <th scope="col" class="text-center">Image</th>
                       
                        <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        
                        <td class="text-center"><img src="{{ asset('')}}images/pagemodule/{{$pageintro->image}}" width="200" height="200"></td>
                        
                        
                        <td class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#contactimage">
                          <span data-feather="edit"></span> Edit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="contactimage" tabindex="-1" role="dialog" aria-labelledby="contactimageLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content rounded-0">
                                <form action="{{ route('editcontactmodule.submit')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contactimageLongTitle">Edit Contact page image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                 <div class="custom-file">
                                    <label for="customFile">Choose file</label>
                                    <input type="file" id="customFile" name="image">
                                </div>    
                                    <p class="ml-4">posted images:</p>
                                    <img src="{{ asset('')}}images/pagemodule/{{$pageintro->image}}" alt="..." class="img-thumbnail ml-4" width=150 height="150"><br/> 
                                    <input type="hidden" name="contactmid" value="{{$pageintro->id}}">
                                    <input type="hidden" name="oldimg" value="{{$pageintro->image}}">
                                


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