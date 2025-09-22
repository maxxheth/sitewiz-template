import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import tailwindcss from '@tailwindcss/vite';
import path from 'path';

export default defineConfig({
  server: {
    outDir: './_media',
    host: true,
  }, 
  build: {
    outDir: './_media',
    assetsDir: '',
    rollupOptions: {
      input: {
        app: path.resolve(__dirname, 'resources/assets/app.js'),
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]'
      }
    },
    emptyOutDir: true,
    manifest: true
  },
  plugins: [
	tailwindcss(),
  ]
  
});