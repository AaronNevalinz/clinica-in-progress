import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
    ],
     // configuration of server
    server:{
        proxy:{
          '/api':{
            target:'http://127.0.0.1:8000',
            changeOrigin: true,
            headers:{
              Accept:'application/json',
              "content-Type":'application/json'
            }
          }
        }
      }
});
