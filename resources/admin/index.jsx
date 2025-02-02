import React from 'react';
import { createRoot } from 'react-dom/client'
import App from './App'

import '../css/app.css'

const container = document.getElementById('admin');
const root = createRoot(container); // createRoot(container!) if you use TypeScript
root.render(<App/>);
