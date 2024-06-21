import requests
import json

def download_datakatalog():
    d = requests.get("https://nvdbapiles-v3.atlas.vegvesen.no/vegobjekttyper").json()

    for i,v in enumerate(d):
        d[i] = f"{v.get('id')} {v.get('navn')}"
    
    with open('vegobjekttyper.txt', 'w', encoding='utf-8') as f:
        for line in d:
            f.write(f"{line}\n")

download_datakatalog()