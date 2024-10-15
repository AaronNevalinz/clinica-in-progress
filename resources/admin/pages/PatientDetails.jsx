import React from 'react'
import ProfileCard from '../components/ProfileCard'
import PersonalInfoCard from '../components/PersonalInfoCard'
import ProfileAppointmentCard from '../components/ProfileAppointmentCard'
import NotesCard from '../components/NotesCard'
import FileCard from '../components/FileCard'

function PatientDetails() {
  return (
    <div className='grid grid-cols-4 gap-10 items-start px-10 mt-5'>
        <div className='grid grid-cols-4 col-span-3 gap-0.5'>
            <ProfileCard />
            <PersonalInfoCard />
            <ProfileAppointmentCard />
        </div>

        <div className='col-span-1'>
            <NotesCard />
            <FileCard />
        </div>
    </div>
  )
}

export default PatientDetails