@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Configurations') }}</div>
            <div class="card-body">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="{{ route('country.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-question-circle mr-2"></i>
                                <div>
                                    <h5>Country</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('banner.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-images mr-2"></i>
                                <div>
                                    <h5>Banner</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('supporting_partner.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-images mr-2"></i>
                                <div>
                                    <h5>Supporting Partners</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('category.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-tag mr-2"></i> <!-- Font Awesome icon for question -->
                                <div>
                                    <h5>Category</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('subcategory.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-tags mr-2"></i> <!-- Font Awesome icon for box -->
                                <div>
                                    <h5>Subcategory</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('brand.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-slack mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                <div>
                                    <h5>Brands</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('models.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-slack mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                <div>
                                    <h5>Models</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('subscription_package.list') }}" class="btn btn-info btn-custom" style="border-radius: 20px;">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-dollar-sign mr-2"></i> <!-- Font Awesome icon for dollar sign -->
                                <div>
                                    <h5>Subscription Packages</h5>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection