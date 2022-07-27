@extends('admin.inc.layout')
@section('content')

<section class="max-w-7xl mx-auto py-4 px-5">
               @include('admin.inc.inner_title')


                         @if (session()->has('success'))

                                <div class="alert-success">

                                    {{session('success')}}
                                    
                                </div>
                               
                           @endif
               
               <div class="my-3 p-5">
                   <div class="row">
                     
                       <div class="col-md col-lg-6">

                         <div class="card shadow rounded-sm">
                       <div class="card-header">
                           <p class="card-title">Education</p>
                           
                       </div>
                       <div class="card-body">

                        <div class="form">
                            <form action="{{route('educate')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="year" class=""> Year </label>
                                    <input type="text" name="year" id="year" placeholder=" start year - end year" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="course" class=""> Course</label>
                                    <input type="text" name="course" id="course" placeholder=" course of study" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group">
                                    <label for="school" class="">School</label>
                                    <input type="text" name="school" id="school" placeholder=" university" class=" border-1 ml-3" required>
                                </div>
                                <div class="form-group flex">
                                    <label for="description" class="mx-3"> Description</label>
                                    {{-- <input type="text" name="" id="" placeholder="service description" class=" border-1 ml-3"> --}}
                                    <textarea name="description" id="description" cols="30" rows="10" class=" border-1 ml-3" required></textarea>
                                </div>
                                <div class="form-group">

                                    <input type="submit" value="save" class="btn btn-sm btn-primary">
                            
                                </div>
                            </form>
                        </div>

                       </div>
                   </div>

                       </div>
                       <div class="col-md col-lg-6">
                            <div class="card shadow rounded-sm">
                       <div class="card-header">
                           <p class="card-title">Academic Qualification</p>

                           

                           
                       </div>
                       <div class="card-body">

                        <div class="form">
                            <form action="{{route('qualify')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="year" class="">Year</label>
                                    <input type="text" name="year" id="year" placeholder=" awarded year" class=" border-1 ml-3" required >
                                </div>
                                <div class="form-group">
                                    <label for="cert" class=""> Certificate</label>
                                    <input type="text" name="cert" id="cert" placeholder=" type of certificate" class=" border-1 ml-3" required >
                                </div>
                                <div class="form-group">
                                    <label for="certlink" class=""> Certificate link</label>
                                    <input type="text" name="certLink" id="certlink" value="not set" placeholder=" https://example.com/certificate" class=" border-1 ml-3" >
                                </div>
                                <div class="form-group">
                                    <label for="academy" class="">Academy</label>
                                    <input type="text" name="academy" id="academy" placeholder=" Academy" class=" border-1 ml-3" required >
                                </div>
                                <div class="form-group flex">
                                    <label for="description" class="mx-3"> Description</label>
                                    {{-- <input type="text" name="" id="" placeholder="service description" class=" border-1 ml-3" required> --}}
                                    <textarea name="description" id="description" cols="30" rows="10" class=" border-1 ml-3" required ></textarea>
                                </div>
                                <div class="form-group">

                                    <input type="submit" value="save" class="btn btn-sm btn-primary">
                            
                                </div>
                            </form>
                        </div>

                       </div>
                   </div>
                           
                       </div>
                   </div>


                  

                   <!-- TABLE -->
                <div class="bg-white shadow rounded-sm my-3 overflow-x-auto">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Year</th>
                                <th class="py-3 px-6 text-left">Course</th>
                                <th class="py-3 px-6 text-center">School</th>
                                <th class="py-3 px-6 text-center">Description</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">

                            @foreach ($educations as $education)

                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                            {{$education->year}}
                                    
                                    </td>

                                    <td class="py-3 px-6 text-left">
                                        {{$education->course}}
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        {{$education->school}}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{$education->description}}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                <a href="{{url('admin/resume-page/education/update/'.$education->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg></a>
                                               
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                <a href="{{url('admin/resume-page/education/delete/'.$education->id)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                            @endforeach
                            
                           
                        </tbody>
                    </table>

                     <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Year</th>
                                <th class="py-3 px-6 text-left">Certificate</th>
                               <th class="py-3 px-6 text-center">Certificate Link</th> 
                               <th class="py-3 px-6 text-center">Academy</th>
                               <th class="py-3 px-6 text-center">Description</th>
                               <th class="py-3 px-6 text-center">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">

                            @foreach ($qualifications as $qualification)

                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                            {{$qualification->year}}
                                        
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        {{$qualification->cert}}
                                    </td>
                                     <td class="py-3 px-6 text-left">
                                        {{$qualification->certLink}}
                                    </td>
                                     <td class="py-3 px-6 text-left">
                                        {{$qualification->academy}}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{$qualification->description}}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                <a href="{{url('admin/resume-page/qualification/update/'.$qualification->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg></a>
                                               
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer cursor-pointer">
                                                <a href="{{url('admin/resume-page/qualification/delete/'.$qualification->id)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                            @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
                <!-- END OF TABLE -->
               </div>

    </section>

@endsection