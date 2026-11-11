# Klinisk N-kategori DCCG - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Klinisk N-kategori DCCG**

## ValueSet: Klinisk N-kategori DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NKategoriDCCG | *Version*:2.27.2 |
| Active as of 2022-11-08 | *Computable Name*:NKategoriDCCG |

 
Klinisk N-kategori DCCG 

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
  "id" : "NKategoriDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NKategoriDCCG",
  "version" : "2.27.2",
  "name" : "NKategoriDCCG",
  "title" : "Klinisk N-kategori DCCG",
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
  "description" : "Klinisk N-kategori DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "AZCD30",
        "display" : "N0 (Ingen regionale lymfeknudemetastaser)"
      },
      {
        "code" : "AZCD31",
        "display" : "N1 (1-3 regionale lymfeknudemetastaser)"
      },
      {
        "code" : "AZCD32",
        "display" : "N2 (>3 regionale lymfeknudemetastaser)"
      },
      {
        "code" : "AZCD39",
        "display" : "Nx (N-kategorien er ikke vurderet)"
      }]
    }]
  }
}

```
