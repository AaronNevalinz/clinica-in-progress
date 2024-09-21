import React from 'react'
import Btn from './Btn'

function AppointmentCard() {
  return (
    <div className='bg-white rounded-lg py-3 px-5'>
        <h2 className='uppercase text-black'>Today's Appointments (4)</h2>

        <div className='grid grid-cols-3 items-start mt-4'>
            <p className='font-light text-grey text-9xl col-span-1'>4</p>
            <div className='col-span-2'>
                <div className='bg-accent-quaternary rounded-lg p-2 mb-2' >
                  <div className='flex justify-between text-sm items-center'>
                      <div>
                          <p className='text-grey'>Treatment</p>
                          <p className='text-black'>Consultation</p>
                      </div>
                      <p className='text-grey'>9:00 - 10:00</p>
                  </div>
               </div>
            
                <div className='bg-accent-quaternary rounded-lg p-2 mb-2' >
                  <div className='flex justify-between text-sm items-center'>
                      <div>
                          <p className='text-grey'>Treatment</p>
                          <p className='text-black'>Consultation</p>
                      </div>
                      <p className='text-grey'>9:00 - 10:00</p>
                  </div>
               </div>
                <div className='bg-accent-quaternary rounded-lg p-2 mb-2' >
                  <div className='flex justify-between text-sm items-center'>
                      <div>
                          <p className='text-grey'>Treatment</p>
                          <p className='text-black'>Consultation</p>
                      </div>
                      <p className='text-grey'>9:00 - 10:00</p>
                  </div>
               </div>

            </div>
        </div>

        <Btn />
    </div>
  )
}

export default AppointmentCard