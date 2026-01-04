import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [tailwindcss()],
  server: {
    cors: true, // allow all origins
  },
  build: {
    manifest: true,
    outDir: 'public/build',
    rollupOptions: {
      input: {
        app: '/app/Resources/app.js',
        style: '/app/Resources/app.css'
      }
    },
  },
});