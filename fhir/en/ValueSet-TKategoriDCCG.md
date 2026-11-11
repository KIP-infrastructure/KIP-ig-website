# Klinisk T-kategori DCCG - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Klinisk T-kategori DCCG**

## ValueSet: Klinisk T-kategori DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TKategoriDCCG | *Version*:2.27.3 |
| Active as of 2022-11-08 | *Computable Name*:TKategoriDCCG |

 
Klinisk T-kategori DCCG 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TKategoriDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TKategoriDCCG",
  "version" : "2.27.3",
  "name" : "TKategoriDCCG",
  "title" : "Klinisk T-kategori DCCG",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Klinisk T-kategori DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "AZCD10",
        "display" : "T0"
      },
      {
        "code" : "AZCD13",
        "display" : "T1"
      },
      {
        "code" : "AZCD14",
        "display" : "T2"
      },
      {
        "code" : "AZCD15",
        "display" : "T3"
      },
      {
        "code" : "AZCD16",
        "display" : "T4"
      },
      {
        "code" : "AZCD16A",
        "display" : "T4a (gennemvækst af peritoneum)"
      },
      {
        "code" : "AZCD16B",
        "display" : "T4b (indvækst i naboorgan/-struktur)"
      },
      {
        "code" : "AZCD19",
        "display" : "Tx"
      }]
    }]
  }
}

```
