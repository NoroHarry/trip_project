@extends('admin.layout.master')
@section('main_content')
@include('admin.layout.nav')
@include('admin.layout.sidebar')
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Edit Tour</h1>
            <div class="ml-auto">
                <a href="{{ route('admin_tour_index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin_tour_edit_submit',$tour->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select Package *</label>
                                            <select name="package_id" class="form-select">
                                                @foreach($packages as $package)
                                                <option value="{{ $package->id }}" @if($tour->package_id == $package->id) selected @endif>{{ $package->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Total Seat *</label>
                                            <input type="text" name="total_seat" class="form-control" value="{{ $tour->total_seat }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Tour Start Date *</label>
                                            <input id="datepicker1" type="text" name="tour_start_date" class="form-control" value="{{ $tour->tour_start_date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Tour End Date *</label>
                                            <input id="datepicker2" type="text" name="tour_end_date" class="form-control" value="{{ $tour->tour_end_date }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Booking End Date *</label>
                                            <input id="datepicker3" type="text" name="booking_end_date" class="form-control" value="{{ $tour->booking_end_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection