import React from 'react'
import Inbox from '../components/Inbox'
import MessageBody from '../components/MessageBody'

function Messages() {
  return (
    <div className='mx-10 mt-3 grid grid-cols-4 gap-3'>
        <Inbox/>
        <MessageBody/>
    </div>
  )
}

export default Messages