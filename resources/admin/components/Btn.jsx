import React from 'react'
import { MdKeyboardArrowRight } from "react-icons/md";

function Btn() {
  return (
    <div className='inline-block bg-lightPrimary  rounded-full px-3 py-1 cursor-pointer'>
        <div className='flex items-center gap-3 text-black text-sm'>
           <p>More</p>
           <div className='bg-primary rounded-full'>
              <MdKeyboardArrowRight className='size-4 fill-white'/>
           </div>
        </div>
    </div>
  )
}

export default Btn