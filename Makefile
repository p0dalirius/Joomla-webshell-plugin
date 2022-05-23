.PHONY: all build

VERSION := 1.1.0

all: build

build:
	@if [ -f ./dist/joomla-webshell-plugin-${VERSION}.zip ]; then rm ./dist/joomla-webshell-plugin-${VERSION}.zip; fi
	@if [ ! -d ./dist/ ]; then mkdir ./dist/; fi
	@cd plugin; zip -r ../dist/joomla-webshell-plugin-${VERSION}.zip .
	@echo "[+] Saved to ./dist/joomla-webshell-plugin-${VERSION}.zip"
