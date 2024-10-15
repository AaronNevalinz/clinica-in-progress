@extends('layout.layout')

@section('content')
<section class=''>
            
    <div class="pt-36 container mx-auto  ">

        <div class="mt-16 grid grid-cols-5 gap-20">
            <div class="col-span-1">
                <h1 class="font-bold"> Hello, {{ auth()->user()->fullname }}</h1>
                <ul class="border text-black w-[250px] space-y-4 rounded-lg mt-5">
                    <li class="bg-grey rounded-t-lg p-2 ">Quick links</li>
                    <li class="px-4">My Appointments</li>
                    <li class="px-4">My Profile</li>
                    <li class="px-4">Change Password</li>
                    <li class="px-4">Support</li>
                    <li class="px-4">Logout</li>
                </ul>
            </div>
        

        <!-- patient form -->
            <form action="" method="POST" class="flex-1 space-y-6 col-span-3">
                @csrf
                <!-- Personal Information -->
                    <p class="text-black font-bold underline">Book an appointment in a matter of seconds here👇🏿👇🏿👇🏿👇🏿</p>
                    <div>
                        <label for="" class="text-black font-bold">Doctor:</label>
                        <div class='flex mt-22 text-black'>
                            <select name="doctor_id" id="" class='w-full px-2 py-2 bg-secondary rounded-md border '>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Peter</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Cameroon</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. LivingStone</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Green Nevalinz</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Sharma</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Remirez</p>
                                </option>
                                <option value="" class='flex cursor-pointer items-center gap-2'>
                                    <p>Dr. Powell</p>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6 xl:flex-row">
                        <div class="flex-1">
                            <label for="reason" class="text-black font-bold">Reason for appointment:</label>
                            <div class=''>
                                <textarea value='{{old('reason')}}' name="reason" id="" cols="30" rows="4" class="bg-secondary w-full px-4 rounded-md text-black outline-none"></textarea>
                            </div>
                            @error('reason')
                                <p class="text-primary">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1">
                            <label for="notes" class="text-black font-bold">Additional Comments/Notes:</label>
                            <div class=''>
                                <textarea value='{{old('notes')}}' name="notes" id="" cols="30" rows="4" class="bg-secondary w-full px-4 rounded-md text-black outline-none"></textarea>
                            </div>
                            @error('notes')
                                <p class="text-primary">{{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex gap-10">
                        <div>
                            <label for="" class="text-black font-bold">Expected appointment Date:</label>
                            <div class='flex mt-2  bg-secondary rounded-md border py-2'>
                                <input value="{{old('date')}}" type="date" name="date"  class='border-0 mx-10 text-base outline-none bg-secondary px-1 flex-1 text-black'>
                                <img src="icons/user.svg" alt="" class="mx-2">
                            </div>
                        </div>
                        <div>
                            <h1>Select a Time</h1>
                            <ul>
                                <li>9:00</li>
                            </ul>
                        </div>
                        @error('date')
                            <p class="text-primary">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="">
                        <button type="submit" class="bg-primary text-black px-4 rounded-md">Submit</button>
                    </div>
            </form>
        </div>
    </div>

</section>
@endsection