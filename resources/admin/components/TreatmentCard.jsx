import React from 'react'
import Btn from './Btn'

function TreatmentCard() {
  return (
    <div className='bg-white rounded-lg py-3 px-5'>
        <h2 className='uppercase text-black'>Top Treatment</h2>
        <ul className='text-black mt-4'>
            <li>1. Consultation</li>
            <li>2. Scaling</li>
            <li>3. Root Canal</li>
            <li>4. Bleaching</li>
            <li>5. Wisdom Teeth Removal</li>
            <li>6. Consultation</li>
        </ul>

        <Btn />
    </div>
  )
}

export default TreatmentCard