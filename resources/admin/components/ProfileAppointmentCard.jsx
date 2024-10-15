import React from 'react'

function ProfileAppointmentCard() {
  return (
    <div className='col-span-4 bg-white mt-5 rounded-lg px-3 py-5 h-full'>
      <nav className='text-sm text-black p-1 bg-bgAdmin flex rounded-lg items-center gap-3'>
        <p className='bg-white px-4 py-1 text-primary font-bold rounded-lg'>Upcoming appointments</p>
        <p className='bg-white px-4 py-1 text-primary font-bold rounded-lg'>Past Appointments</p>
        <p className='bg-white px-4 py-1 text-primary font-bold rounded-lg'>Medical Records</p>
      </nav>
      
    </div>
  )
}

export default ProfileAppointmentCard