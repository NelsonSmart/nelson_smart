@extends('admin.inc.layout')
@section('content')

<section class="max-w-7xl mx-auto py-4 px-5">
            
               
               <div class="my-3 p-5">

                    <a href="{{route('resume')}}" class="btn btn-sm btn-outline-primary my-3">Back</a>

                  @if (Route::current()->getName() == 'updatEducate')

                    <div class="card shadow rounded-sm">
                        <div class="card-header">
                            <p class="card-title">Education</p>
                            
                        </div>
                        <div class="card-body">

                            <div class="form">
                                <form action="{{route('updatEdu')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$education->id}}">
                                    <div class="form-group">
                                        <label for="year" class=""> Year </label>
                                        <input type="text" name="year" id="year" placeholder=" start year - end year"  value="{{$education->year}}" class=" border-1 ml-3" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="course" class=""> Course</label>
                                        <input type="text" name="course" id="course" placeholder=" course of study" value="{{$education->course}}" class=" border-1 ml-3" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="school" class="">School</label>
                                        <input type="text" name="school" id="school" placeholder=" university" value="{{$education->school}}" class=" border-1 ml-3" required>
                                    </div>
                                    <div class="form-group flex">
                                        <label for="description" class="mx-3"> Description</label>
                                        {{-- <input type="text" name="" id="" placeholder="service description" class=" border-1 ml-3"> --}}
                                        <textarea name="description" id="description" cols="30" rows="10" value="{{$education->description}}" class=" border-1 ml-3" required> {{$education->description}}</textarea>
                                    </div>
                                    <div class="form-group">

                                        <input type="submit" value="save" class="btn btn-sm btn-primary">
                                
                                    </div>
                                </form>
                            </div>
                      </div>
                  </div>
              @endif
                   
            @if (Route::current()->getName() == 'updateQualify')

                    <div class="card shadow rounded-sm">
                       <div class="card-header">
                           <p class="card-title">Academic Qualification</p>

                           

                           
                       </div>
                       <div class="card-body">

                        <div class="form">
                            <form action="{{route('updateQua')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$qualify->id}}">
                                <div class="form-group">
                                    <label for="year" class="">Year</label>
                                    <input type="text" name="year" id="year" placeholder=" awarded year" value="{{$qualify->year}}" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="cert" class=""> Certificate</label>
                                    <input type="text" name="cert" id="cert" placeholder=" type of certificate" value="{{$qualify->cert}}" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="certlink" class=""> Certificate link</label>
                                    <input type="text" name="certLink" id="certlink" placeholder=" https://example.com/certificate" value="{{$qualify->certLink}}" class=" border-1 ml-3">
                                </div>
                                <div class="form-group">
                                    <label for="academy" class="">Academy</label>
                                    <input type="text" name="academy" id="academy" placeholder=" Academy" value="{{$qualify->academy}}" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group flex">
                                    <label for="description" class="mx-3"> Description</label>
                                    {{-- <input type="text" name="" id="" placeholder="service description" class=" border-1 ml-3"> --}}
                                    <textarea name="description" id="description" cols="30" rows="10" value="{{$qualify->description}}" class=" border-1 ml-3" required>{{$qualify->description}}</textarea>
                                </div>
                                <div class="form-group">

                                    <input type="submit" value="save" class="btn btn-sm btn-primary">
                            
                                </div>
                            </form>
                        </div>

                       </div>
                   </div>
                
            @endif
                       
                   


                  

               </div>

    </section>

@endsection