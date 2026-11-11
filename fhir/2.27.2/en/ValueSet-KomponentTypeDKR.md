# Komponent type (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent type (DKR)**

## ValueSet: Komponent type (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentTypeDKR | *Version*:2.27.2 |
| Active as of 2022-12-21 | *Computable Name*:KomponentTypeDKR |

 
Komponent type (DKR) 

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
  "id" : "KomponentTypeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentTypeDKR",
  "version" : "2.27.2",
  "name" : "KomponentTypeDKR",
  "title" : "Komponent type (DKR)",
  "status" : "active",
  "date" : "2022-12-21T00:00:00+02:00",
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
  "description" : "Komponent type (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "femur_component",
        "display" : "Femurkomponent"
      },
      {
        "code" : "tibia_component",
        "display" : "Tibiakomponent"
      },
      {
        "code" : "patella_component",
        "display" : "Patellakomponent"
      }]
    }]
  }
}

```
