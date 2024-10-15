import { Divider } from '@mui/material'
import React from 'react'

function PersonalInfoCard() {
  return (
    <div className='col-span-3 bg-white rounded-tr-lg rounded-br-lg px-5 py-8 grid grid-cols-3 pt-11 text-sm text-grey gap-10'>
        <div>
          <p>Gender</p>
          <p className='text-black mb-2'>Female</p>
          <Divider />
        </div>
        <div>
          <p>Birthday</p>
          <p className='text-black mb-2'>Feb 24th, 1997</p>
          <Divider />
        </div>
        <div>
          <p>Phone Number</p>
          <p className='text-black mb-2'>(256) 777 306 662</p>
          <Divider />
        </div>
        <div>
          <p>Street Address</p>
          <p className='text-black mb-2'>Entebbe, Kawuku Ug.</p>
          <Divider />
        </div>
        <div>
          <p>City</p>
          <p className='text-black mb-2'>Kampala</p>
          <Divider />
        </div>
        <div>
          <p>ZipCode</p>
          <p className='text-black mb-2'>655782</p>
          <Divider />
        </div>
        <div>
          <p>Member Status</p>
          <p className='text-black mb-2'>Active Member</p>
          <Divider />
        </div>
        <div>
          <p>Register Date</p>
          <p className='text-black mb-2'>Feb 24th, 2010</p>
          <Divider />
        </div>
        
    </div>
  )
}

export default PersonalInfoCard