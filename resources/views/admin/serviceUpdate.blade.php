@extends('admin.inc.layout')
@section('content')

<section class="max-w-7xl mx-auto py-4 px-5">
               @include('admin.inc.inner_title')

               <div class="my-3 p-5">

                <a href="{{route('service')}}" class="btn btn-sm btn-outline-primary my-3">Back</a>
                   <div class="card shadow rounded-sm">
                       <div class="card-header">
                           <p class="card-title">Update Service</p>   
                       </div>
                       <div class="card-body">

                        <div class="form">
                            <form action="{{route('updateService')}}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{$service->id}}">
                                <div class="form-group">
                                    <label for="avater" class=""> Icon Name</label>
                                    <input type="text" name="avater" id="avater" value="{{$service->icon}}" placeholder="service avater" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="title" class=""> Title</label>
                                    <input type="text" name="title" id="title" value="{{$service->title}}" placeholder=" service title" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group flex">
                                    <label for="description" class="mx-3"> Description</label>
                                    {{-- <input type="text" name="" id="" placeholder="service description" class=" border-1 ml-3"> --}}
                                    <textarea name="description" id="description" value="{{$service->description}}" cols="30" rows="10" class=" border-1 ml-3" required>{{$service->description}}</textarea>
                                </div>
                                <div class="form-group">

                                    <input type="submit" value="save" class="btn btn-sm btn-primary">
                            
                                </div>
                            </form>
                        </div>

                       </div>
                   </div>

               </div>

</section>

@endsection