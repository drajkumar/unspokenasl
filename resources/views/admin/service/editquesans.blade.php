@extends('layouts.app')

@section('title','Question and answer')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h2 class="h2">Edit: {{$question->question}}</h2>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <a href='{{url("/admin/questionandanswerview")}}' class="btn btn-sm btn-outline-secondary">
              <span data-feather="arrow-left"></span>
              Back &nbsp;&nbsp;
            </a>
			  
			</div>
            
		</div>
		
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
						<div class="row mb-4">
							<div class="col-xl-9 col-xxl-9 col-lg-9 col-sm-9">
								<div class="card overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4 mb-4">
          <form action="{{ route('updatequeans.submit')}}" method="POST">
            @csrf
      
        <div class="form-group">
          <label for="introtitle" class="text-left">Question:</label>
          <input type="text" class="form-control" id="question" name="question" value="{{$question->question}}" aria-describedby="question" placeholder="Enter Question" required>
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Answer:</label>
        <textarea class="form-control" id="summernote1" name="answer" rows="4" placeholder="Enter Answer" required>
        {{$question->answer}}
        </textarea>
        </div>
        
        </div>

        <input type="hidden" name="qaid" value="{{$question->id}}">

     
   
       
        <button type="submit" class="btn btn-success">Update</button>
   
      </form>
		
						
					
    
	</main>



 @endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
         $(document).ready(function() {
  
            $('#summernote1').summernote({
                placeholder: 'Enter Answer',
                tabsize: 2,
                height: 180
            });
       
        });
    </script>
@endpush