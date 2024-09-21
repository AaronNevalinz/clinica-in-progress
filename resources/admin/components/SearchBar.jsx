import React from 'react'
import { IoSearchSharp } from "react-icons/io5";

function SearchBar() {
  return (
    <div className='relative border border-grey rounded-full flex items-center px-2'>
        <IoSearchSharp  className='size-5 fill-grey'/>
        <input type="text" className='bg-transparent outline-none px-3' placeholder='search'/>
    </div>
  )
}

export default SearchBar