import React from 'react'
import Btn from './Btn'
// import Divider from './Divider'
import Divider from '@mui/material/Divider';


function ApprovalReq() {
  return (
    <div className='bg-white rounded-lg px-8 py-5'>
        <div className='mb-5'>
          <h2 className='text-black uppercase'>Approval Request</h2>
          <p className='font-light text-5xl my-3 text-grey'>26</p>
          <p className='text-grey text-sm'>Request Waiting to approve</p>
          <Btn />
        </div>
        
        <Divider/>
        
        <div className='mt-5'>
          <h2 className='text-black uppercase'>Upcoming Appointments</h2>
          <p className='font-light text-5xl my-3 text-grey'>26</p>
          <p className='text-grey text-sm'>Request Waiting to approve</p>
          <Btn />
        </div>
    </div>
  )
}

export default ApprovalReq