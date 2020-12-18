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
													<a href="{{ route('add_product.create') }}" id="add" class="btn btn-info mb-3">Add Products</a>
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
                                                    <option value="name">Product</option>
													<option value="name">Inventory</option>
                                                    <option value="description">Price</option>
                                                    <option value="description">Collection</option>
													</select>
													</div>
													 <!-- Select-Box -->
													 </div>
												</div>
					
											</div>
                                        <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                            <th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Product</a></th>
                                                <th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Inventory</a></th>
                                                <th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Price</a></th>
                                                <th scope="col" colspan="1"><a href="#" class=" text-dark border-bottom border-dark">Collection</a></th>
                                                <th scope="col" ></th>
                                            <th scope="col" ></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="col"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center"><a href="" id="" onclick="" class="btn btn-success" id="edit" name="edit" data-toggle="modal" data-target="#editmodal">EDIT</a></td>
                                            <td class="text-center"><a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete" onclick="">DELETE</a></td>
                                        </tr>
                                    
                                        </tr>
                                        </tbody> 
                                        </table>
									</div>	
								</div>
							</div>
						</div>
            </div>

@include('admin.template.partials.footer')