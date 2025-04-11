// Ejemplo de configuración típica para Laravel + Vite
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'; // Si usas Vue

export default defineConfig({
  plugins: [
    laravel([
      'resources/css/app.css',
      'resources/js/app.js',
    ]),
    vue(), // Si usas Vue
  ],
});