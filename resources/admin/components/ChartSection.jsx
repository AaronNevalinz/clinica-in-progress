import { BarChart } from '@mui/x-charts'
import React from 'react'

function ChartSection() {
  return (
    <div className='col-span-2 bg-primary text-white p-5 rounded-lg'>
        <h2 className='text-white font-bold text-xl'>Good Morning, Dr. Prishie</h2>
        
        <div className='mt-5 flex items-center justify-between'>
            <p>APPOINTMENT STATS</p>

            <div className='bg-lightPrimary rounded-lg'>
                <ul className='flex w-[350px] text-sm p-1 gap-3'>
                    <li className='bg-white text-black rounded-lg px-2 py-0.5'>Monthly</li>
                    <li className='bg-white text-black rounded-lg px-2 py-0.5'>Weekly</li>
                    <li className='bg-white text-black rounded-lg px-2 py-0.5'>Daily</li>
                </ul>
            </div>
        </div>

        {/* the chart */}
        <BarChart
          xAxis={[
            {
              id: 'barCategories',
              data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              scaleType: 'band',
            },
          ]}
          series={[
            {
              data: [700, 550, 900, 1000, 930, 800, 1500, 2500, 1400, 1100, 900, 3000],
            },
          ]}
          className='w-full'
          height={250}
        />
    </div>
  )
}

export default ChartSection