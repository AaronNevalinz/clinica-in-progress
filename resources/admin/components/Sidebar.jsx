import React from 'react'
import logo from '../assets/black logo.png'
import avatar from '../assets/avatar.png'
import { RiMenu3Fill, RiDashboardHorizontalFill, RiErrorWarningFill } from "react-icons/ri";
import { TbMessageCircleFilled } from "react-icons/tb";
import { FaPeopleGroup } from "react-icons/fa6";
import { IoSettings } from "react-icons/io5";
import { MdKeyboardArrowDown } from "react-icons/md";

import {NavLink, Link} from 'react-router-dom'

function Sidebar() {
  return (
    <div className='w-[270px] h-screen bg-white pt-1 relative col-span-1'>
        <div className='flex justify-between items-center px-3 pb-4'>
            <img src={logo} className='w-[150px]' alt="" />
            <RiMenu3Fill className='text-primary size-6 cursor-pointer'/>
        </div>  

        
        <hr className=''/>
        {/* navigations */}
        <nav className=''>
            <ul>
                <Link to="/">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <RiDashboardHorizontalFill className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm font-bold text-primary'>Overview</p>
                    </li>
                </Link>
                <Link to="/messages">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <TbMessageCircleFilled className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Appointments</p>
                    </li>
                </Link>
                <Link to="/patients">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <FaPeopleGroup className='text-primary size-6 cursor-pointer' />
                        <p className='font-bold text-sm text-primary'>Create Appointment</p>
                    </li>
                </Link>
                <Link to="/settings">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <IoSettings className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Department</p>
                    </li>
                </Link>
                <Link to="/patientdetails">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <IoSettings className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Doctors</p>
                    </li>
                </Link>
                <Link to="/patientdetails">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <IoSettings className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Patients</p>
                    </li>
                </Link>
                <Link to="/patientdetails">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <IoSettings className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Manage Adminx</p>
                    </li>
                </Link>
                <Link to="/patientdetails">
                    <li className='flex gap-3 items-center hover:bg-secondary p-3 cursor-pointer'>
                        <IoSettings className='text-primary size-6 cursor-pointer' />
                        <p className='text-sm text-primary font-bold'>Manage Website</p>
                    </li>
                </Link>
            </ul>
        </nav>

        <div className='absolute bottom-10 w-full'>
            <div className='flex gap-3 items-center text-grey px-3'>
                <RiErrorWarningFill className='text-grey size-4 cursor-pointer'/>
                <p className='text-sm'>Help ?</p>
            </div>
            
            <hr className='my-3'/>

            <div className='px-3 flex items-center justify-between'>
                <div className='flex items-center text-sm text-black gap-2'>
                    <img src={avatar} alt="" />
                    <div>
                        <p className='text-grey'>
                            
                            <span className='font-medium text-black'>Dr. Prishie Abix </span> <br />
                            Dentist
                        </p>
                    </div>
                </div>

                <MdKeyboardArrowDown className='text-black size-6 cursor-pointer'/>
            </div>
        </div>
    </div>
  )
}

export default Sidebar