import React from 'react'
import SearchBar from './SearchBar'
import InboxCard from './InboxCard'

function Inbox() {
  return (
    <div>
        <div className='bg-white px-5 py-3 mb-1 col-span-1'>
            <SearchBar />
        </div>
        <div className='bg-white h-screen'>
            <InboxCard />
            <InboxCard />
            <InboxCard />
        </div>
    </div>
  )
}

export default Inbox