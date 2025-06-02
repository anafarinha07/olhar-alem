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
        animais: resolve(__dirname, 'animais.html'),
        objetos: resolve(__dirname, 'objetos.html')
      }
    }
  }
});