import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  base: '/',
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        natureza: resolve(__dirname, 'natureza.html'),
        retratos: resolve(__dirname, 'retratos.html'),
        preto: resolve(__dirname, 'preto.html'),
        animal: resolve(__dirname, 'animal.html'),
        eventos: resolve(__dirname, 'eventos.html'),
        aldeias: resolve(__dirname, 'aldeias.html')
      }
    }
  }
});