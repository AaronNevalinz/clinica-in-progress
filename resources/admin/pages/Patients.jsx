import React from 'react'
import PatientListTable from '../components/PatientListTable'
import { Divider } from '@mui/material'

function Patients() {
  return (
    <div className=''>
      <div className='px-10 my-3 flex gap-5 items-center text-black'>
        <p className='text-3xl text-primary font-bold'>76</p>
        <p>Patients</p>
      </div>

      <Divider />
      
      <div className='px-10 mt-3'>
        <PatientListTable />
      </div>
    </div>
  )
}

export default Patients