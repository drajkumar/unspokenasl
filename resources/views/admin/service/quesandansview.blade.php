@extends('layouts.app')

@section('title','Faq')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush


@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark mt-3">
        <a class="navbar-brand text-center pl-5 pr-5" href="{{ url('/admin/faq') }}">Faq</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav mt-3">
          <ul class="navbar-nav">
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/faq') }}">Faq page module <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item active ml-2">
              <a class="nav-link" href="{{ url('/admin/questionandanswerview') }}">Question and answer
              <span class="sr-only">(current)</span></a>
            </li>

            
          </ul>
        </div>
      </nav>





	<div class="content-body">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-5 border-bottom">
        <h1 class="h2">Question and answer</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          
          </div>
          <a href="{{ url('/admin/question_and_answer')}}" class="btn btn-sm btn-success">
          <span data-feather="plus-square"></span>
          Add question and answer
          </a>
        </div>
      </div>

    	@if(session('qesanssavesucc'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('qesanssavesucc')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('qesansupsucc'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('qesansupsucc')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        @if(session('qesansdelsucc'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{session('qesansdelsucc')}}
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
                              <th scope="col">Question</th>
                              <th scope="col">Answer</th>
                              <th scope="col" class="text-center w-25">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                           $x = 0;
                          ?>
                            @foreach($fquestions as $ques)
                            <?php $x++ ?>
                              <tr>
                              <th scope="row">{{$x}}</th>
                              <td>{{$ques->question}}</td>
                              <td>{!! $ques->answer !!}</td>
                              <td class="text-center w-25">
                                <a href='{{url("/admin/editquestion_and_answer/{$ques->id}")}}' class="btn btn-sm btn-info mt-1">
                                  <span data-feather="edit"></span> Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-danger mt-1 delpagemoduleclass" pagemodule-id="{{$ques->id}}" data-toggle="modal" data-target="#serviceintromoduledel">
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
          {{$fquestions->links()}}
	</div>
						
					
	 
    
	</main>



<!--  end create page module -->


  <!-- Modal delete page module -->

<!-- Modal -->
  <div class="modal fade" id="serviceintromoduledel" tabindex="-1" role="dialog" aria-labelledby="serviceintromoduledel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
      <form action="{{ route('deletequesans.submit')}}" method="POST">
      @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="serviceintromoduledel">Delete question and answer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure delete this?...</P>
          <input type="hidden" id="delpageid" name="delpageid" value="">
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