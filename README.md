# WordPress mail history by LetGrow

This is a wordpress plugins 

This plugin will collect all emails sent from your wordpress. And will display them on the list.

# Features

- [] - csv import/export

# Uninstall

Beware as this plugin will fully cleanup itself before uninstall and you will lose all stored emails. Please make backup using export function before uninstall.

# Any questions?

Leave a PR or create an issue

## WP CLI

Run wp-cli commands as follows:
```
docker compose run --rm wp-cli <command>
```

## Localization

Generate pot files
```
docker compose run --rm wp-cli i18n make-pot wp-content/plugins/<plugin-name>
```

PO to MO files
```
msgfmt -o languages/letgrow-chatbot-pl_PL.mo languages/letgrow-chatbot-pl_PL.pot
```