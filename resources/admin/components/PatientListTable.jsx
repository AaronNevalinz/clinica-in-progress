import React from 'react'
import { DataGrid } from '@mui/x-data-grid';
import Paper from '@mui/material/Paper';

const columns = [
  { field: 'id', headerName: 'ID', width: 70 },
  { field: 'Name', headerName: 'Name', width: 180 },
  { field: 'phoneNumber', headerName: 'Phone Number', width: 180 },
  { field: 'city', headerName: 'City', width: 180 },
  { field: 'nextAppointment', headerName: 'Next Appointment', width: 200 },
  { field: 'lastAppointment', headerName: 'Last Appointment', width: 200 },
  { field: 'registerDate', headerName: 'Register Date', width: 200 },

];

const rows = [
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },
  { id: 1, Name: 'Snow', phoneNumber: 'Jon', city: 35, nextAppointment: '20/10/24', lastAppointment:'12/5/24', registerDate:'4/01/2007' },

];

const paginationModel = { page: 0, pageSize: 10 };

function PatientListTable() {
  return (
    <Paper sx={{ height: '100%', width: '100%' }}>
      <DataGrid
        rows={rows}
        columns={columns}
        initialState={{ pagination: { paginationModel } }}
        pageSizeOptions={[5, 10]}
        checkboxSelection
        sx={{ border: 0 }}
      />
    </Paper>
  )
}

export default PatientListTable
