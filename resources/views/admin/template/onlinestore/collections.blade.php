@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')

<main>
		<div class="main-wrapper ">
			<div class="main-container">
				<div class="main-container-inner">
					<div class="container-fluid">
						<!-- admin-status-row start -->
						<div class="container">
							<div class="row clearfix text-left">
								<div class="col-md-12 p-4">
									<div class="card">
										<div class="card-header text-center">
											<h2>Collections</h2>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-6">
													<a href="{{ route('collection.create')}}" id="add" class="btn btn-info mb-3">Add Collection</a>
												</div>
												<div class="col-md-6 text-right">
													<div class="row">
													<!-- Search-Box -->
													<div class="col-md-6">
													<form action ="/search" method="get">
														<div class="input-group">
															<input type="text" name="search" id="search_value" class="form-control border-black border-1" placeholder="Search">
															<span class="input-group-prepend">
															<a href="#" class="btn btn-primary" id="search-btn">Search</a>   
															</span> 
														</div>
													</form>	
													</div>
													<div class="col-md-6">
													<select id="cat" name="cat" class="p-1 rounded">
														<option value="name">Title</option>
														<option value="description">Product Count</option>
													</select>
													</div>
													 <!-- Select-Box -->
													 </div>
												</div>
					
											</div>
									<table class="table table-bordered table-striped ">
									<thead>
										<tr>
											<th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Title</a></th>
											<th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Product country</a></th>
											<th scope="col" ></th>
											<th scope="col" ></th>  
										</tr>
									</thead>
									<tbody>
											@foreach($collections as $collection)
											<tr>
											<td scope="col">{{$collection->collection_name}}</td>
											<td>1</td>
											<td class="text-center"><a href="" id="" onclick="" class="btn btn-success" id="edit" name="edit" data-toggle="modal" data-target="#editmodal">EDIT</a></td>
											<td class="text-center"><a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete" onclick="">DELETE</a></td>
											</tr>
											@endforeach
									</tbody> 
									</table>
									</div>	
								</div>
							</div>
						</div>
            </div>

@include('admin.template.partials.footer')