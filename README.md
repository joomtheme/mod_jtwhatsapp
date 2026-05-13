# JT WhatsApp Button

![Joomla](https://img.shields.io/badge/Joomla-6.x-blue)
![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4)
![License](https://img.shields.io/badge/License-GPL%20v2%2B-green)
![Version](https://img.shields.io/badge/Version-1.1.2-orange)

JT WhatsApp Button is a simple floating WhatsApp contact button module for Joomla.

It allows you to display a lightweight WhatsApp button on your Joomla website with a custom phone number, default message, position, label visibility and mobile display options.

## Features

- Floating WhatsApp contact button
- Custom WhatsApp phone number
- Custom default message
- Left / right position
- Bottom offset option
- Show / hide button label
- Show / hide on mobile devices
- English and Turkish language support
- Responsive frontend display
- Joomla Web Asset Manager support
- Joomla standard media folder structure
- Joomla update support ready

## Requirements

- Joomla 6.x
- PHP 8.3+

## Installation

1. Download the latest release package.
2. Log in to Joomla Administrator.
3. Go to **System -> Install -> Extensions**.
4. Upload the module ZIP package.
5. Go to **Content -> Site Modules**.
6. Open **JT WhatsApp Button**.
7. Publish the module and assign it to a template position.
8. Enter your WhatsApp phone number with country code.
9. Optionally enter a default message.

Example phone format:

```text
+90 5XX XXX XX XX
```

The phone number field is optional. If it is left empty, the WhatsApp button will not be displayed on the frontend.

## Module Options

### WhatsApp Phone

Enter your WhatsApp phone number with country code.

Example format:

```text
+90 5XX XXX XX XX
```

You may enter the number with spaces or a leading `+`. The module will clean the number before generating the WhatsApp link.

### Default Message

Set an optional default message that will be pre-filled when visitors open WhatsApp.

### Position

Choose where the floating button appears:

- Right
- Left

### Bottom Offset

Set the distance from the bottom of the screen.

Default:

```text
20px
```

You can use values such as:

```text
20px
2rem
5%
```

### Show Label

Choose whether to display the text label next to the WhatsApp icon.

If disabled, the module will display an icon-only button.

### Show on Mobile

Choose whether the button should be displayed on mobile devices.

## Update

### Manual Update

1. Download the latest release package.
2. Log in to Joomla Administrator.
3. Go to **System -> Install -> Extensions**.
4. Upload the updated module ZIP package.
5. Joomla will detect the existing module and update it.

### Joomla Update System

If the update server is configured, Joomla can detect new versions from the administrator update system.

## Changelog

### v1.1.2

- Improved WhatsApp phone field hint and description
- Replaced real-looking example phone number with a safer placeholder format
- Kept the phone field optional for demo and testing environments
- Updated English and Turkish language strings

### v1.1.1

- Made the WhatsApp phone field optional
- Removed strict phone validation
- Prevented frontend output when the phone field is empty
- Improved admin field descriptions

### v1.1.0

- Added bottom offset option
- Added show / hide on mobile option
- Added show / hide label option
- Added icon-only display support
- Moved CSS assets to Joomla standard `/media/mod_jtwhatsapp/` location
- Updated asset loading path
- Updated Turkish and English language strings

### v1.0.9

- Fixed language file syntax for JED Checker compatibility
- Fixed administrator description links
- Fixed external links to open correctly in a new tab
- Improved Turkish administrator texts
- Kept extension naming consistent across languages

## Author

- [JoomTheme](https://joomtheme.com)

## License

GNU General Public License version 2 or later
