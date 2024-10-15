@extends('layout.layout')

@section('content')
  <div class="pt-36 container mx-auto ">
    <div class="mt-16 grid grid-cols-5 gap-20">
        <div class="col-span-1">
            <h1> Hello {{ auth()->user()->fullname }}</h1>
            <ul class="border text-black w-[250px] space-y-4 rounded-lg mt-5">
                <li class="bg-grey rounded-t-lg p-2 ">Quick links</li>
                <li class="px-4">My Appointments</li>
                <li class="px-4">My Profile</li>
                <li class="px-4">Change Password</li>
                <li class="px-4">Support</li>
                <li class="px-4">Logout</li>
            </ul>
        </div>
    
        <div class="col-span-3">
            <h1 class="text-2xl font-medium">My appointments</h1>
            <nav class="flex gap-5 items-center">
                <p>My bookings</p>
                <p>Expired</p>
            </nav>

            <div>
                @foreach ($appointments as $appointment )
                    
                <div class="flex items-center justify-between border-2 rounded-lg px-5 py-2 mb-5">
                   <div class="flex gap-10 items-center">
                        <div class="">
                            <img src="https://picsum.photos/200" class="w-24 rounded-full shadow-lg ring-primary" alt="">
                        </div>

                        <div class="text-grey text-sm">
                            <p>{{$appointment->user_id}}</p>
                            <p>{{$appointment->notes}}</p>
                            <p>{{$appointment->date}}</p>
                            <p>10:00am - 12:000pm</p>
                        </div>
                   </div>

                    <button class="bg-primary text-black text-sm px-3 py-2 rounded-lg">Cancel Appointment</button>
                </div>

                @endforeach
            </div>
        </div>
    </div>
  </div>

@endsection