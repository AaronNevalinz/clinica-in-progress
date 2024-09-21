import React from 'react'
import Btn from './Btn'

function TotalPatientsCard() {
  return (
    <div className='bg-white rounded-lg py-3 px-5'>
        <div>
            <h2 className='uppercase text-black'>Total Patients this Month</h2>
            <p className='font-light text-grey text-7xl mt-2'>26</p>
        </div>

       <div className='my-3'>
           <h2 className='uppercase text-black'>Total Patients All time</h2>
           <p className='font-light text-grey text-7xl mt-2'>1000</p>
       </div>
        
        <Btn />
    </div>
  )
}

export default TotalPatientsCard