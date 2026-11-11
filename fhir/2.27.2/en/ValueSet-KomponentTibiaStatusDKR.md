# Komponent - tibia, status (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - tibia, status (DKR)**

## ValueSet: Komponent - tibia, status (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentTibiaStatusDKR | *Version*:2.27.2 |
| Active as of 2022-10-13 | *Computable Name*:KomponentTibiaStatusDKR |

 
Komponent - tibia, status (DKR) 

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
  "id" : "KomponentTibiaStatusDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentTibiaStatusDKR",
  "version" : "2.27.2",
  "name" : "KomponentTibiaStatusDKR",
  "title" : "Komponent - tibia, status (DKR)",
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
  "description" : "Komponent - tibia, status (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "inserted",
        "display" : "Indsat"
      },
      {
        "code" : "not_replaced",
        "display" : "Ikke udskiftet (revision)"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "polyethylene_change",
        "display" : "Polyethylen-skift (ved revision)"
      }]
    }]
  }
}

```
