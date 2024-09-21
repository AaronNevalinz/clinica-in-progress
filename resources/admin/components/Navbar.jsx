import React from 'react'
import {RiDashboardHorizontalFill} from 'react-icons/ri'
import SearchBar from './SearchBar'
import Notif from './Notif'

function Navbar() {
  return (
    <div className='text-black flex justify-between px-10  h-16 gap-10'>
      <div className='flex items-center gap-2'>
        <RiDashboardHorizontalFill  className='size-4'/>
        <p>Dashboard Overview</p>
      </div>

      <div className='flex gap-5 items-center'>
        <SearchBar/>
        <Notif />
      </div>
    </div>
  )
}

export default Navbar