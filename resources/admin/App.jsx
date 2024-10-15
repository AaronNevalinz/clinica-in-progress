import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import '../css/app.css'

import Sidebar from './components/Sidebar';
import DashBoard from './pages/DashBoard';
import Navbar from './components/Navbar';
import Divider from './components/Divider'
import Messages from './pages/Messages';
import Patients from './pages/Patients';
import Settings from './pages/Settings';
import PatientDetails from './pages/PatientDetails';


const App = () => {
    return (
        <div>
            <Router>
                <div className='font-primary bg-bgAdmin w-full h-screen grid grid-cols-6'>
                    <Sidebar/>
                    
                    <div className='flex-1 w-full relative col-span-5'>
                        <nav>
                            <Navbar className='fixed top-0'/>
                            <Divider />
                        </nav>
                        <Routes>
                            <Route path='/' element={<DashBoard/>} />
                            <Route path='/admin' element={<DashBoard/>} />
                            <Route path='/messages' element={<Messages/>} />
                            <Route path='/patients' element={<Patients/>} />
                            <Route path='/settings' element={<Settings/>} />
                            <Route path='/patientdetails' element={<PatientDetails/>} />
                        </Routes>
                    </div>
                </div>
            </Router>
        </div>
    );
}
export default App

