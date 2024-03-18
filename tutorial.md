## Install Blade UI Kit
https://github.com/blade-ui-kit/blade-icons/blob/1.x/README.md?plain=1

Install the package with composer:

```php
composer require blade-ui-kit/blade-icons
```

Then, publish the configuration and **uncomment** the `default` icon set:

```bash
php artisan vendor:publish --tag=blade-icons
```

## Install tailwind forms plugin
https://github.com/tailwindlabs/tailwindcss-forms?tab=readme-ov-file

Install the plugin from npm:

Tujuan benda ni untuk reset basic form styling dan mudah untuk override guna utility class Tailwindcss

```bash
npm install -D @tailwindcss/forms
```

## Add Tailwind Configurations

On file tailwind.config.js , replace following code 

```bash
theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'primary' : {
                    100: '#F2F6F8',
                    200: '#99C8FC',
                    300: '#7999AD',
                    400: '#3E6286',
                    500: '#05285E',
                    600: '#011149',
                    700: '#000233',
                    800: '#01001A',
                    900: '#01001A',
                },
                'neutral' : {
                    100: '#FFFFFF',
                    200: '#F2F2F2',
                    300: '#E7E7E7',
                    400: '#DDDDDD',
                    500: '#D2D2D2',
                    600: '#9E9E9E',
                    700: '#696969',
                    800: '#000000',
                },
            },
        },
        
    },

    plugins: [forms],
```

### Download SVG File ni

https://drive.google.com/drive/folders/1h4inr03fMttGM5EJA0iSpAJN8W-hhbL1?usp=sharing

