# Plugin Development Template

**Aprende a crear plugins para Minecraft PE (Bedrock) desde cero.**<br/>
Una plantilla completa y tutorial práctico para aprender a desarrollar plugins para servidores de Minecraft PE (Bedrock) usando PocketMine-MP.<br/>
Ideal para principiantes que quieren iniciarse en el desarrollo de plugins.


<table border="1">
  <tr>
    <th>Description</th>
    <th>Link/Value</th>
  </tr>
  <tr>
    <td>📥 Downloads</td>
    <td><a href="https://github.com/pocketmine-school/MyPlugin"><img src="https://img.shields.io/github/downloads/pocketmine-school/MyPlugin/total" alt="Downloads"></a></td>
  </tr>
  <tr>
    <td>🏷️ Version</td>
    <td><a href="https://github.com/pocketmine-school/MyPlugin/releases/latest"><img src="https://img.shields.io/github/v/release/pocketmine-school/MyPlugin" alt="Version"></a></td>
  </tr>
  <tr>
    <td>⭐ Stars</td>
    <td><a href="https://github.com/pocketmine-school/MyPlugin"><img src="https://img.shields.io/github/stars/pocketmine-school/MyPlugin" alt="Stars"></a></td>
  </tr>
</table>

## 📂 Estructura del proyecto
```
📁 PluginName/                              # Raíz del plugin
│
├── 📁 src/                                 # Código fuente principal
│   │
│   └── 📁 TStark/                          # Vendor/Namespace principal
│       │
│       └── 📁 PluginName/                  # Plugin namespace
│           │
│           ├── 📁 commands/                # Comandos del plugin
│           │   ├── 📄 PluginNameCommand.php    ─── extends Command
│           │   └── 📄 OtherCommand.php         ─── extends Command
│           │
│           ├── 📁 listener/                # Event listeners
│           │   ├── 📄 PlayerListener.php       ─── implements Listener
│           │   └── 📄 WorldListener.php        ─── implements Listener
│           │
│           ├── 📁 tasks/                   # Tareas asíncronas
│           │   └── 📄 CustomTask.php          ─── extends Task
│           │
│           ├── 📁 utils/                   # Utilidades y helpers
│           │   ├── 📄 ConfigManager.php       ─── Gestión de config
│           │   └── 📄 DatabaseManager.php     ─── Gestión de BD
│           │
│           └── 📄 Main.php                 ─── extends PluginBase
│
├── 📁 resources/                           # Recursos y configuraciones
│   ├── 📄 config.yml                       ─── Configuración principal
│   └── 📄 messages.yml                     ─── Mensajes del plugin
│
├── 📁 libs/                                # Librerías externas
│   └── 📁 virions/                         ─── Virions
│
├── 📄 plugin.yml                           ─── Archivo obligatorio
├── 📄 .gitignore                           ─── Archivos a ignorar
└── 📄 README.md                            ─── Documentación
```

## 🛠️ Requisitos previos

- Conocimientos básicos de PHP (no necesarios, pero ayudan)
- Un servidor PocketMine-MP para pruebas
- Ganas de aprender

## 📚 Recursos adicionales

- [Documentación oficial de PocketMine-MP](https://pmmp.readthedocs.io/)
- [Poggit - Distribución de plugins](https://poggit.pmmp.io/)
- [Comunidad de Discord](https://discord.gg/pocketmine)

#### 🌐Urls
- [![MinecraftPe Tools](https://img.shields.io/badge/MinecraftPe_Tools-Website-00a8ff?style=for-the-badge&logo=minecraft)](https://minecraftpetools.netlify.app)
- [![PocketMine School](https://img.shields.io/badge/PocketMine_School-Learn-orange?style=for-the-badge&logo=bookstack)](https://pocketmineschool.netlify.app)

#### 🆔Social Media:
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://tstark.dev/)

[![Instagram](https://img.shields.io/badge/Instagram-%23E4405F.svg?logo=Instagram&logoColor=white)](https://www.instagram.com/tstark.dev)
[![YouTube](https://img.shields.io/badge/YouTube-%23FF0000.svg?logo=YouTube&logoColor=white)](https://www.youtube.com/@tstarkdev)
[![Discord](https://img.shields.io/badge/Discord-%235865F2.svg?&logo=discord&logoColor=white)](#)
[![TikTok](https://img.shields.io/badge/TikTok-black?logo=tiktok&logoColor=white)](https://www.tiktok.com/@tstark.dev)
[![X](https://img.shields.io/badge/X-%23000000.svg?logo=X&logoColor=white)](https://x.com/tstarkdev)

#### 💳Donations
| Method | Link/Information |
|--------|------------------|
[![PayPal](https://img.shields.io/badge/PayPal-003087?logo=paypal&logoColor=fff)](#) | [paypal.me/tstarkdev](https://paypal.me/tstarkdev) |
[![Patreon](https://img.shields.io/badge/Patreon-F96854?logo=patreon&logoColor=white)](#) | [patreon.com/tstarkdev](https://patreon.com/tstarkdev) |
[![Ko-fi](https://img.shields.io/badge/Ko--fi-FF5E5B?logo=ko-fi&logoColor=white)](#) | [ko-fi.com/tstarkdev](https://ko-fi.com/tstarkdev) |
[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?&logo=buy-me-a-coffee&logoColor=black)](#) | [buymeacoffee.com/tstark.dev](http://buymeacoffee.com/tstark.dev) |
Binance | `ID: 1053589975` |
