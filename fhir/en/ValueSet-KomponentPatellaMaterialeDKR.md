# Komponent - patella materiale (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - patella materiale (DKR)**

## ValueSet: Komponent - patella materiale (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaMaterialeDKR | *Version*:2.27.2 |
| Active as of 2022-10-13 | *Computable Name*:KomponentPatellaMaterialeDKR |

 
Komponent - patella materiale (DKR) 

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
  "id" : "KomponentPatellaMaterialeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaMaterialeDKR",
  "version" : "2.27.2",
  "name" : "KomponentPatellaMaterialeDKR",
  "title" : "Komponent - patella materiale (DKR)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Komponent - patella materiale (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "metal_backing",
        "display" : "Metal-backing"
      },
      {
        "code" : "polyethylene",
        "display" : "Polyethylen"
      }]
    }]
  }
}

```
