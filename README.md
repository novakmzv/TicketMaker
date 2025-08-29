# TicketMaker 🎫

Sistema de gestión de tickets y generación de PDFs

## 🚀 Tecnologías Utilizadas

| Tecnología | Versión |
|------------|---------|
| **PHP** | 8.4.8 |
| **Laravel Framework** | 12.26.3 |
| **Composer** | 2.8.9 |
| **Spatie/Laravel-PDF** | ^1.7 |
| **Bootstrap** | 5.1.3 |
| **Puppeteer** | Latest |

## 🏗️ Estructura del Proyecto

```
TicketMaker/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── TicketController.php
│   │   └── Requests/
│   │       └── StoreTicketRequest.php
│   ├── Models/
│   │   ├── ClientType.php
│   │   ├── Game.php
│   │   └── Ticket.php
│   ├── Services/
│   │   └── TicketService.php
│   └── Strategies/
│       ├── PricingStrategyInterface.php
│       ├── RegularPricingStrategy.php
│       ├── VipPricingStrategy.php
│       ├── EstudiantePricingStrategy.php
│       └── PricingStrategyResolver.php
├── database/
│   ├── migrations/
│   │   ├── create_client_types_table.php
│   │   ├── create_games_table.php
│   │   └── create_tickets_table.php
│   └── seeders/
│       ├── ClientTypeSeeder.php
│       └── GameSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── tickets/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── show.blade.php
│           └── pdf.blade.php
└── routes/
    └── web.php
```

## 🔧 Instalación y Configuración

### Prerrequisitos
- **PHP 8.4+**
- **Composer 2.8+**

### Pasos de instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/novakmzv/TicketMaker.git
cd TicketMaker
```

2. **Instalar dependencias de PHP**
```bash
composer install
```

3. **Instalar dependencias de Node.js**
```bash
npm init -y
npm install puppeteer
```

4. **Configurar el archivo de entorno**
```bash
cp .env.example .env
```

5. **Generar la clave de aplicación**
```bash
php artisan key:generate
```

6. **Configurar la base de datos en `.env`**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ticketmaker
DB_USERNAME=root
DB_PASSWORD=
```

7. **Ejecutar migraciones y seeders**
```bash
php artisan migrate --seed
```

8. **Iniciar el servidor de desarrollo**
```bash
php artisan serve
```

9. **Acceder a la aplicación**
```
http://localhost:8000/tickets
```

## 🤝 Contribución

1. Fork el proyecto
2. Crear una rama para tu feature (`git checkout -b feature/nueva-caracteristica`)
3. Commit tus cambios (`git commit -am 'Agregar nueva característica'`)
4. Push a la rama (`git push origin feature/nueva-caracteristica`)
5. Crear un Pull Request

---

**Desarrollado con ❤️**
