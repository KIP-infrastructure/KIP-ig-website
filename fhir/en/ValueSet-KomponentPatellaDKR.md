# Komponent - patella (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - patella (DKR)**

## ValueSet: Komponent - patella (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaDKR | *Version*:2.27.1 |
| Active as of 2023-01-17 | *Computable Name*:KomponentPatellaDKR |

 
Komponent - patella (DKR) 

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
  "id" : "KomponentPatellaDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaDKR",
  "version" : "2.27.1",
  "name" : "KomponentPatellaDKR",
  "title" : "Komponent - patella (DKR)",
  "status" : "active",
  "date" : "2023-01-17T00:00:00+02:00",
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
  "description" : "Komponent - patella (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "other",
        "display" : "Anden komponent"
      }]
    },
    {
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
