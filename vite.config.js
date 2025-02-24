import { defineConfig } from 'vite';

export default defineConfig({
  base: '/',
  build: {
    rollupOptions: {
      input: {
        main: '/index.html',
        natureza: '/natureza.html',
        retratos: '/retratos.html',
        preto: '/preto.html',
        animal: '/animal.html',
        eventos: '/eventos.html',
        aldeias: '/aldeias.html'
      }
    }
  }
});