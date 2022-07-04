@extends('layouts.kt')

@section('template_title')
    {{ Auth::user()->name }}'s' Homepage
@endsection

@section('page_css')
        <!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{url('/')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{url('/')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
@endsection



@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Makundi ya Bidhaa Store</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Primary button-->
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Ongeza Kundi la Aina ya Bidhaa</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">

								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">

									<!--begin::Col-->
									<div class="col-xl-12 mb-5 mb-xl-12">
										<!--begin::Table Widget 4-->
										<div class="card card-flush h-xl-100">
											<!--begin::Card header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Makundi ya Bidhaa</span>
												</h3>
												<!--end::Title-->
												<!--begin::Actions-->
												<div class="card-toolbar">
													<!--begin::Filters-->
													<div class="d-flex flex-stack flex-wrap gap-4">
														<!--begin::Destination-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-gray-400 fs-7 me-2">Cateogry</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="a">Category A</option>
																<option value="b">Category A</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Destination-->
														<!--begin::Status-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-gray-400 fs-7 me-2">Status</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="Enabled">Enabled</option>
																<option value="Confirmed">Confirmed</option>
																<option value="Rejected">Rejected</option>
																<option value="Pending">Pending</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Status-->
														<!--begin::Search-->
														<div class="position-relative my-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
															<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
														</div>
														<!--end::Search-->
													</div>
													<!--begin::Filters-->
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-2">
												<!--begin::Table-->
												<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
													<!--begin::Table head-->
													<thead>
														<!--begin::Table row-->
														<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
															<th class="min-w-100px">Bidhaa</th>
															<th class="text-end min-w-100px">Aina</th>
															<th class="text-end min-w-125px">Idadi Iliyopo</th>
															<th class="text-end min-w-100px">Unit</th>
															<th class="text-end min-w-100px">Alarm</th>
															<th class="text-end min-w-50px">Status</th>
															<th class="text-end"></th>
														</tr>
														<!--end::Table row-->
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody class="fw-bolder text-gray-600">
														<tr data-kt-table-widget-4="subtable_template" class="d-none">
															<td colspan="2">
																<div class="d-flex align-items-center gap-3">
																	<a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
																		<img src="#" data-kt-src-path="/metronic8/demo1/assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
																	</a>
																	<div class="d-flex flex-column text-muted">
																		<a href="#" class="text-gray-800 text-hover-primary fw-bolder" data-kt-table-widget-4="template_name">Product name</a>
																		<div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
																	</div>
																</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Cost</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_cost">1</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Qty</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_qty">1</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Total</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_total">name</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7 me-3">On hand</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_stock">32</div>
															</td>
															<td></td>
														</tr>
                                                        @foreach($asset_types as $asset_type)
														    <tr>
															<td>
																<a class="text-gray-800 text-hover-primary">{{$asset_type->name}}</a>
															</td>
															<td class="text-end">{{$asset_type->assets}}</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">{{$asset_type->quantity}}</a>
															</td>
															<td class="text-end">{{$asset_type->assets}}</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">{{number_format($asset_type->selling_price)}} TZS</span>
															</td>
															<td class="text-end">
																@if($asset_type->quantity <= 10)
																<span class="badge py-3 px-4 fs-7 badge-light-danger">
                                                                    Low on stock
																@else
																<span class="badge py-3 px-4 fs-7 badge-light-success">
                                                                    Available
																@endif
																</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
                                                        @endforeach

													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Table Widget 4-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->

							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>

    <!--begin::Modal - New Address-->
		<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="{{route('add_request')}}" method="post" id="kt_modal_new_address_form">
                        @csrf
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Ongeza aina Ya Bidhaa</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->

								<!--end::Notice-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2">Jina</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--end::Label-->
										<label class="required fs-5 fw-bold mb-2">Code</label>
										<!--end::Label-->
										<!--end::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="code" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
                                    <!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--end::Label-->
										<label class="required fs-5 fw-bold mb-2">Unit</label>
										<!--end::Label-->
										<!--end::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="unit" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->

                                <hr>
								<!--begin::Input group-->
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-bold mb-2">Unit in Bulk</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="" name="bulk_unit" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-bold mb-2">In Bulk Quantity</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="number" class="form-control form-control-solid" placeholder="" name="in_bulk_quantity" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->

							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>
		<!--end::Modal - New Address-->

@endsection

@section('page_js')
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{url('/')}}/assets//plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="{{url('/')}}/assets//plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{url('/')}}/assets//js/widgets.bundle.js"></script>
		<script src="{{url('/')}}/assets//js/custom/widgets.js"></script>
		<script src="{{url('/')}}/assets//js/custom/apps/chat/chat.js"></script>
		<script src="{{url('/')}}/assets//js/custom/intro.js"></script>
		<script src="{{url('/')}}/assets//js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="{{url('/')}}/assets//js/custom/utilities/modals/create-app.js"></script>
		<script src="{{url('/')}}/assets//js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
@endsection
