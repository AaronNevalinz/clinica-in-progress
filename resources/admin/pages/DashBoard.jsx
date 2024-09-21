import React from 'react'
import ChartSection from '../components/ChartSection'
import ApprovalReq from '../components/ApprovalReq'
import Divider from '../components/Divider'
import AppointmentCard from '../components/AppointmentCard'
import TreatmentCard from '../components/TreatmentCard'
import TotalPatientsCard from '../components/TotalPatientsCard'


function DashBoard() {
  return (
    <div>
        {/* <Divider /> */}

        <div className='grid grid-cols-3 px-10 gap-10 mt-5'>
          <ChartSection/>
          <ApprovalReq />
        </div>

        <div className='px-10 mt-5 grid grid-cols-3 justify-between gap-10'>
          <AppointmentCard />
          <TreatmentCard />
          <TotalPatientsCard />
        </div>
    </div>
  )
}

export default DashBoard