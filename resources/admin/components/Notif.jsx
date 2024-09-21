import React from 'react'
import { IoMdNotificationsOutline } from "react-icons/io";

function Notif() {
  return (
    <div className='relative'>
        <div className='w-3 h-3 absolute rounded-full bg-[#FD0000] right-0'/>
        <div className='bg-white rounded-full p-1'>
          <IoMdNotificationsOutline className='size-7' />
        </div>
    </div>
  )
}

export default Notif