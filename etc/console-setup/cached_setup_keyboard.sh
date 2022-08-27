#!/bin/sh

if [ -f /run/console-setup/keymap_loaded ]; then
    rm /run/console-setup/keymap_loaded
    exit 0
fi
kbd_mode '-u' 
loadkeys '/run/tmpkbd.rmdfvT' > '/dev/null' 
