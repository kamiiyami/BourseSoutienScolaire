@extends('admin.admin_master')
@section('admin')

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('admin.body.header')

        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-body">
                <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Ajouter Cours</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 

		<div class="form-group">
		<h5>Titre <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="name" name="titre" id="titre" style="width: 400px;" class="form-control" > 
	 @error('titre')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	  </div>
		 
	</div>
 
	 
		
	<div class="form-group">
		<h5>Description <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="name" name="description" id="description" style="width: 600px; height: 400px;" class="form-control"  >
      @error('description')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	   </div>
		 
	</div>
 
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-info mb-5" value="Ajouter">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
                </div>
            </div>
                    
        </div>

        
    </div>
    @include('admin.body.footer')
    
    
</div>

@endsection