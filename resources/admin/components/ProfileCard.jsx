import React from 'react'
import avatar from '../assets/avatar.png'
import Btn from './Btn'
import { Divider } from '@mui/material'

function ProfileCard() {
  return (
    <div className='col-span-1 bg-white py-8 flex flex-col items-center gap-3 px-3 text-black rounded-tl-lg rounded-bl-lg'>
      <div className='flex flex-col items-center text-center'>
        <img src={avatar} className='w-14 my-3' alt="" />
        <p className='m-0 text-sm font-bold'>Obua Ezra Junior</p>
        <p className='m-0 text-sm text-grey'>aaron.nevalinz421@gmail.com</p>
      </div>

      <div className='flex justify-between gap-5 my-3'>
        <div className='text-center'>
          <p className='text-sm font-bold m-0'>15</p>
          <p className='text-sm text-grey m-0'>past</p>
        </div>
        <Divider orientation='vertical' variant='middle' flexItem/>
        <div className='text-center'>
          <p className='text-sm font-bold m-0'>2</p>
          <p className='text-sm text-grey m-0'>upcoming</p>
        </div>
      </div>

      <div className='w-full'>
        <button className='bg-transparent border border-grey rounded-lg w-full text-center font-bold text-sm py-2'>Send Message</button>
      </div>
    </div>
  )
}

export default ProfileCard