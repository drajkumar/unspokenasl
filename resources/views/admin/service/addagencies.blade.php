@extends('layouts.app')

@section('title','Add Agencies page module')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h2 class="h2">Add Agencies page module</h2>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <a href='{{url("/admin/home")}}' class="btn btn-sm btn-outline-secondary">
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
            <form action="{{ route('storepagemodule.submit')}}" method="POST" enctype="multipart/form-data">
             @csrf
      
            <div class="form-group">
            <label for="introtitle" class="text-left">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" aria-describedby="title" placeholder="Title" required>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Description:</label>
            <textarea class="form-control" id="summernote1" name="description" rows="4" required>
            {{ old('description') }}
            </textarea>
            </div>


            <div class="custom-file">
            <label for="customFile">Choose file</label>
            <input type="file" id="customFile" name="image" required>
            
            </div>
            
    
            <input type="hidden" name="redirceturl" value="/admin/agencies">
            <input type="hidden" name="pagename" value="agencies">
         </div>

     
   
       
          <button type="submit" class="btn btn-success">Save</button>
   
         </form>
		
						
					
    
	</main>



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
                height: 200
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

        //   $('.delpagemoduleclass').click(function() {
            
        //     var getdelid = $(this).attr('pagemodule-id');
           
        //     $('#delpageid').val(getdelid);
          

        //   });
        });
    </script>
@endpush