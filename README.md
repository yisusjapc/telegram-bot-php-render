# telegram-bot-php-render

Bot de Telegram en PHP desplegado gratis usando [Render.com](https://render.com).

## ¿Cómo desplegar?

1. Ve a https://render.com y haz clic en "New Web Service".
2. Conecta tu cuenta de GitHub y selecciona este repositorio.
3. Render detectará automáticamente el entorno PHP.
4. Una vez desplegado, configura tu webhook:

```
https://api.telegram.org/botTU_TOKEN/setWebhook?url=https://TU_DOMINIO.onrender.com/index.php
```

Reemplaza `TU_TOKEN` y `TU_DOMINIO` por los reales.

Listo 🎉
