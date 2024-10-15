import React from 'react'
import { Avatar, Divider } from '@mui/material'
function InboxCard() {
  return (
    <div className='px-5 py-3'>
        <div className='flex items-center justify-between mb-3'>
            <div className='text-black flex gap-2 items-center'>
                <Avatar/>
                <div>
                  <p className='font-bold text-sm'>Obua Ezra</p>
                  <p className='text-sm'>I would like to have...</p>
                </div>
            </div>
            <div className='flex items-end flex-col text-grey'>
                <p className='text-xs'>12:30pm</p>
                <div className='bg-primary w-5 h-5 rounded-lg p-1 text-right text-xs text-white flex items-center justify-center font-bold'>2</div>
            </div>
        </div>
        <Divider />
    </div>
  )
}

export default InboxCard