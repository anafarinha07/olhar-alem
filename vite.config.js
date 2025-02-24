import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  base: '/',
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, '/'),
        natureza: resolve(__dirname, 'natureza'),
        retratos: resolve(__dirname, 'retratos'),
        preto: resolve(__dirname, 'preto'),
        animal: resolve(__dirname, 'animal'),
        eventos: resolve(__dirname, 'eventos'),
        aldeias: resolve(__dirname, 'aldeias')
      }
    }
  }
});